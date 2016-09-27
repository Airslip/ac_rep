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
        
// Таблица Кузов     
        $this->createTable('{{%carcase}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);
        
// Таблица Заявки  
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'brand' => $this->string()->notNull(),
            'model' => $this->string()->notNull(),
        ], $tableOptions);
    }
    
    public function safeDown()
    {
        $this->dropTable('{{%brand}}');
        $this->dropTable('{{%model}}');
        $this->dropTable('{{%carcase}}');
        $this->dropTable('{{%request}}');
    }
}
