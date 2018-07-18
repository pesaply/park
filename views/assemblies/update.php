<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assemblies */

$this->title = 'Update Assemblies: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Assemblies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="assemblies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
