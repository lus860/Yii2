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

            'id',
            'title',
            'created_at',
            [
                'label' => 'Authors',
                'format' => 'ntext',
                'attribute'=>'author',
                'value' => function($model) 
                    {   $str = '';
                        foreach ($model->author as $group) {
                            $str.= $group->name." ".$group->surname.'/'." ";
                        }
                        $str= substr($str, 0, -2);
                        return $str;
                    },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
?>
    
     
