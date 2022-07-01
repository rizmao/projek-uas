<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kamar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kamar-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= Html::img('../../../frontend/web/img/' . $model->img_url, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3 mt-5', 'width' => '300px']) ?>


    <?= $form->field($model, 'kode_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya_sewa')->textInput() ?>

    <?= $form->field($model, 'file_upload')->fileInput() ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
