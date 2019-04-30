<?php

namespace app\services;

use app\models\forms\GoodsForm;
use app\models\Goods;

class GoodsService 
{
    public function add(GoodsForm $GoodsForm) {
        $good = new Goods();
        $good->name = $GoodsForm->name;
        $good->category_id = $GoodsForm->category_id;
        $good->price = $GoodsForm->price;
        $good->images = $GoodsForm->images;
        $good->description = $GoodsForm->description;

        return $good->save();
    }
}