<?php

use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;
use iggyvolz\obs\Generation\ObsProtocol;
use iggyvolz\obs\Obs;

require_once __DIR__ . '/vendor/autoload.php';
// https://github.com/obsproject/obs-websocket/blob/master/docs/generated/protocol.json
Obs::decode(file_get_contents("https://raw.githubusercontent.com/obsproject/obs-websocket/master/docs/generated/protocol.json"), ObsProtocol::class)->save();
