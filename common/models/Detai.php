<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detai".
 *
 * @property integer $IDDeTai
 * @property string $TenDeTai
 * @property string $MoTa
 * @property integer $ChuDeID
 * @property integer $SoSVThamGia
 * @property string $BanMemDoAn
 * @property string $SourceCode
 * @property integer $Nam
 * @property string $NhanXetChung
 * @property integer $HoiDongID
 * @property integer $GiaoVien
 * @property string $ThamKhao
 * @property string $MoiTruong
 *
 * @property Chude $chuDe
 */
class Detai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ChuDeID', 'TenDeTai', 'SoSVThamGia'], 'required'],
            [['IDDeTai', 'ChuDeID', 'SoSVThamGia', 'Nam', 'HoiDongID', 'GiaoVien'], 'integer'],
            [['MoTa'], 'string'],
            [['TenDeTai', 'BanMemDoAn', 'SourceCode', 'NhanXetChung', 'ThamKhao', 'MoiTruong'], 'string', 'max' => 255],
            [['ChuDeID'], 'exist', 'skipOnError' => true, 'targetClass' => Chude::className(), 'targetAttribute' => ['ChuDeID' => 'IDChuDe']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDDeTai' => 'ID',
            'TenDeTai' => 'Tiêu đề',
            'MoTa' => 'Mô tả',
            'ChuDeID' => 'Chủ đề',
            'SoSVThamGia' => 'Số sinh viên tham gia',
            'BanMemDoAn' => 'Bản mềm',
            'SourceCode' => 'Source Code',
            'Nam' => 'Năm',
            'NhanXetChung' => 'Nhận xét',
            'HoiDongID' => 'Hội đồng',
            'GiaoVien' => 'Giáo viên',
            'ThamKhao' => 'Tham Khảo',
            'MoiTruong' => 'Môi trường',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChuDe()
    {
        return $this->hasOne(Chude::className(), ['IDChuDe' => 'ChuDeID']);
    }
}
