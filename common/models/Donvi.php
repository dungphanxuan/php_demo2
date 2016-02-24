<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "donvi".
 *
 * @property integer $IDDonVi
 * @property string $TenDonVi
 * @property string $DiaChi
 * @property string $SoDT
 * @property string $TruongDonVi
 */
class Donvi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donvi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenDonVi'], 'required'],
            [['TenDonVi', 'DiaChi', 'TruongDonVi'], 'string', 'max' => 255],
            [['SoDT'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDDonVi' => 'Iddon Vi',
            'TenDonVi' => 'Ten Don Vi',
            'DiaChi' => 'Dia Chi',
            'SoDT' => 'So Dt',
            'TruongDonVi' => 'Truong Don Vi',
        ];
    }
}
