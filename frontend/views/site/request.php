<?php

/* @var $this yii\web\View */

$this->title = 'Автодилер';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Автодилер</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <?=$model->name?>
            <?=$model->photo?>
            <?=$model->carcase_type?>
            <?=$model->description?>
        </div>

    </div>
</div>