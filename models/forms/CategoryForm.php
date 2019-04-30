<?php

namespace app\models\forms;

use yii\base\Model;
use app\models\Category;

class CategoryForm extends Model{
    public $id;
    public $name;
    public $created_at;
    public $updated_at;

    public function rules()
    {
        return [
            [['id'],'integer'],
            [['name'],'string','max'=>255],
            [['name'],'required'],
            [['created_at','updated_at'],'date','format'=>'Y-m-d h:i:s'],
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
}