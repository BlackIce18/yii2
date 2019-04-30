<?php

namespace app\services;

use app\models\forms\CategoryForm;
use app\models\Category;

class CategoryService 
{

    public function add(CategoryForm $form) 
    {
        $category = new Category();
        $category->id = $form->id;
        $category->name = $form->name;

        return $category->save();
    }

}