<?php


use yii\helpers\Url;
use app\models\Books;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Authors;
use app\models\AuthorsAndBooks;
use yii\data\ActiveDataProvider;?>



<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'created_at',
            [
                'label' => 'Groups',
                'format' => 'ntext',
                'attribute'=>'authors',
                'value' => function($model) {
                    $str = '';
                    foreach ($model->getAuthors() as $group) {
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
    
     
