<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spec_information".
 *
 * @property integer $id
 * @property string $spec_information
 * @property integer $user_level
 */
class SpecInformation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spec_information';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_level'], 'integer'],
            [['spec_information'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'spec_information' => 'Spec Information',
            'user_level' => 'User Level',
        ];
    }
}
