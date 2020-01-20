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
class Author extends \yii\db\ActiveRecord
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
            'book_id' => 'Books',
        ];
    }
    
    public static function find()
    {
        return new AuthorsQuery(get_called_class());
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorAndBook()
    {
        return $this->hasMany(AuthorAndBook::className(), ['author_id' => 'id']);
    }

    public function getBook()
    {
        return $this->hasMany(Book::className(), ['id' => 'book_id'])->via('authorAndBook')->all();
    }

    /**
     * {@inheritdoc}
     * @return AuthorsQuery the active query used by this AR class.
     */
    
}
