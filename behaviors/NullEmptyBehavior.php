<?php

namespace app\behaviors;

use yii\base\Behavior;
use yii\db\BaseActiveRecord;

class NullEmptyBehavior extends Behavior
{
    public function events()
    {
        return [
            BaseActiveRecord::EVENT_BEFORE_INSERT => 'beforeSave',
            BaseActiveRecord::EVENT_BEFORE_UPDATE => 'beforeSave',
        ];
    }
	
    public function beforeSave()
    {
        $model = $this->owner;
		$insert = $model->getIsNewRecord();
		foreach ($model->attributes as $key => $value)
		{
			if (!$value)
				$model->setAttribute($key, null);
		}
    }
}