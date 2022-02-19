<?php

namespace iggyvolz\obs\Generation;

use iggyvolz\obs\ObsException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpLiteral;
use Nette\PhpGenerator\PsrPrinter;
use Stringable;

final class ObsEnum implements Savable
{
    /**
     * @param ObsEnumIdentifier[] $enumIdentifiers
     */
    public function __construct(
        public readonly string $enumType,
        /** @var ObsEnumIdentifier[] */
        public readonly array $enumIdentifiers,
    )
    {
    }

    public function save(ClassType $trait): void
    {
        $file = new PhpFile();
        $class = $file->setStrictTypes()->addNamespace("iggyvolz\\obs\\Enum")->addClass($this->enumType)->setType(ClassType::TYPE_ENUM)->addComment("@autogenerated");
        foreach($this->enumIdentifiers as $enumIdentifier) {
            $value = $enumIdentifier->enumValue;
            if(is_string($value) && is_numeric($value)) {
                $value = intval($value);
            }
            if(is_string($value) && preg_match("/\\(1 << ([0-9]+)\\)/", $value, $matches)) {
                $value = 1 << intval($matches[1]);
            }
            if(is_string($value) && $value[0] === "(") {
                $values = explode(" | ", substr($value, 1, -1));
                $values = array_map(fn(string $s): PhpLiteral => new PhpLiteral("self::$s"), $values);
                $class->addConstant($enumIdentifier->enumIdentifier, $values);
                continue;
            }
            $class->addCase($enumIdentifier->enumIdentifier, $value)->addComment($enumIdentifier->description);
        }
        if($this->enumType === "RequestStatus") {
            foreach($this->enumIdentifiers as $enumIdentifier) {
                if(in_array($enumIdentifier->enumIdentifier, [
                    "Unknown",
                    "NoError",
                    "Success"
                ])) continue;
                $exceptionFile = new PhpFile();
                $exceptionClass = $exceptionFile->setStrictTypes()->addNamespace("iggyvolz\\obs\\Exception")->addClass($enumIdentifier->enumIdentifier . "Exception")->setExtends(ObsException::class)->addComment("@autogenerated");
                $constructor = $exceptionClass->addMethod("__construct");
                $constructor->addParameter("comment")->setType("?string");
                $constructor->addBody("parent::__construct(\$comment, \\iggyvolz\\obs\\Enum\\$this->enumType::$enumIdentifier->enumIdentifier->value);");
                file_put_contents(__DIR__ . "/../Exception/{$enumIdentifier->enumIdentifier}Exception.php", (new PsrPrinter())->printFile($exceptionFile));
            }
        }
        file_put_contents(__DIR__ . "/../Enum/$this->enumType.php", (new PsrPrinter())->printFile($file));
    }
}