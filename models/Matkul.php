<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matkul".
 *
 * @property int $id
 * @property string $matkul
 * @property string $dosen
 * @property string $jadwal
 * @property string $ruangan
 */
class Matkul extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matkul';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matkul', 'dosen', 'jadwal', 'ruangan'], 'required'],
            [['matkul', 'dosen', 'jadwal', 'ruangan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matkul' => 'Matkul',
            'dosen' => 'Dosen',
            'jadwal' => 'Jadwal',
            'ruangan' => 'Ruangan',
        ];
    }
}
