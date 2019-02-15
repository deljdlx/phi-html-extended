<?php

namespace Phi\HTML\Extended\Element;


use Phi\HTML\Element\Div;

class Row extends Div
{

    public function __construct()
    {
        $this->addClass('row');
    }

}

