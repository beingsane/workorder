<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work_order_type".
 *
 * @property integer $id
 * @property string $work_order_type
 * @property integer $user_level
 */
class WorkOrderType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work_order_type';
    }

	/**
     * @inheritdoc
     */
	public function behaviors()
	{
		return [
			['class' => \app\behaviors\NullEmptyBehavior::className()],
		];
	}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_level'], 'integer'],
            [['work_order_type'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'work_order_type' => 'Work Order Type',
            'user_level' => 'User Level',
        ];
    }
}
