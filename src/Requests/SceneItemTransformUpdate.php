<?php

namespace iggyvolz\obs\Requests;

class SceneItemTransformUpdate
{
    public function __construct(
        public readonly ?int $alignment = null,
        public readonly ?int $boundsAlignment = null,
        public readonly ?float $boundsHeight = null,
        public readonly ?string $boundsType = null,
        public readonly ?float $boundsWidth = null,
        public readonly ?int $cropBottom = null,
        public readonly ?int $cropLeft = null,
        public readonly ?int $cropRight = null,
        public readonly ?int $cropTop = null,
        public readonly ?float $height = null,
        public readonly ?float $positionX = null,
        public readonly ?float $positionY = null,
        public readonly ?float $rotation = null,
        public readonly ?float $scaleX = null,
        public readonly ?float $scaleY = null,
        public readonly ?float $sourceHeight = null,
        public readonly ?float $sourceWidth = null,
        public readonly ?float $width = null,
    )
    {
    }
}