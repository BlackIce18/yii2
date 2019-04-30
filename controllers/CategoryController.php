<?php

namespace app\controllers;
use yii\base\Module;
use yii\web\Controller;

use yii\data\Pagination;

use app\models\Category;
use app\models\forms\CategoryForm;
use app\models\search\SearchCategory;
use app\queries\CategoryQuery;
use app\services\CategoryService;

class CategoryController extends Controller {

    private $service;

    public function __construct(string $id, Module $module, CategoryService $service, array $config = [])
    {
        $this->service = $service;
        parent::__construct($id,$module,$config);
    }

    public function actionIndex() {
/*        $labels = (new Category())->attributeLabels();
        $categories = Category::find()->allCategories();

        return $this->render('index',['categories'=>$categories,'labels'=>$labels]);*/

        $searchModel = new SearchCategory();
        $dataProvider = $searchModel->search(\Yii::$app->request->get());
        return $this->render('index',['searchModel'=>$searchModel,'dataProvider'=>$dataProvider]);
    }

    public function actionAdd() {
        $model = new CategoryForm();

        if($model->load(\Yii::$app->request->post()) && $model->validate()) {
            ($this->service->add($model)) ? \Yii::$app->session->setFlash('success', "Запись успешно добавлена") : \Yii::$app->session->setFlash('error', "Запись не добавлена");
        }
        return $this->render('Add',['model'=>$model]);
    }

    public function actionRemove() {
        $model = Category::findOne(\Yii::$app->request->get('id'));
        ($model->delete()) ? \Yii::$app->session->setFlash('success', "Запись удалена") : \Yii::$app->session->setFlash('error', "Запись не удалена");
        return $this->goBack();
    }

    public function actionUpdate() {
        $model = Category::findOne(\Yii::$app->request->get('id'));
        if($model->load(\Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) { 
                \Yii::$app->session->setFlash('success', "Запись успешно обновлена");
                return $this->goBack();
            }
            else { 
                \Yii::$app->session->setFlash('error', "Запись не обновлена"); 
            }
        }
        return $this->render('Update',['model'=>$model]);
    }

    public function actionView() {
        $oneCategory = Category::findOne(\Yii::$app->request->get('id'));
        return $this->render('View',['oneCategory'=>$oneCategory]);
    }

}