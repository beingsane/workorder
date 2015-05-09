<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $id
 * @property string $account_number
 * @property string $name
 * @property string $contact
 * @property string $address
 * @property string $city
 * @property string $prov_state
 * @property string $postal_zip
 * @property string $telephone
 * @property string $fax
 * @property string $email
 * @property string $website
 * @property string $billing_instructions
 * @property string $shipping_instructions
 * @property string $contract_expires
 * @property integer $user_level
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
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
            [['account_number', 'name', 'contact', 'address', 'city', 'prov_state', 'postal_zip', 'telephone', 'fax', 'email', 'website', 'billing_instructions', 'shipping_instructions', 'contract_expires'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_number' => 'Account Number',
            'name' => 'Name',
            'contact' => 'Contact',
            'address' => 'Address',
            'city' => 'City',
            'prov_state' => 'Prov State',
            'postal_zip' => 'Postal Zip',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'email' => 'Email',
            'website' => 'Website',
            'billing_instructions' => 'Billing Instructions',
            'shipping_instructions' => 'Shipping Instructions',
            'contract_expires' => 'Contract Expires',
            'user_level' => 'User Level',
        ];
    }
}
