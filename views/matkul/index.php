<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Matkul;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatkulSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matkuls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matkul-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Matkul', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'matkul',
            'dosen',
            'jadwal',
            'ruangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Matkul $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
