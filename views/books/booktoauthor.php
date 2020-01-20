<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\base\Widget;
use yii\data\ActiveDataProvider;
//use app\components\booktoauthor\Booktoauthor;
use app\components\bookandauthor\Bookandauthor;

?>
 
 <h1>Book by this author</h1>
 <h2><?php echo $model->title?></h2>

<?php echo Bookandauthor::widget(['param'=>$param, 'model' => 'Book']); ?>

