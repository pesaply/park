<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%assemblies}}".
 *
 * @property int $id
 * @property string $assembly_code
 * @property string $region_code
 * @property string $name
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 */
class Assemblies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%assemblies}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['assembly_code', 'region_code', 'name'], 'required'],
            [['deleted_at', 'created_at', 'updated_at'], 'safe'],
            [['assembly_code', 'region_code', 'name'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'assembly_code' => 'Assembly Code',
            'region_code' => 'Region Code',
            'name' => 'Name',
            'deleted_at' => 'Deleted At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
