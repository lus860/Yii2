<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\base\Widget;
use yii\data\ActiveDataProvider;
use app\components\bookandauthor\Bookandauthor;

?>
 
 <h1>Books And Authors</h1>

<?php echo Bookandauthor::widget(['param' => $param, 'model' => 'Book']); ?>








