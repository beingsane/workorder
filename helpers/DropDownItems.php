<?php

namespace app\helpers;

class DropDownItems
{
    public static function getItems($className, $attribute, $orderBy = 'id')
	{
		$items = $className::find()->orderBy($orderBy)->all();
		
		$result = [];
		$result[''] = '- select -';
		foreach($items as $item)
		{
			$result[$item->$attribute] = $item->$attribute;
		}
		
		return $result;
	}
}
