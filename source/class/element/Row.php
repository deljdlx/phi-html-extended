<?php

namespace Phi\HTML\Extended\Element;


use Phi\HTML\Element\Div;

class Row extends Div
{

    protected $gridDivisionNumber = 12;

    /**
     * @var Col[]
     */
    public $cols = [];


    public function __construct()
    {
        parent::__construct();
        $this->addClass('row');
    }


    public function getCol($index)
    {
        return $this->cols[$index];
    }


    public function split()
    {

        $divisionSizes =func_get_args();

        foreach ($divisionSizes as $size) {

            $col = new Col($size);
            $this->cols[] = $col;

            $this->append($col);
        }

        return $this;


    }



}

