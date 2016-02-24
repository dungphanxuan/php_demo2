<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Detai;

/**
 * DetaiSearch represents the model behind the search form about `common\models\Detai`.
 */
class DetaiSearch extends Detai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDDeTai', 'ChuDeID', 'SoSVThamGia', 'Nam', 'HoiDongID', 'GiaoVien'], 'integer'],
            [['TenDeTai', 'BanMemDoAn', 'SourceCode', 'NhanXetChung', 'ThamKhao', 'MoiTruong'], 'safe'],
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
        $query = Detai::find();

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
            'IDDeTai' => $this->IDDeTai,
            'ChuDeID' => $this->ChuDeID,
            'SoSVThamGia' => $this->SoSVThamGia,
            'Nam' => $this->Nam,
            'HoiDongID' => $this->HoiDongID,
            'GiaoVien' => $this->GiaoVien,
        ]);

        $query->andFilterWhere(['like', 'TenDeTai', $this->TenDeTai])
            ->andFilterWhere(['like', 'BanMemDoAn', $this->BanMemDoAn])
            ->andFilterWhere(['like', 'SourceCode', $this->SourceCode])
            ->andFilterWhere(['like', 'NhanXetChung', $this->NhanXetChung])
            ->andFilterWhere(['like', 'ThamKhao', $this->ThamKhao])
            ->andFilterWhere(['like', 'MoiTruong', $this->MoiTruong]);

        return $dataProvider;
    }
}
