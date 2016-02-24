<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bacdaotao".
 *
 * @property integer $IDBacDaoTao
 * @property string $TenBacDaoTao
 */
class Bacdaotao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bacdaotao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenBacDaoTao'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDBacDaoTao' => 'Idbac Dao Tao',
            'TenBacDaoTao' => 'Ten Bac Dao Tao',
        ];
    }
}
