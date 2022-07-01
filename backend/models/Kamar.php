<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "kamar".
 *
 * @property int $id
 * @property string $kode_kamar
 * @property string $nama_kamar
 * @property int $biaya_sewa
 * @property string $img_url
 * @property string $Keterangan
 * @property string $category_id
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Kamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     * 
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
            [['kode_kamar', 'nama_kamar', 'biaya_sewa', 'img_url', 'Keterangan', 'category_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['biaya_sewa'], 'integer'],
            [['kode_kamar', 'nama_kamar'], 'string', 'max' => 100],
            [[ 'category_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'string', 'max' => 255],
            [['Keterangan'], 'string', 'max' => 200],
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
            // 'img_url' => 'Img Url',
            // 'Keterangan' => 'Keterangan',
            // 'category_id' => 'Category ID',
            // 'created_at' => 'Created At',
            // 'created_by' => 'Created By',
            // 'updated_at' => 'Updated At',
            // 'updated_by' => 'Updated By',
        ];
    }
}
