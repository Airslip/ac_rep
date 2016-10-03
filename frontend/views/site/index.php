<?php

/* @var $this yii\web\View */

$this->title = 'Автодилер';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Автодилер</h1>
    </div>

    <div class="body-content">

        <div>
            <h3 id="choose_a">Выберите бренд</h3>
            <ul id="brand_list">
            <?php foreach ($brands as $brand) { ?>
                <li><a class="btn btn-default" href="<?=Yii::$app->urlManager->createUrl(["site/model", 'brand' => $brand->slug])?>"><img src="images/<?=$brand->logo?>.jpg" width="156" height="156"></a></li>
            <?php } ?>
            </ul>
        </div>

    </div>
</div>
