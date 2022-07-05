<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biodata".
 *
 * @property int $id
 * @property string $nama
 * @property string $nim
 * @property string $angkatan
 */
class Biodata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biodata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nim', 'angkatan'], 'required'],
            [['nama', 'angkatan'], 'string', 'max' => 30],
            [['nim'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nim' => 'Nim',
            'angkatan' => 'Angkatan',
        ];
    }
}
