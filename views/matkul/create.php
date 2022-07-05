<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matkul */

$this->title = 'Create Matkul';
$this->params['breadcrumbs'][] = ['label' => 'Matkuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matkul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
