<?php

namespace app\models\search;

use app\models\Category;
use yii\data\ActiveDataProvider;

class SearchCategory extends Category {

    public function rules() {
        return [
            [['id','name','created_at','updated_at'],'safe'],
        ];
    }

    public function search(array $params) {
        $query = self::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ]
        ]);

        if(!($this->load($params)&&$this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['id'=>$this->id]);
        $query->andFilterWhere(['like','name'=>$this->name]);

        return $dataProvider;
    }
}