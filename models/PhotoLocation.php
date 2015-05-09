<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo_locations".
 *
 * @property integer $id
 * @property string $photo_locations
 */
class PhotoLocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo_locations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo_locations'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo_locations' => 'Photo Locations',
        ];
    }
}
