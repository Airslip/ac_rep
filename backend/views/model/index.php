<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'slug',
            'photo',
            'carcase_type',
            // 'description',
            // 'brand',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php $f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?=$f->field($form, 'file')->fileinput()?>
    <?= Html::submitButton('Отправить');?>
<?php ActiveForm::end(); ?>
