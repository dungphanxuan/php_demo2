<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dangky".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $detai_id
 * @property integer $teacher_id
 * @property integer $created_at
 * @property integer $status
 * @property string $description
 */
class Dangky extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dangky';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'detai_id'], 'required'],
            [['student_id', 'detai_id', 'teacher_id', 'giaovien_hd', 'status'], 'integer'],
            [['description'], 'string', 'max' => 255],
            [['created_at'], 'default', 'value' => null],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Sinh viên',
            'detai_id' => 'Đề tài',
            'teacher_id' => 'Giáo viên',
            'created_at' => 'Ngày đăng ký',
            'status' => 'Tình trạng',
            'description' => 'Mô tả',
            'giaovien_hd' => 'Giáo viên hướng dẫn',
        ];
    }
}
