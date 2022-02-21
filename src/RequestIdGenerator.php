<?php

namespace iggyvolz\obs;

interface RequestIdGenerator
{
    public function getRequestId(): string;
}