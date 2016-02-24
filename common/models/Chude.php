<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chude".
 *
 * @property integer $IDChuDe
 * @property string $TenChuDe
 * @property string $GhiChu
 *
 * @property Detai[] $detais
 */
class Chude extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chude';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenChuDe'], 'required'],
            [['TenChuDe', 'GhiChu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDChuDe' => 'ID',
            'TenChuDe' => 'Tên Chủ đề',
            'GhiChu' => 'Ghi Chú',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetais()
    {
        return $this->hasMany(Detai::className(), ['ChuDeID' => 'IDChuDe']);
    }
}
