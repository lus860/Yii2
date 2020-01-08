<?php
namespace app\widgets\Booklist;

use Yii;
use app\models\Books;
use app\models\Authors;
use app\models\AuthorsAndBooks;
use yii\base\Widget;
use yii\data\ActiveDataProvider;




class Booklist extends Widget
{
    public $id;
    public function run()
        
    {   $searchModel = new AuthorsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
         $model = Authors::find()->where(['id' => $this->id])->one();
        $books=$model->getBooks();
        
        return $this->render('booklist', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model'=>$model,
        ]);
       
        
    }
    
}