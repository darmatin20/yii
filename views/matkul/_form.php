<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Matkul */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matkul-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matkul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dosen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jadwal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ruangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
