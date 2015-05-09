<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "priority_level".
 *
 * @property integer $id
 * @property string $priority_level
 * @property integer $user_level
 */
class PriorityLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'priority_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_level'], 'integer'],
            [['priority_level'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'priority_level' => 'Priority Level',
            'user_level' => 'User Level',
        ];
    }
}
