<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $email
 * @property string $no_telp
 *
 * @property Berita[] $beritas
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'authKey', 'accessToken', 'nama', 'jenis_kelamin', 'email', 'no_telp'], 'required'],
            [['username', 'password'], 'string', 'max' => 50],
            [['authKey', 'accessToken', 'nama'], 'string', 'max' => 255],
            [['jenis_kelamin'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 100],
            [['no_telp'], 'string', 'max' => 25],
            [['username'], 'unique'],
            [['email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'email' => 'Email',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBeritas()
    {
        return $this->hasMany(Berita::className(), ['user_id' => 'id']);
    }
}
