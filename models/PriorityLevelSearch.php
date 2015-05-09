<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PriorityLevel;

/**
 * PriorityLevelSearch represents the model behind the search form about `app\models\PriorityLevel`.
 */
class PriorityLevelSearch extends PriorityLevel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_level'], 'integer'],
            [['priority_level'], 'safe'],
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
        $query = PriorityLevel::find();

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

        $query->andFilterWhere(['like', 'priority_level', $this->priority_level]);

        return $dataProvider;
    }
}
