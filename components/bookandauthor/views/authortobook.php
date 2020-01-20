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
            [
                'format' => 'html',
                'attribute' => 'book_id',
                'value' => function( $model )
                    {   $str = '';
                        foreach ( $model->book as $group ) {
                            $str.=Html::tag('h3', Html::encode($group->title), ['style' => ['color' => 'red']]);
                            $str.=Html::tag('p', Html::encode( $group->created_at ))."<hr>";
                        };
                    
                        return $str;
                    },
            ],
    
        ],
    ]); 
?>
    