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
            <?php foreach ($brands as $brand) { ?>
                <p><a class="btn btn-default" href="<?=Yii::$app->urlManager->createUrl(["site/model", 'brand' => $brand->slug])?>"><?=$brand->name?></a></p>
            <?php } ?>
        </div>

    </div>
</div>
