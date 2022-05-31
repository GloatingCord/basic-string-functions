<?php

namespace GloatingCord26\BasicStringFunctions;

class StringFuncs implements StringInterface
{
    public function __construct(
        private string $word,
    ) {
    }

    public function mbStrrev($encoding = null): string
    {
        if (null === $encoding) {
            $encoding = mb_detect_encoding($this->word);
        }

        $length = mb_strlen($this->word, $encoding);
        $reversed = '';
        while ($length-- > 0) {
            $reversed .= mb_substr($this->word, $length, 1, $encoding);
        }

        return $reversed;
    }

    public function createSecurePassword(): string
    {
        return password_hash($this->word, PASSWORD_DEFAULT);
    }
}
