<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assesor".
 *
 * @property int $id_assesor
 * @property string $nama_assesor
 */
class Assesor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assesor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_assesor', 'nama_assesor'], 'required'],
            [['id_assesor'], 'integer'],
            [['nama_assesor'], 'string', 'max' => 52],
            [['id_assesor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_assesor' => 'Id Assesor',
            'nama_assesor' => 'Nama Assesor',
        ];
    }
}
