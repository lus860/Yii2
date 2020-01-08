<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%authors}}".
 *
 * @property int $id
 * @property string|null $surname
 * @property string|null $name
 * @property string|null $created_at
 *
 * @property AuthorsAndBooks[] $authorsAndBooks
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%authors}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['surname', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Surname',
            'name' => 'Name',
            'created_at' => 'Created At',
        ];
    }
    
    public static function find()
    {
        return new AuthorsQuery(get_called_class());
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorsAndBooks()
    {
        return $this->hasMany(AuthorsAndBooks::className(), ['author_id' => 'id']);
    }
    
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['id' => 'book_id'])->via('authorsAndBooks')->all();
    }

    /**
     * {@inheritdoc}
     * @return AuthorsQuery the active query used by this AR class.
     */
    
}
