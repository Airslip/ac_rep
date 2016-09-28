<?php

use yii\db\Migration;

class m160926_122922_ac_migration extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
// Таблица Брэнд
        $this->createTable('{{%brand}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'logo' => $this->string()->notNull(),
        ], $tableOptions);
        
        $renault = array('name' => 'Renault', 'slug' => 'renault', 'logo' => 'logo_renault');
        $this->insert('brand', $renault);
        $hyundai = array('name' => 'Hyundai', 'slug' => 'hyundai', 'logo' => 'logo_hyundai');
        $this->insert('brand', $hyundai);
        
// Таблица Кузов     
        $this->createTable('{{%carcase}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);
        
        $sedan = array('name' => 'Седан');
        $this->insert('carcase', $sedan);
        $hatchback = array('name' => 'Хэтчбэк');
        $this->insert('carcase', $hatchback);
        
// Таблица Модель      
        $this->createTable('{{%model}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'photo' => $this->string()->notNull(),
            'carcase_type' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'brand' => $this->string()->notNull(),
        ], $tableOptions);
        
//        $this->createIndex('FK_model_carcase', '{{%model}}', 'carcase_type');
//        $this->addForeignKey('FK_model_carcase', '{{%model}}', 'carcase_type', '{{%carcase}}', 'name', 'SET NULL', 'CASCADE');
//        $this->createIndex('FK_model_brand', '{{%model}}', 'brand');
//        $this->addForeignKey('FK_model_brand', '{{%model}}', 'brand', '{{%brand}}', 'name', 'SET NULL', 'CASCADE');
        
        $logan = array('name' => 'Logan', 'slug' => 'logan', 'photo' => 'photo_logan', 'carcase_type' => 'седан', 'description' => 'Описание', 'brand' => 'Renault');
        $this->insert('model', $logan);
        $sandero = array('name' => 'Sandero', 'slug' => 'sandero', 'photo' => 'photo_sandero', 'carcase_type' => 'хэтчбэк', 'description' => 'Описание', 'brand' => 'Renault');
        $this->insert('model', $sandero);
        
// Таблица Заявки  
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'brand' => $this->string()->notNull(),
            'model' => $this->string()->notNull(),
        ], $tableOptions);
        
//        $this->createIndex('FK_request_brand', '{{%request}}', 'brand');
//        $this->addForeignKey('FK_request_brand', '{{%request}}', 'brand', '{{%brand}}', 'name', 'SET NULL', 'CASCADE');
//        $this->createIndex('FK_request_model', '{{%request}}', 'model');
//        $this->addForeignKey('FK_request_model', '{{%request}}', 'model', '{{%model}}', 'name', 'SET NULL', 'CASCADE');
        
    }
    
    public function safeDown()
    {
        $this->dropTable('{{%brand}}');
        $this->dropTable('{{%model}}');
        $this->dropTable('{{%carcase}}');
        $this->dropTable('{{%request}}');
        $this->dropTable('{{%user}}');
    }
}
