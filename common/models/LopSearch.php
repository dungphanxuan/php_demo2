<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Lop;

/**
 * LopSearch represents the model behind the search form about `common\models\Lop`.
 */
class LopSearch extends Lop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDLop', 'SoSinhVien', 'KhoaID', 'HeDaoTaoID', 'BacDaoTaoID', 'DiaDiemHocID', 'KhoaDaoTaoID'], 'integer'],
            [['TenLop'], 'safe'],
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
        $query = Lop::find();

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
            'IDLop' => $this->IDLop,
            'SoSinhVien' => $this->SoSinhVien,
            'KhoaID' => $this->KhoaID,
            'HeDaoTaoID' => $this->HeDaoTaoID,
            'BacDaoTaoID' => $this->BacDaoTaoID,
            'DiaDiemHocID' => $this->DiaDiemHocID,
            'KhoaDaoTaoID' => $this->KhoaDaoTaoID,
        ]);

        $query->andFilterWhere(['like', 'TenLop', $this->TenLop]);

        return $dataProvider;
    }
}
