<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "collectors".
 *
 * @property string $id
 * @property string $collector_code
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property string $api_token
 * @property string $password
 * @property string $assigned_toll_type
 * @property string $assigned_location
 * @property string $remember_token
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 */
class Collectors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'collectors';
    }

    public function validatePassword($password)
    {
        return static::findOne(['password' => $password]);
    }

    public static function findByUsername($username)
    {

        return static::findOne(['collector_code' => $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['collector_code', 'name', 'password'], 'required'],
            [['deleted_at', 'created_at', 'updated_at'], 'safe'],
            [['collector_code', 'name', 'email', 'phone_number', 'api_token', 'password', 'assigned_toll_type', 'assigned_location'], 'string', 'max' => 191],
            [['remember_token'], 'string', 'max' => 100],
            [['collector_code'], 'unique'],
            [['email'], 'unique'],
            [['phone_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'collector_code' => 'Collector Code',
            'name' => 'Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'api_token' => 'Api Token',
            'password' => 'Password',
            'assigned_toll_type' => 'Assigned Toll Type',
            'assigned_location' => 'Assigned Location',
            'remember_token' => 'Remember Token',
            'deleted_at' => 'Deleted At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}

