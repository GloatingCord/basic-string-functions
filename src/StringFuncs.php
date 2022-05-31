<?php

namespace GloatingCord26\BasicStringFunctions;

class StringFuncs implements StringInterface
{
    public function mbStrrev(string $word, $encoding = null): string
    {
        if (null === $encoding) {
            $encoding = mb_detect_encoding($word);
        }

        $length = mb_strlen($word, $encoding);
        $reversed = '';
        while ($length-- > 0) {
            $reversed .= mb_substr($word, $length, 1, $encoding);
        }

        return $reversed;
    }

    public function createSecurePassword(string $word): string
    {
        return password_hash($word, PASSWORD_DEFAULT);
    }
}
