<?php

namespace app\helpers;

class DropDownItems
{
    public static function getItems($className, $attribute, $orderBy = 'id')
	{
		$query = new \yii\db\Query();
		$items = $query
			->select($attribute)
			->from($className::tableName())
			->orderBy($orderBy)
			->all();
		
		$result = [];
		$result[''] = '- select -';
		foreach($items as $item)
		{
			$result[$item[$attribute]] = $item[$attribute];
		}
		
		return $result;
	}
	
	public static function getUsers()
	{
		$className = 'dektrium\user\models\User';
		$users = $className::find()
			->join('LEFT JOIN', 'profile', 'profile.user_id = user.id')
			->orderBy([new \yii\db\Expression('IF(profile.name IS NOT NULL AND profile.name != "", profile.name, user.username)')])
			->all();
		
		$result = [];
		$result[''] = '- select -';
		foreach($users as $user)
		{
			$value = ($user->profile->name ? $user->profile->name : $user->username);
			$result[$value] = $value;
		}
		
		return $result;
	}
}
