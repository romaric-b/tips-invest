<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">
	<!--TODO SERA UTILISE COMME DASHBOARD BACKOFFICE DES ARTICLES POUR LA MODERATION-->
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'p_id',
            'p_author_fk',
            'p_title',
            'p_extract:ntext',
            'p_content:ntext',
            //'p_datetime',
            //'p_vote',
            //'p_status',
            //'p_reporting',
            //'p_category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
