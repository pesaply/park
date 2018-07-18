<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%locations}}".
 *
 * @property int $id
 * @property string $location_code
 * @property string $assembly_code
 * @property string $name
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 */
class Locations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%locations}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location_code', 'assembly_code', 'name'], 'required'],
            [['deleted_at', 'created_at', 'updated_at'], 'safe'],
            [['location_code', 'assembly_code', 'name'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_code' => 'Location Code',
            'assembly_code' => 'Assembly Code',
            'name' => 'Name',
            'deleted_at' => 'Deleted At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
