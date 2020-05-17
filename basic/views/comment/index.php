<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

<!--TODO SERA UTILISE COMME DASHBOARD BACKOFFICE DES COMMENTAIRES POUR LA MODERATION-->
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'c_id',
            'c_post_fk',
            'c_author_fk',
            'c_reporting',
            'c_status',
            //'c_datetime',
            //'c_title',
            //'c_content:ntext',
            //'c_vote',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
