<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Collectors */

$this->title = 'Create Collectors';
$this->params['breadcrumbs'][] = ['label' => 'Collectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collectors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
