<?php


namespace app\models;


use app\core\Model;

class MainModel extends Model
{

    function getData()
    {
        return explode(', ', $this->fh);
    }
}