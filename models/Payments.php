<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%payments}}".
 *
 * @property int $id
 * @property string $amount
 * @property string $collector_code
 * @property string $location_code
 * @property string $payment_mode
 * @property string $mobile_money_number
 * @property string $toll_type_code
 * @property string $goods_type_code
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%payments}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'collector_code', 'location_code', 'payment_mode', 'toll_type_code'], 'required'],
            [['amount'], 'number'],
            [['payment_mode'], 'string'],
            [['deleted_at', 'created_at', 'updated_at'], 'safe'],
            [['collector_code', 'location_code', 'mobile_money_number', 'toll_type_code', 'goods_type_code'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amount' => 'Amount',
            'collector_code' => 'Collector Code',
            'location_code' => 'Location Code',
            'payment_mode' => 'Payment Mode',
            'mobile_money_number' => 'Mobile Money Number',
            'toll_type_code' => 'Toll Type Code',
            'goods_type_code' => 'Goods Type Code',
            'deleted_at' => 'Deleted At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
