<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Автодилер</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($brands as $brand) { ?>
                <p><a class="btn btn-default" href="<?=Yii::$app->urlManager->createUrl(["site/:slug", ':slug' => $brand->slug])?>"><?=$brand->name?></a></p>
            <?php } ?>
        </div>

    </div>
</div>
