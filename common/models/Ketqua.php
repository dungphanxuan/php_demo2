<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "ketqua".
 *
 * @property integer $id
 * @property integer $dangky_id
 * @property integer $giaovien_id
 * @property double $diem
 * @property integer $time
 * @property integer $giaovien_cham
 */
class Ketqua extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ketqua';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dangky_id', 'giaovien_id', 'time', 'giaovien_cham'], 'integer'],
            [['diem'], 'number'],
            [['file'], 'string'],
            [['imageFile'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dangky_id' => 'Niên luận',
            'giaovien_id' => 'Giáo viên nhận',
            'diem' => 'Điểm',
            'file' => 'File',
            'imageFile' => 'File báo cáo',
            'time' => 'Ngày nộp',
            'giaovien_cham' => 'Giáo viên chấm',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
