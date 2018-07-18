<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Assemblies */

$this->title = 'Create Assemblies';
$this->params['breadcrumbs'][] = ['label' => 'Assemblies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assemblies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
