<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Carcase */

$this->title = 'Create Carcase';
$this->params['breadcrumbs'][] = ['label' => 'Carcases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carcase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
