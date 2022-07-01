
<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->params['breadcrumbs'][] = ['label' => 'Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

            ?>
<div class="container">
    <div class="row">
        <h1><?= Html::encode($this->title)?></h1>
        <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= Html::img('../../../frontend/web/img/' . $model->img_url, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3 mt-5', 'width' => '300px']) ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kode_kamar',
            'nama_kamar',
            'biaya_sewa',
        ],
    ]) ?>
    </div>

</div>