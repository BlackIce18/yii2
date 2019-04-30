<?php
namespace app\models\forms;

use yii\base\Model;
use app\models\Goods;

class GoodsForm extends Model {
    public $id;
    public $name;
    public $category_id;
    public $price;
    public $description;
    public $images;
    public $created_at;
    public $updated_at;

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