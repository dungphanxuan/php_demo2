<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sinhvien".
 *
 * @property integer $IDSinhVien
 * @property string $TenSinhVien
 * @property integer $GioiTinh
 * @property integer $NamSinh
 * @property string $QueQuan
 * @property string $HoKhauThuongTru
 * @property string $Email
 * @property string $SoDT
 * @property integer $LopID
 * @property integer $DeTaiID
 *
 * @property Lop $lop
 * @property User $iDSinhVien
 */
class Sinhvien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sinhvien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenSinhVien'], 'required'],
            [['GioiTinh', 'NamSinh', 'LopID', 'DeTaiID'], 'integer'],
            [['TenSinhVien', 'QueQuan', 'HoKhauThuongTru', 'Email'], 'string', 'max' => 255],
            [['SoDT'], 'string', 'max' => 16],
            [['LopID'], 'exist', 'skipOnError' => true, 'targetClass' => Lop::className(), 'targetAttribute' => ['LopID' => 'IDLop']],
            [['IDSinhVien'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['IDSinhVien' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDSinhVien' => 'ID',
            'TenSinhVien' => 'Tên',
            'GioiTinh' => 'Giới tính',
            'NamSinh' => 'Năm sinh',
            'QueQuan' => 'Quê quá',
            'HoKhauThuongTru' => 'Hộ khẩu',
            'Email' => 'Email',
            'SoDT' => 'So Dt',
            'LopID' => 'Lớp học',
            'DeTaiID' => 'Đề tài',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLop()
    {
        return $this->hasOne(Lop::className(), ['IDLop' => 'LopID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDSinhVien()
    {
        return $this->hasOne(User::className(), ['id' => 'IDSinhVien']);
    }
}
