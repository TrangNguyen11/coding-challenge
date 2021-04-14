<?php

interface TextInputInterface {
    public function add(string $text);
}

class TextInput implements TextInputInterface {
    protected $text = '';

    public function add($text) {
        $this->text .= $text;
    }

    public function getValue(){
        return $this->text;
    }
}

class NumericInput extends TextInput {
    public function add($text) {
        $this->text .= preg_replace("/[^0-9]/", "", $text);
         
    }
}

?>