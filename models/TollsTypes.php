<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tolls_types}}".
 *
 * @property int $id
 * @property string $toll_type_code
 * @property string $name
 * @property string $amount
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 */
class TollsTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tolls_types}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['toll_type_code', 'name', 'amount'], 'required'],
            [['amount'], 'number'],
            [['deleted_at', 'created_at', 'updated_at'], 'safe'],
            [['toll_type_code', 'name'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'toll_type_code' => 'Toll Type Code',
            'name' => 'Name',
            'amount' => 'Amount',
            'deleted_at' => 'Deleted At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
