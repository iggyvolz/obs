<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SaveSourceScreenshot
{
    /**
     * @param string $sourceName Name of the source to take a screenshot of
     * @param string $imageFormat Image compression format to use. Use `GetVersion` to get compatible image formats
     * @param string $imageFilePath Path to save the screenshot file to. Eg. `C:\Users\user\Desktop\screenshot.png`
     * @param null|int $imageWidth Width to scale the screenshot to
     * @param null|int $imageHeight Height to scale the screenshot to
     * @param null|int $imageCompressionQuality Compression quality to use. 0 for high compression, 100 for uncompressed. -1 to use "default" (whatever that means, idk)
     * @return \Amp\Future<\iggyvolz\obs\Responses\SaveSourceScreenshotResponse>
     */
    public function saveSourceScreenshot(
        string $sourceName,
        string $imageFormat,
        string $imageFilePath,
        null|int $imageWidth = null,
        null|int $imageHeight = null,
        null|int $imageCompressionQuality = null
    ): \Amp\Future {
        return $this->request([
            "sourceName" => $sourceName,
            "imageFormat" => $imageFormat,
            "imageFilePath" => $imageFilePath,
            "imageWidth" => $imageWidth,
            "imageHeight" => $imageHeight,
            "imageCompressionQuality" => $imageCompressionQuality,
        ], "SaveSourceScreenshot", \iggyvolz\obs\Responses\SaveSourceScreenshotResponse::class);
    }
}
