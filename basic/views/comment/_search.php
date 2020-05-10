<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CommentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'c_id') ?>

    <?= $form->field($model, 'c_post_fk') ?>

    <?= $form->field($model, 'c_author_fk') ?>

    <?= $form->field($model, 'c_reporting') ?>

    <?= $form->field($model, 'c_status') ?>

    <?php // echo $form->field($model, 'c_datetime') ?>

    <?php // echo $form->field($model, 'c_title') ?>

    <?php // echo $form->field($model, 'c_content') ?>

    <?php // echo $form->field($model, 'c_vote') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
