<?php

namespace GloatingCord26\BasicStringFunctions;

interface StringInterface
{
    public function mbStrrev(?string $encoding);

    public function createSecurePassword();
}
