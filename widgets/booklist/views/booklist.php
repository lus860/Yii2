<?php
/* @var $this yii\web\View */
/* @var $authorsList[] frontend\models\Author */
use yii\helpers\Url;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

?>
<h1>Books</h1>

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
                    $str.= $group->name;
                    }
                    return  $str;
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
     

