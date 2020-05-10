<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'u_nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_datetime')->textInput() ?>

    <?= $form->field($model, 'u_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_role')->dropDownList([ 'Administrateur' => 'Administrateur', 'Modérateur' => 'Modérateur', 'Membre' => 'Membre', 'Nouveau Membre' => 'Nouveau Membre', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'u_grade')->dropDownList([ 'Nouveau' => 'Nouveau', 'Membre' => 'Membre', 'Habitué' => 'Habitué', 'Pilier' => 'Pilier', 'Légende' => 'Légende', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'u_number_speech')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
