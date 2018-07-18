<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Payments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'collector_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_mode')->dropDownList([ 'cash' => 'Cash', 'mobile money' => 'Mobile money', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mobile_money_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toll_type_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_type_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
