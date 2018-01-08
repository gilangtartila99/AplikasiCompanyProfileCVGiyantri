<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property integer $id_berita
 * @property string $judul_berita
 * @property string $tanggal
 * @property integer $user_id
 * @property string $isi_berita
 * @property string $gambar
 *
 * @property User $user
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_berita', 'tanggal', 'user_id', 'isi_berita'], 'required'],
            [['tanggal'], 'safe'],
            [['user_id'], 'integer'],
            [['judul_berita', 'gambar'], 'string', 'max' => 255],
            [['isi_berita'], 'string', 'max' => 2500],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['gambar'], 'file','maxSize' => 3000 * 3000 * 5, 'skipOnEmpty' => true, 'extensions' => ['gif', 'jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG', 'GIF'],'maxSize' => 2000000, 'tooBig' => 'Batas Ukuran File 2MB'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'ID Berita',
            'judul_berita' => 'Judul Berita',
            'tanggal' => 'Tanggal',
            'user_id' => 'Nama Pengirim',
            'isi_berita' => 'Isi Berita',
            'gambar' => 'Gambar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
