<?php

namespace Phi\HTML\Extended\Element;


use Phi\HTML\Element\Div;

class Col extends Div
{
    private $size;


    public function __construct($size)
    {
        parent::__construct();
        $this->size = $size;

        $this->addClass('col-'.$size);
    }

}