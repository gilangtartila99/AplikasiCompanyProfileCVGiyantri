<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gambar".
 *
 * @property integer $id_gambar
 * @property string $nama_gambar
 * @property string $gambar
 */
class Gambar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gambar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_gambar'], 'required'],
            [['nama_gambar', 'gambar'], 'string', 'max' => 255],
            [['gambar'], 'file','maxSize' => 3000 * 3000 * 5, 'skipOnEmpty' => true, 'extensions' => ['gif', 'jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG', 'GIF'],'maxSize' => 2000000, 'tooBig' => 'Batas Ukuran File 2MB'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gambar' => 'ID Gambar',
            'nama_gambar' => 'Nama Gambar',
            'gambar' => 'Gambar',
        ];
    }
}
