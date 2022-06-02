<?php

namespace GloatingCord26\BasicStringFunctions;

interface StringInterface
{
    public function mbStrrev(string $word);

    public function createSecurePassword(string $word);
}
