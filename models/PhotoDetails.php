<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo_details".
 *
 * @property integer $id
 * @property string $photo_details
 * @property integer $user_level
 */
class PhotoDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo_details';
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
            [['photo_details'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo_details' => 'Photo Details',
            'user_level' => 'User Level',
        ];
    }
}
