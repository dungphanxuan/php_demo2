<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Bacdaotao;

/**
 * BacdaotaoSearch represents the model behind the search form about `common\models\Bacdaotao`.
 */
class BacdaotaoSearch extends Bacdaotao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDBacDaoTao'], 'integer'],
            [['TenBacDaoTao'], 'safe'],
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
        $query = Bacdaotao::find();

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
            'IDBacDaoTao' => $this->IDBacDaoTao,
        ]);

        $query->andFilterWhere(['like', 'TenBacDaoTao', $this->TenBacDaoTao]);

        return $dataProvider;
    }
}
