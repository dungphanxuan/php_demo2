<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "giangvien".
 *
 * @property integer $IDGiangVien
 * @property string $TenGiangVien
 * @property integer $GioiTinh
 * @property integer $NamSinh
 * @property string $Email
 * @property string $SoDT
 * @property string $DiaChi
 * @property integer $DonViID
 * @property integer $KhoaID
 * @property string $HocVi
 * @property string $ChucVu
 *
 * @property User $iDGiangVien
 * @property Huongdan[] $huongdans
 * @property Phanbien[] $phanbiens
 */
class Giangvien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'giangvien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenGiangVien'], 'required'],
            [['GioiTinh', 'NamSinh', 'DonViID', 'KhoaID'], 'integer'],
            [['TenGiangVien', 'Email'], 'string', 'max' => 255],
            [['SoDT'], 'string', 'max' => 16],
            [['DiaChi', 'HocVi', 'ChucVu'], 'string', 'max' => 128],
            [['IDGiangVien'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['IDGiangVien' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDGiangVien' => 'ID',
            'TenGiangVien' => 'Tên',
            'GioiTinh' => 'Gioi Tinh',
            'NamSinh' => 'Năm Sinh',
            'Email' => 'Email',
            'SoDT' => 'Số DT',
            'DiaChi' => 'Địa chỉ',
            'DonViID' => 'Đơn vị',
            'KhoaID' => 'Khoa ID',
            'HocVi' => 'Học vị',
            'ChucVu' => 'Chức vụ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDGiangVien()
    {
        return $this->hasOne(User::className(), ['id' => 'IDGiangVien']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHuongdans()
    {
        return $this->hasMany(Huongdan::className(), ['GiangVienID' => 'IDGiangVien']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhanbiens()
    {
        return $this->hasMany(Phanbien::className(), ['GiangVienID' => 'IDGiangVien']);
    }
}
