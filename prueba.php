<?php
    class Pato{
        public $id=123;
    }

    class Pollo extends Pato{

    }

    $f = new Pollo;
    echo $f->id;
?>