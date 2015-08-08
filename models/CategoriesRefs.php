<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories_refs".
 *
 * @property integer $id_category
 * @property integer $id_entity
 * @property string $type
 */
class CategoriesRefs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories_refs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'entity_id'], 'integer'],
            [['entity_id', 'type'], 'required'],
            [['type'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    /*
    public function attributeLabels()
    {
        return [
            'id_category' => 'Id Category',
            'id_entity' => 'Id Entity',
            'type' => 'Type',
        ];
    }
    */
}
