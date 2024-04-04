<?php



Class Category{

    public $type, $icon;

    function __construct($type, $icon){
        $this->type=$type;
        $this->icon= $icon;
    }

}