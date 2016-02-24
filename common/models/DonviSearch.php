<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Donvi;

/**
 * DonviSearch represents the model behind the search form about `common\models\Donvi`.
 */
class DonviSearch extends Donvi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDDonVi'], 'integer'],
            [['TenDonVi', 'DiaChi', 'SoDT', 'TruongDonVi'], 'safe'],
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
        $query = Donvi::find();

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
            'IDDonVi' => $this->IDDonVi,
        ]);

        $query->andFilterWhere(['like', 'TenDonVi', $this->TenDonVi])
            ->andFilterWhere(['like', 'DiaChi', $this->DiaChi])
            ->andFilterWhere(['like', 'SoDT', $this->SoDT])
            ->andFilterWhere(['like', 'TruongDonVi', $this->TruongDonVi]);

        return $dataProvider;
    }
}
