<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Giangvien;

/**
 * GiangvienSearch represents the model behind the search form about `common\models\Giangvien`.
 */
class GiangvienSearch extends Giangvien
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDGiangVien', 'GioiTinh', 'NamSinh', 'DonViID', 'KhoaID'], 'integer'],
            [['TenGiangVien', 'Email', 'SoDT', 'DiaChi', 'HocVi', 'ChucVu'], 'safe'],
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
        $query = Giangvien::find();

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
            'IDGiangVien' => $this->IDGiangVien,
            'GioiTinh' => $this->GioiTinh,
            'NamSinh' => $this->NamSinh,
            'DonViID' => $this->DonViID,
            'KhoaID' => $this->KhoaID,
        ]);

        $query->andFilterWhere(['like', 'TenGiangVien', $this->TenGiangVien])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'SoDT', $this->SoDT])
            ->andFilterWhere(['like', 'DiaChi', $this->DiaChi])
            ->andFilterWhere(['like', 'HocVi', $this->HocVi])
            ->andFilterWhere(['like', 'ChucVu', $this->ChucVu]);

        return $dataProvider;
    }
}
