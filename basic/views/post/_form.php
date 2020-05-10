<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'p_author_fk')->textInput() ?>

    <?= $form->field($model, 'p_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_extract')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_datetime')->textInput() ?>

    <?= $form->field($model, 'p_vote')->textInput() ?>

    <?= $form->field($model, 'p_status')->dropDownList([ 'Brouillon' => 'Brouillon', 'Publié' => 'Publié', 'Modifié' => 'Modifié', 'Supprimé' => 'Supprimé', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'p_reporting')->dropDownList([ 'Signalé' => 'Signalé', 'Non signalé' => 'Non signalé', 'Modéré' => 'Modéré', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'p_category')->dropDownList([ 'Présentation' => 'Présentation', 'Analyse Fondamentale' => 'Analyse Fondamentale', 'Stratégie d' => 'Stratégie d', 'investissement' => 'Investissement', 'Ressources, lexique, tutoriels' => 'Ressources, lexique, tutoriels', 'Trading' => 'Trading', 'Divers' => 'Divers', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
