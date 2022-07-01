<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order_kamar".
 *
 * @property int $id
 * @property int $order_id
 * @property int $kamar_id
 */
class OrderKamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'kamar_id'], 'required'],
            [['order_id', 'kamar_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'kamar_id' => 'Kamar ID',
        ];
    }
}
