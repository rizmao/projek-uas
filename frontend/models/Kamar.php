<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "kamar".
 *
 * @property int $id
 * @property string $kode_kamar
 * @property string $nama_kamar
 * @property int $biaya_sewa
 */
class Kamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file_upload;
    public static function tableName()
    {
        return 'kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kamar', 'nama_kamar', 'biaya_sewa'], 'required'],
            [['biaya_sewa'], 'integer'],
            [['kode_kamar', 'nama_kamar'], 'string', 'max' => 100],
            [['file_upload'], 'file', 'extensions' => 'jpg, jpeg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_kamar' => 'Kode Kamar',
            'nama_kamar' => 'Nama Kamar',
            'biaya_sewa' => 'Biaya Sewa',
        ];
    }
}
