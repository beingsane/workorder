<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AdSpecification;

/**
 * AdSpecificationSearch represents the model behind the search form about `app\models\AdSpecification`.
 */
class AdSpecificationSearch extends AdSpecification
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_level'], 'integer'],
            [['ad_specifications'], 'safe'],
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
        $query = AdSpecification::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_level' => $this->user_level,
        ]);

        $query->andFilterWhere(['like', 'ad_specifications', $this->ad_specifications]);

        return $dataProvider;
    }
}
