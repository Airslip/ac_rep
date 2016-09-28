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
            <?php foreach ($models as $model) { ?>
                <ul>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/request", ':model' => $model->slug])?>"><?=$model->name?></a></li>
                </ul>
            <?php } ?>
        </div>

    </div>
</div>