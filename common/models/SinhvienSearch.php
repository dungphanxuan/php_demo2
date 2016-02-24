<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Sinhvien;

/**
 * SinhvienSearch represents the model behind the search form about `common\models\Sinhvien`.
 */
class SinhvienSearch extends Sinhvien
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDSinhVien', 'GioiTinh', 'NamSinh', 'LopID', 'DeTaiID'], 'integer'],
            [['TenSinhVien', 'QueQuan', 'HoKhauThuongTru', 'Email', 'SoDT'], 'safe'],
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
        $query = Sinhvien::find();

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
            'IDSinhVien' => $this->IDSinhVien,
            'GioiTinh' => $this->GioiTinh,
            'NamSinh' => $this->NamSinh,
            'LopID' => $this->LopID,
            'DeTaiID' => $this->DeTaiID,
        ]);

        $query->andFilterWhere(['like', 'TenSinhVien', $this->TenSinhVien])
            ->andFilterWhere(['like', 'QueQuan', $this->QueQuan])
            ->andFilterWhere(['like', 'HoKhauThuongTru', $this->HoKhauThuongTru])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'SoDT', $this->SoDT]);

        return $dataProvider;
    }
}
