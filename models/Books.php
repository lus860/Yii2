<?php

namespace app\models;

use Yii;
use app\models\Authors;
use yii\db\afterSave;
use app\models\AuthorsAndBooks;

/**
 * This is the model class for table "{{%books}}".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $created_at
 *
 * @property AuthorsAndBooks[] $authorsAndBooks
 */
class Books extends \yii\db\ActiveRecord
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
        ];
    }
    
    public static function find()
        
    {
        return new BooksQuery(get_called_class());
    }

    public function data()
        
    {
       $data=yii\helpers\ArrayHelper::map(Authors::find()->all(),'id','surname');

       return $data;
    }
    public function getAuthorsAndBooks()
    {
        return $this->hasMany(AuthorsAndBooks::className(), ['book_id' => 'id']);
    }
    
    public function getAuthors()
    {
        return $this->hasMany(Authors::className(), ['id' => 'author_id'])->via('authorsAndBooks')->all();
    }
    
    public function afterFind()
        
    {
       $this->author_array=$this->authors;
    }
    
    public function afterSave($insert, $changedAttributes)
         
    {
        parent::afterSave($insert, $changedAttributes);
         
        $arr=\yii\helpers\ArrayHelper::map($this->authors,'id','id');
        foreach($this->author_array as $one){
            if(!in_array($one,$arr)){
                $model=new AuthorsAndBooks();
                $model->book_id=$this->id;
                $model->author_id=$one;
                $model->save();
            }
            if(isset($arr[$one])){
               unset($arr[$one]); 
            }
        }
        AuthorsAndBooks::deleteAll(['author_id'=>$arr]);
    
    }


}
