<?php
namespace app\models;

use yii\db\ActiveRecord;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


class Goods extends ActiveRecord {

    public function behaviors() {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at','updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('now()'),
            ]
        ];
    }

    public static function tableName() {
        return '{{%goods}}';
    }
    
    public function rules() {
        return [
            [['name'],'string','max'=>255],
            [['category_id'],'integer'],
            [['price'],'double'],
            [['images'],'file', /*'skipOnEmpty' => false,*/ 'extensions' => 'png, jpg, gif, jpeg', 'maxFiles' => 5],
            [['description'],'string'],
            [['created_at','updated_at'],'date', 'format' => 'yyyy-M-d H:m:s'],
            [['name','description','category_id'],'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'название',
            'category_id' => 'категория',
            'price' => 'цена',
            'images' => 'изображения',
            'description' => 'описание',
            'created_at' => 'дата создания',
            'updated_at' => 'дата обновления',
        ];
    }
}