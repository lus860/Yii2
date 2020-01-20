<?php

namespace app\components\bookandauthor;

use Yii;
use app\models\Book;
use app\models\Author;
use yii\data\ActiveDataProvider;
use yii\base\Widget;

class Bookandauthor extends Widget
{   
    public $param;
    public $model;
    public $query;
    public $views='';
    
    public function init()
    {
        parent::init();
        $render='';
        if ($this->param === null) {
            echo 'Error...';die;
        } 
        
        if ( $this->model == 'Book' ){
            if ( is_numeric($this->param )) {
               $this->query = Book::find()->andWhere(['id'=>$this->param]);
               $this->views = 'booktoauthor';
            } elseif( is_object( $this->param )) {
               $this->query=$this->param; 
               $this->views = 'booklist';
            }
        } elseif($this->model == 'Author') {
            if ( is_numeric($this->param )) {
               $this->query = Author::find()->andWhere(['id'=>$this->param]);
               $this->views = 'authortobook';
            } elseif( is_object( $this->param )) {
               $this->query=$this->param; 
               $this->views = 'authorlist';
            }
            
        }
        
    }

    public function run()
    {  
        $dataProvider=new ActiveDataProvider([
           'query'=>$this->query,
            'pagination' => [
                'pageSize' => 7,
            ],
        ]);  
       
        return $this->render($this->views, [
        'dataProvider' => $dataProvider,
        ]); 
      
    }
    
}