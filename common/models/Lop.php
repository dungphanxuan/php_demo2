<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lop".
 *
 * @property integer $IDLop
 * @property string $TenLop
 * @property integer $SoSinhVien
 * @property integer $KhoaID
 * @property integer $HeDaoTaoID
 * @property integer $BacDaoTaoID
 * @property integer $DiaDiemHocID
 * @property integer $KhoaDaoTaoID
 *
 * @property Sinhvien[] $sinhviens
 */
class Lop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenLop'], 'required'],
            [['SoSinhVien', 'KhoaID', 'HeDaoTaoID', 'BacDaoTaoID', 'DiaDiemHocID', 'KhoaDaoTaoID'], 'integer'],
            [['TenLop'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDLop' => 'ID',
            'TenLop' => 'Tên lớp',
            'SoSinhVien' => 'Số sinh viên',
            'KhoaID' => 'Khoa ID',
            'HeDaoTaoID' => 'He Dao Tao ID',
            'BacDaoTaoID' => 'Bac Dao Tao ID',
            'DiaDiemHocID' => 'Dia Diem Hoc ID',
            'KhoaDaoTaoID' => 'Khoa Dao Tao ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSinhviens()
    {
        return $this->hasMany(Sinhvien::className(), ['LopID' => 'IDLop']);
    }
}
