<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_post_fk')->textInput() ?>

    <?= $form->field($model, 'c_author_fk')->textInput() ?>

    <?= $form->field($model, 'c_reporting')->dropDownList([ 'Signalé' => 'Signalé', 'Non signalé' => 'Non signalé', 'Modéré' => 'Modéré', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'c_status')->dropDownList([ 'Lu' => 'Lu', 'Non lu' => 'Non lu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'c_datetime')->textInput() ?>

    <?= $form->field($model, 'c_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'c_vote')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
