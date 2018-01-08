<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hubungi".
 *
 * @property integer $id_hubungi
 * @property string $nama
 * @property string $email
 * @property string $judul
 * @property string $pesan
 */
class Hubungi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hubungi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'judul', 'pesan'], 'required'],
            [['nama'], 'string', 'max' => 50],
            [['email', 'judul'], 'string', 'max' => 100],
            [['pesan'], 'string', 'max' => 1500],
            [['email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hubungi' => 'ID Hubungi',
            'nama' => 'Nama',
            'email' => 'Email',
            'judul' => 'Judul',
            'pesan' => 'Pesan',
        ];
    }
}
