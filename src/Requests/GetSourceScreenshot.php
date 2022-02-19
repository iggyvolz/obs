<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetSourceScreenshot
{
    /**
     * @param string $sourceName Name of the source to take a screenshot of
     * @param string $imageFormat Image compression format to use. Use `GetVersion` to get compatible image formats
     * @param null|int $imageWidth Width to scale the screenshot to
     * @param null|int $imageHeight Height to scale the screenshot to
     * @param null|int $imageCompressionQuality Compression quality to use. 0 for high compression, 100 for uncompressed. -1 to use "default" (whatever that means, idk)
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetSourceScreenshotResponse>
     */
    public function getSourceScreenshot(
        string $sourceName,
        string $imageFormat,
        null|int $imageWidth = null,
        null|int $imageHeight = null,
        null|int $imageCompressionQuality = null
    ): \Amp\Future {
        return $this->request([
            "sourceName" => $sourceName,
            "imageFormat" => $imageFormat,
            "imageWidth" => $imageWidth,
            "imageHeight" => $imageHeight,
            "imageCompressionQuality" => $imageCompressionQuality,
        ], "GetSourceScreenshot", \iggyvolz\obs\Responses\GetSourceScreenshotResponse::class);
    }
}