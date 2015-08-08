<?php

namespace app\models;

use Yii;

class Categories extends \kartik\tree\models\Tree
{
    public static function tableName()
    {
        return 'categories';
    }    
    

//    public function getNotes()
//    {
//        echo "xxx";
//        exit;
//        return $this->hasMany(Notes::className(), ['id' => 'entity_id'])
//            ->viaTable('categories_refs', ['category_id' => 'id']);
//    }

}
