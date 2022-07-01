<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Sistem Informasi Rumah singgah Lamongan </h1>
    </div>

</div>
    <h1 class="lead">Daftar Kos yang ada di lamongan </h1>
    <div class="body-content">

        <div class="col-4 pl-0">
            <?php $form = ActiveForm::begin([
                'method' => 'get',
                'action' => Url::to(['/kamar/filter'])
            ]); ?>

            <label>Categories</label>
            <div class="d-flex">
                <select name="category_id" class="form-control mb-3 mr-3">
                    <?php 
                        foreach ($categories as $category) {
                            ?>
                                <option value="<?= $category->id ?>"><?= $category->name ?></option>
                            <?php
                        }
                    ?>
                </select>

                <div class="form-group">
                    <?= Html::submitButton('Filter', ['class' => 'btn btn-info']) ?>
                </div>

            </div>

            <?php ActiveForm::end(); ?>
        </div>

        <div class="row">
            <?php 
                foreach ($model as $kamar) {
                    ?>
                        <div class="col-lg-4">
                            <?= Html::img('@web/img/' . $kamar->img_url, ['class' => 'img-thumbnail rounded mb-3', 'width' => '50%'])?>

                            <h2><?= $kamar->nama_kamar ?></h2>

                            <p>Rp.<?= number_format($kamar->biaya_sewa)?></p>

                            <p><a class="btn btn-success" href="http://localhost/kos/frontend/web/kamar">Detail</a></p>
                        </div>
                    <?php
                }
            ?>
                      
        </div>

        <br>
        <?php 
            echo LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>

    </div>
</div>