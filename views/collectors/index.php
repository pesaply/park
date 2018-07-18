<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CollectorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Collectors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collectors-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Collectors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'collector_code',
            'name',
            'email:email',
            'phone_number',
            //'api_token',
            //'password',
            //'assigned_toll_type',
            //'assigned_location',
            //'remember_token',
            //'deleted_at',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
