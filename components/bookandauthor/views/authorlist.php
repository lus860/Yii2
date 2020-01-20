<?php


use app\models\Book;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Author;
use app\models\AuthorAndBook;
use yii\data\ActiveDataProvider;?>



<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'surname',
            'created_at',
            [
                'label' => 'Books',
                'format' => 'ntext',
                'attribute'=>'book',
                'value' => function($model) 
                    {   $str = '';
                        foreach ($model->book as $group) {
                            $str.= $group->title.'/'." ";
                        }
                        $str= substr($str, 0, -2);
                        return $str;
                    },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
?>
    
     
