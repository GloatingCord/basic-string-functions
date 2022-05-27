<?php 

namespace Main\Strings;

interface StringInterface {

    public function mb_strrev(string $word, ?string $encoding); 
    public function create_secure_password(string $word);
}