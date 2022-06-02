<?php

namespace GloatingCord26\BasicStringFunctions;

class StringFuncs implements StringInterface
{
    public function mbStrrev($word): string
    {
        $encoding = null;

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

    public function createSecurePassword($word): string
    {
        return password_hash($this->word, PASSWORD_DEFAULT);
    }
}
