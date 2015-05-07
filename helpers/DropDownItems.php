<?php

namespace app\helpers;

class DropDownItems
{
    public static function getItems($className, $attribute)
	{
		$items = $className::find()->all();
		
		$result = [];
		foreach($items as $item)
		{
			$result[$item->$attribute] = $item->$attribute;
		}
		
		return $result;
	}
}
