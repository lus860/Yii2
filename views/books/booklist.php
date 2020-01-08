<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\base\Widget;
use yii\widgets\DetailView;
use yii\data\ActiveDataProvider;
use app\components\booklist\Booklist;

?>
 
 <h1>Books And Authors</h1>

<?php echo Booklist::widget(); ?>








