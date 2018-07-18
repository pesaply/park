<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payments;

/**
 * PaymentsSearch represents the model behind the search form of `app\models\Payments`.
 */
class PaymentsSearch extends Payments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['amount'], 'number'],
            [['collector_code', 'location_code', 'payment_mode', 'mobile_money_number', 'toll_type_code', 'goods_type_code', 'deleted_at', 'created_at', 'updated_at'], 'safe'],
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
        $query = Payments::find();

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
            'amount' => $this->amount,
            'deleted_at' => $this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'collector_code', $this->collector_code])
            ->andFilterWhere(['like', 'location_code', $this->location_code])
            ->andFilterWhere(['like', 'payment_mode', $this->payment_mode])
            ->andFilterWhere(['like', 'mobile_money_number', $this->mobile_money_number])
            ->andFilterWhere(['like', 'toll_type_code', $this->toll_type_code])
            ->andFilterWhere(['like', 'goods_type_code', $this->goods_type_code]);

        return $dataProvider;
    }
}
