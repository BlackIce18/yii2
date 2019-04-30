<?php
namespace app\models;

use app\models\Goods;
use app\queries\GoodsQuery;

use yii\data\ActiveDataProvider;

class GoodsSeacrh extends Goods {
    public function getGoodById($id) {
        return $this->findOne($id);
    }
    public function getActive() {
        return $this->find()->getActive();
    }
}