<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
	<!--TODO SERA UTILISE COMME DASHBOARD BACKOFFICE DES MEMBRES POUR LA MODERATION-->
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'u_id',
            'u_nickname',
            'u_datetime',
            'u_email:email',
            'u_password',
            //'u_role',
            //'u_grade',
            //'u_number_speech',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
