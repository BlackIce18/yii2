<?php

namespace app\models;

use yii\db\ActiveRecord;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

use app\queries\CategoryQuery;

class Category extends ActiveRecord {

    public function behaviors() {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('now()'),
            ]
        ];
    }

    public static function tableName() {
        return '{{%category}}';
    }

    public function rules() {
        return [
            [['name'],'string','max'=>255],
            [['name'],'unique'],
            [['name'],'required'],
            [['created_at','updated_at'],'date', 'format' => 'yyyy-M-d H:m:s'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'название',
            'created_at' => 'дата создания',
            'updated_at' => 'дата обновления',
        ];
    }

    public static function find() {
        return new CategoryQuery(get_called_class());
    }

}