<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Автодилер';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Автодилер</h1>
        <p><?=$message?></p>
    </div>

    <div class="body-content">
        <div id="car_photo">
            <img src="images/<?=$model->photo?>.jpg" width="520" height="400">
        </div>
        <div id="car_info">
            <ul id="info_list">
                <li><h2><?=$model->brand?> <?=$model->name?></h2></li>
                <li><h4><?=$model->carcase_type?></h4></li>
                <li><?=$model->description?></li>
            </ul>
        </div>
        <div id="request_form">
            <?php $f = ActiveForm::begin(); ?>
            <?=$f->field($request, 'name')?>
            <?=$f->field($request, 'phone')?>
            <?= Html::submitButton('Отправить');?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>