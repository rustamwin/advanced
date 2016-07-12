<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $img
 * @property string $text
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'img', 'text'], 'required'],
            [['text'], 'string'],
            [['name', 'address', 'img'], 'string', 'max' => 255],
            [['address'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'img' => 'Img',
            'text' => 'Text',
        ];
    }
}
