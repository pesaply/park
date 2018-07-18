<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Collectors;

/**
 * CollectorsSearch represents the model behind the search form of `app\models\Collectors`.
 */
class CollectorsSearch extends Collectors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['collector_code', 'name', 'email', 'phone_number', 'api_token', 'password', 'assigned_toll_type', 'assigned_location', 'remember_token', 'deleted_at', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Collectors::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'deleted_at' => $this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'collector_code', $this->collector_code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'api_token', $this->api_token])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'assigned_toll_type', $this->assigned_toll_type])
            ->andFilterWhere(['like', 'assigned_location', $this->assigned_location])
            ->andFilterWhere(['like', 'remember_token', $this->remember_token]);

        return $dataProvider;
    }
}
