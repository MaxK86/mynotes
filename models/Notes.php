<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notes".
 *
 * @property integer $id
 * @property string $body
 * @property string $created
 * @property integer $id_file
 */
class Notes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notes';
    }

    public function getCategories()
    {        
        return $this->hasMany(Categories::className(), ['id' => 'category_id'])
            ->viaTable('categories_refs', ['entity_id' => 'id']);
    }
    
    public function setTags($tags)
    {
        $this->unlinkAll('tags',true);
        foreach ($tags as $tagAsArray) {
            $tag = new Tag($tagAsArray);
            $this->link('tags',$tag);
        }
    }
    
    #https://github.com/yiisoft/yii2/issues/5372
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['body'], 'required'],
            [['body'], 'string'],
            [['created'], 'safe'],
            [['id_file'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'body' => 'Body',
            'created' => 'Created',
            'id_file' => 'Id File',
        ];
    }
    
    
//    public function ttt()
//    {
//        
//    }
   
}
