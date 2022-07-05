<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matkul */

$this->title = 'Update Matkul: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matkuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matkul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
