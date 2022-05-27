<?php

namespace Main\Strings;

use \Exception;

class StringFuncs implements StringInterface
{
    public function mb_strrev(string $word, $encoding = null): string {
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

    public function create_secure_password(string $word): string {
        $password = password_hash($word, PASSWORD_DEFAULT);

        return $password;
    }
}
