<?php

namespace Main;

interface StringInterface
{
    public function mbStrrev(string $word, ?string $encoding);

    public function createSecurePassword(string $word);
}
