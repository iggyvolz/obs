<?php

namespace iggyvolz\obs\Generation;

use Nette\PhpGenerator\ClassType;

interface Savable
{
    public function save(ClassType $trait): void;
}