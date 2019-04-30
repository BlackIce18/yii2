<?php

namespace app\queries;

use app\models\Category;
use yii\db\ActiveQuery;

class CategoryQuery extends ActiveQuery {

    public function allCategories() {
        return $this->all();
    }

    public function getCategory($id) {
        return $this->andWhere(['id'=>$id])->all();
    }


}