<?php

namespace app\models;

use Yii;

class Categories extends \kartik\tree\models\Tree
{
    public static function tableName()
    {
        return 'categories';
    }    
}
