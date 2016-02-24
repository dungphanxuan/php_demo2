<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "khoa".
 *
 * @property integer $IDKhoa
 * @property string $TenKhoa
 * @property string $TruongKhoa
 */
class Khoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenKhoa', 'TruongKhoa'], 'required'],
            [['TenKhoa', 'TruongKhoa'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDKhoa' => 'ID',
            'TenKhoa' => 'Tên khoa',
            'TruongKhoa' => 'Trưởng khoa',
        ];
    }
}
