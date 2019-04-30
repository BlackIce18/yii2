<?php

namespace app\controllers;

use yii\web\Controller;
use yii\base\Module;


use app\models\Goods;
use app\models\forms\GoodsForm;
use app\services\GoodsService;

class GoodsController extends Controller {

    private $service;

    public function __construct(string $id, Module $module, GoodsService $service, array $config = [])
    {
        $this->service = $service;
        parent::__construct($id,$module,$config);
    }


    public function actionIndex() {
        return $this->render('index');
    }
    public function actionAdd() {
        $GoodsForm = new GoodsForm();

        if ($GoodsForm->load(\Yii::$app->request->post()) && $GoodsForm->validate()) {
            ($this->service->add($GoodsForm)) ? \Yii::$app->session->setFlash('success', "Запись успешно добавлена") : \Yii::$app->session->setFlash('error', "Запись не добавлена");
        }

        return $this->render('add',['GoodsForm'=>$GoodsForm]);
    }
    public function actionUpdate() {}
    public function actionRemove() {}
    public function actionView() {}
}