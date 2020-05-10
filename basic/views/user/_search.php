<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'u_id') ?>

    <?= $form->field($model, 'u_nickname') ?>

    <?= $form->field($model, 'u_datetime') ?>

    <?= $form->field($model, 'u_email') ?>

    <?= $form->field($model, 'u_password') ?>

    <?php // echo $form->field($model, 'u_role') ?>

    <?php // echo $form->field($model, 'u_grade') ?>

    <?php // echo $form->field($model, 'u_number_speech') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
