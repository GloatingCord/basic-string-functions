<?php

namespace GloatingCord26\BasicStringFunctions;

interface StringInterface
{
    public function mbStrrev(string $word, ?string $encoding);

    public function createSecurePassword(string $word);
}
