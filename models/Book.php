<?php

namespace app\models;

use Yii;
use app\models\Author;
use yii\db\afterSave;
use app\models\AuthorAndBook;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "{{%books}}".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $created_at
 *
 * @property AuthorsAndBooks[] $authorsAndBooks
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $author_array;
    public static function tableName()
    {
        return '{{%books}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['author_array'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'created_at' => 'Created At',
            'author_array' => 'Authors',
            'author_id' => 'Authors',
        ];
    }
    
    public static function find()
    {
        return new BooksQuery(get_called_class());
    }

    public function data()
    {
       $data=ArrayHelper::map( Author::find()->all(),'id','surname' );
        
       return $data;
    }
    
    public function getAuthorAndBook()
    {
        return $this->hasMany(AuthorAndBook::className(), ['book_id' => 'id']);
    }
    
    public function getAuthor()
    {
        return $this->hasMany( Author::className(), ['id' => 'author_id'])->via( 'authorAndBook' );
    }
    
    public function findauthor()
    {  
        $this->author_array = $this->author;
    }
    
    public function saveauthor()
    {
        //parent::afterSave($insert, $changedAttributes);
        
        if ( is_array($this->author_array)) {
            $arr = ArrayHelper::map( $this->author,'id','id' );
            foreach( $this->author_array as $one ) {
                if (!in_array( $one,$arr )) {
                   $model = new AuthorAndBook();
                   $model->book_id = $this->id;
                   $model->author_id = $one;
                   $model->save();
                }
                if( isset($arr[$one])) {
                  unset($arr[$one]); 
                }
            }
            AuthorAndBook::deleteAll(['and',['author_id'=>$arr],['book_id' => $this->id]]);
            
        } else {
            AuthorAndBook::deleteAll(['book_id' => $this->id]);
        }
        
    }
    
    

}
