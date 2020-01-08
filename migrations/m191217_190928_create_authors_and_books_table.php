<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%authors_and_books}}`.
 */
class m191217_190928_create_authors_and_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%authors_and_books}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'book_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime(),
            
        ]);
        
        $this->addForeignKey(
            'authors-author_id',
            'authors_and_books',
            'author_id',
            'authors',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'books-book_id',
            'authors_and_books',
            'book_id',
            'books',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%authors_and_books}}');
        return false;
    }
}
