<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ad_specifications".
 *
 * @property integer $id
 * @property string $ad_specifications
 * @property integer $user_level
 */
class AdSpecification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ad_specifications';
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
            [['ad_specifications'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad_specifications' => 'Ad Specifications',
            'user_level' => 'User Level',
        ];
    }
}
