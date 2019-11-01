<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart 
{

    public $items = 0;
    public $totalqty = 0;
    public $totalprice = 0;
    public function __constructor($oldcart)
    {
        if($oldcart)
        {
            $this->items = $odlcart->items;
            $this->totalqty = $odlcart->totalqty;
            $this->totalprice = $odlcart->totalprice;

        }
    }
}
