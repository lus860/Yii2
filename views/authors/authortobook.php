<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\base\Widget;
use yii\data\ActiveDataProvider;
use app\components\bookandauthor\Bookandauthor;

?>
 
 <h1>Book by this author</h1>
 <h2><?php echo $model->name." ".$model->surname?></h2>


<?php echo Bookandauthor::widget(['param' => $param, 'model' => 'Author']); ?>

