<?php

namespace iggyvolz\obs\Requests;

class SceneItemTransform
{
    public function __construct(
        public readonly int $alignment,
        public readonly int $boundsAlignment,
        public readonly float $boundsHeight,
        public readonly string $boundsType,
        public readonly float $boundsWidth,
        public readonly int $cropBottom,
        public readonly int $cropLeft,
        public readonly int $cropRight,
        public readonly int $cropTop,
        public readonly float $height,
        public readonly float $positionX,
        public readonly float $positionY,
        public readonly float $rotation,
        public readonly float $scaleX,
        public readonly float $scaleY,
        public readonly float $sourceHeight,
        public readonly float $sourceWidth,
        public readonly float $width,
    )
    {
    }
}