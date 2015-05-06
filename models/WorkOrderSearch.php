<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WorkOrder;

/**
 * WorkOrderSearch represents the model behind the search form about `app\models\WorkOrder`.
 */
class WorkOrderSearch extends WorkOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wo'], 'integer'],
            [
				[
					'date', 'company', 'work_type', 'priority',
					'client_name', 'assigned__taken_by', 'spec_information', 'date_required',
					'sale_date', 'photo_details', 'photo_location', 'photo_upload',
					'ad_specification', 'add_color', 'other_ad_information', 'proof_to_client_by',
					'send_proof_via', 'via_other', 'files_to_printer_by', 'catalogue_sale_name',
					'sale_time', 'location', 'sale_phone_1', 'sale_phone_2',
					'sale_phone_3', 'auctioneer', 'auctioneer_phone', 'auctioneer_cell',
					'ringman_1', 'ringman_1_phone', 'ringman_1_cell', 'ringman_2',
					'ringman_2_phone', 'ringman_2_cell', 'ringman_3', 'ringman_3_phone',
					'ringman_3_cell', 'ringman_4', 'ringman_4_phone', 'ringman_4_cell',
					'other_sales_staff', 'other_title_page_info', 'forward', 'other',
					'status', 'article_name', 'article_location', 'user_level'
				],
				'safe'
			],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = WorkOrder::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['wo' => $this->wo]);

        $query->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'work_type', $this->work_type])
            ->andFilterWhere(['like', 'priority', $this->priority])
            ->andFilterWhere(['like', 'client_name', $this->client_name])
            ->andFilterWhere(['like', 'assigned__taken_by', $this->assigned__taken_by])
            ->andFilterWhere(['like', 'spec_information', $this->spec_information])
            ->andFilterWhere(['like', 'date_required', $this->date_required])
            ->andFilterWhere(['like', 'sale_date', $this->sale_date])
            ->andFilterWhere(['like', 'photo_details', $this->photo_details])
            ->andFilterWhere(['like', 'photo_location', $this->photo_location])
            ->andFilterWhere(['like', 'photo_upload', $this->photo_upload])
            ->andFilterWhere(['like', 'ad_specification', $this->ad_specification])
            ->andFilterWhere(['like', 'add_color', $this->add_color])
            ->andFilterWhere(['like', 'other_ad_information', $this->other_ad_information])
            ->andFilterWhere(['like', 'proof_to_client_by', $this->proof_to_client_by])
            ->andFilterWhere(['like', 'send_proof_via', $this->send_proof_via])
            ->andFilterWhere(['like', 'via_other', $this->via_other])
            ->andFilterWhere(['like', 'files_to_printer_by', $this->files_to_printer_by])
            ->andFilterWhere(['like', 'catalogue_sale_name', $this->catalogue_sale_name])
            ->andFilterWhere(['like', 'sale_time', $this->sale_time])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'sale_phone_1', $this->sale_phone_1])
            ->andFilterWhere(['like', 'sale_phone_2', $this->sale_phone_2])
            ->andFilterWhere(['like', 'sale_phone_3', $this->sale_phone_3])
            ->andFilterWhere(['like', 'auctioneer', $this->auctioneer])
            ->andFilterWhere(['like', 'auctioneer_phone', $this->auctioneer_phone])
            ->andFilterWhere(['like', 'auctioneer_cell', $this->auctioneer_cell])
            ->andFilterWhere(['like', 'ringman_1', $this->ringman_1])
            ->andFilterWhere(['like', 'ringman_1_phone', $this->ringman_1_phone])
            ->andFilterWhere(['like', 'ringman_1_cell', $this->ringman_1_cell])
            ->andFilterWhere(['like', 'ringman_2', $this->ringman_2])
            ->andFilterWhere(['like', 'ringman_2_phone', $this->ringman_2_phone])
            ->andFilterWhere(['like', 'ringman_2_cell', $this->ringman_2_cell])
            ->andFilterWhere(['like', 'ringman_3', $this->ringman_3])
            ->andFilterWhere(['like', 'ringman_3_phone', $this->ringman_3_phone])
            ->andFilterWhere(['like', 'ringman_3_cell', $this->ringman_3_cell])
            ->andFilterWhere(['like', 'ringman_4', $this->ringman_4])
            ->andFilterWhere(['like', 'ringman_4_phone', $this->ringman_4_phone])
            ->andFilterWhere(['like', 'ringman_4_cell', $this->ringman_4_cell])
            ->andFilterWhere(['like', 'other_sales_staff', $this->other_sales_staff])
            ->andFilterWhere(['like', 'other_title_page_info', $this->other_title_page_info])
            ->andFilterWhere(['like', 'forward', $this->forward])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'article_name', $this->article_name])
            ->andFilterWhere(['like', 'article_location', $this->article_location])
            ->andFilterWhere(['like', 'user_level', $this->user_level]);

        return $dataProvider;
    }
}
