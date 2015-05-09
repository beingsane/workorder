<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * This is the model class for table "work_orders".
 *
 * @property integer $id
 * @property string $date
 * @property string $company
 * @property string $work_type
 * @property string $priority
 * @property string $client_name
 * @property string $assigned__taken_by
 * @property string $spec_information
 * @property string $date_required
 * @property string $sale_date
 * @property string $photo_details
 * @property string $photo_location
 * @property string $photo_upload
 * @property string $ad_specification
 * @property string $add_color
 * @property string $other_ad_information
 * @property string $proof_to_client_by
 * @property string $send_proof_via
 * @property string $via_other
 * @property string $files_to_printer_by
 * @property string $catalogue_sale_name
 * @property string $sale_time
 * @property string $location
 * @property string $sale_phone_1
 * @property string $sale_phone_2
 * @property string $sale_phone_3
 * @property string $auctioneer
 * @property string $auctioneer_phone
 * @property string $auctioneer_cell
 * @property string $ringman_1
 * @property string $ringman_1_phone
 * @property string $ringman_1_cell
 * @property string $ringman_2
 * @property string $ringman_2_phone
 * @property string $ringman_2_cell
 * @property string $ringman_3
 * @property string $ringman_3_phone
 * @property string $ringman_3_cell
 * @property string $ringman_4
 * @property string $ringman_4_phone
 * @property string $ringman_4_cell
 * @property string $other_sales_staff
 * @property string $other_title_page_info
 * @property string $forward
 * @property string $other
 * @property string $status
 * @property string $article_name
 * @property string $article_location
 * @property string $storage
 */
class WorkOrder extends \yii\db\ActiveRecord
{
	public static $uploadDirectory = 'pics';
	public $photo_file;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work_orders';
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
            [['other_ad_information', 'other'], 'string'],
            [['date', 'company', 'work_type', 'priority', 'client_name', 'assigned__taken_by', 'spec_information', 'date_required', 'sale_date', 'photo_details', 'photo_location', 'photo_upload', 'ad_specification', 'add_color', 'proof_to_client_by', 'send_proof_via', 'via_other', 'files_to_printer_by', 'catalogue_sale_name', 'sale_time', 'location', 'sale_phone_1', 'sale_phone_2', 'sale_phone_3', 'auctioneer', 'auctioneer_phone', 'auctioneer_cell', 'ringman_1', 'ringman_1_phone', 'ringman_1_cell', 'ringman_2', 'ringman_2_phone', 'ringman_2_cell', 'ringman_3', 'ringman_3_phone', 'ringman_3_cell', 'ringman_4', 'ringman_4_phone', 'ringman_4_cell', 'other_sales_staff', 'other_title_page_info', 'forward', 'status', 'article_name', 'article_location', 'storage'], 'string', 'max' => 50]
        ];
    }
	
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'company' => 'Company',
            'work_type' => 'Work Type',
            'priority' => 'Priority',
            'client_name' => 'Client Name',
            'assigned__taken_by' => 'Assigned / Taken By',
            'spec_information' => 'Spec Information',
            'date_required' => 'Deadline',
            'sale_date' => 'Sale Date',
            'photo_details' => 'Photo Details',
            'photo_location' => 'Photo Location',
            'photo_upload' => 'Photo Upload',
            'ad_specification' => 'Ad Specification',
            'add_color' => 'Add Color',
            'other_ad_information' => 'Other Ad Information',
            'proof_to_client_by' => 'Proof To Client By',
            'send_proof_via' => 'Send Proof Via',
            'via_other' => 'Via Other',
            'files_to_printer_by' => 'Files To Printer By',
            'catalogue_sale_name' => 'Catalogue Sale Name',
            'sale_time' => 'Sale Time',
            'location' => 'Location',
            'sale_phone_1' => 'Sale Phone 1',
            'sale_phone_2' => 'Sale Phone 2',
            'sale_phone_3' => 'Sale Phone 3',
            'auctioneer' => 'Auctioneer',
            'auctioneer_phone' => 'Auctioneer Phone',
            'auctioneer_cell' => 'Auctioneer Cell',
            'ringman_1' => 'Ringman 1',
            'ringman_1_phone' => 'Ringman 1 Phone',
            'ringman_1_cell' => 'Ringman 1 Cell',
            'ringman_2' => 'Ringman 2',
            'ringman_2_phone' => 'Ringman 2 Phone',
            'ringman_2_cell' => 'Ringman 2 Cell',
            'ringman_3' => 'Ringman 3',
            'ringman_3_phone' => 'Ringman 3 Phone',
            'ringman_3_cell' => 'Ringman 3 Cell',
            'ringman_4' => 'Ringman 4',
            'ringman_4_phone' => 'Ringman 4 Phone',
            'ringman_4_cell' => 'Ringman 4 Cell',
            'other_sales_staff' => 'Other Sales Staff',
            'other_title_page_info' => 'Other Title Page Info',
            'forward' => 'Forward',
            'other' => 'Other',
            'status' => 'Status',
            'article_name' => 'Article Name',
            'article_location' => 'Article Location',
            'storage' => 'Storage',
        ];
    }
	
	public function beforeSave($insert)
    {
        $file = UploadedFile::getInstance($this, 'photo_file');
        if ($file)
        {
            $photo_upload = $file->name;
			$filePath = $this->getFilePath($photo_upload);
			
            if (!$insert && $this->photo_upload)
			{
				$prevFilePath = $this->getFilePath($this->photo_upload);
                if (file_exists($prevFilePath)) unlink($prevFilePath);
            }
            
			$i = 2;
			while (file_exists($filePath))
			{
				$basename = basename($photo_upload, '.'.$file->extension);
				$photo_upload = $basename.'('.$i.')' .'.'.$file->extension;
				$filePath = $this->getFilePath($photo_upload);
				$i++;
			}
            
            $this->photo_upload = $photo_upload;
            
            // save file
            if (!is_dir(dirname($filePath))) {
                mkdir(dirname($filePath), 0755, true);
            }
            $saved = $file->saveAs($filePath);
            if (!$saved) {
                $this->addError('photo_file', 'File upload error');
                return false;
            }
        }
        
        return parent::beforeSave($insert);
    }
	
	public function getFilePath($photo_upload)
	{
		return Yii::getAlias('@webroot') .'/' .self::$uploadDirectory .'/' .$photo_upload;
	}
	
	public function getFileUrl($photo_upload)
	{
		return Url::home() .self::$uploadDirectory .'/' .$photo_upload;
	}
}
