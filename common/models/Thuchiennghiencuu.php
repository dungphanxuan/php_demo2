<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "thuchiennghiencuu".
 *
 * @property integer $IDThucHienNghienCuu
 * @property integer $HuongNghienCuuID
 * @property integer $SoLuongCongTrinhCongBo
 */
class Thuchiennghiencuu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thuchiennghiencuu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HuongNghienCuuID'], 'required'],
            [['HuongNghienCuuID', 'SoLuongCongTrinhCongBo'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDThucHienNghienCuu' => 'Idthuc Hien Nghien Cuu',
            'HuongNghienCuuID' => 'Huong Nghien Cuu ID',
            'SoLuongCongTrinhCongBo' => 'So Luong Cong Trinh Cong Bo',
        ];
    }
}
