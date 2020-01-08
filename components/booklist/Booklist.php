<?php

namespace app\components\booklist;

use Yii;
use app\models\Books;
use app\models\Authors;
use app\models\BooksSearch;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Widget;

class Booklist extends Widget
{
    public function run()
        
    {   $searchModel = new BooksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = Authors::find()->where(['id' => $this->id])->one();
        
        
        //var_dump($model);die;
        return $this->render('booklist', [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
        'model'=>$model,
        
        ]); 
        
    }
    
}