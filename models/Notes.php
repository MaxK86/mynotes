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
     * Relations many-to-many for "notes" and "categories"
     * Relations via a Junction Table http://www.yiiframework.com/doc-2.0/guide-db-active-record.html
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['id' => 'category_id'])
            ->viaTable('categories_refs', ['entity_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notes';
    }

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
}
