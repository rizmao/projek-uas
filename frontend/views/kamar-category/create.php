<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KamarCategory */

$this->title = 'Create Kamar Category';
$this->params['breadcrumbs'][] = ['label' => 'Kamar Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
