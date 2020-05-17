<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
		L'erreur ci-dessus s'est produite pendant que le serveur Web traitait votre requête.
    </p>
    <p>
		Merci de nous contacter si vous pensez qu'il s'agit d'une erreur serveur, merci.
    </p>

</div>
