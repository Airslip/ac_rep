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
//        $this->addForeignKey('FK_model_carcase', '{{%model}}', 'carcase_type', '{{%carcase}}', 'id', 'SET NULL', 'CASCADE');
//        $this->createIndex('FK_model_brand', '{{%model}}', 'brand');
//        $this->addForeignKey('FK_model_brand', '{{%model}}', 'brand', '{{%brand}}', 'id', 'SET NULL', 'CASCADE');
        
        $logan = array('name' => 'Logan', 'slug' => 'logan', 'photo' => 'photo_logan', 'carcase_type' => 'Cедан', 'description' => 'Оцените выразительный дизайн Renault LOGAN второго поколения. Он превосходно сочетается с легендарной надежностью, безопасностью и вместительностью. А современное оборудование дополняет практичный интерьер.', 'brand' => 'Renault');
        $this->insert('model', $logan);
        $sandero = array('name' => 'Sandero', 'slug' => 'sandero', 'photo' => 'photo_sandero', 'carcase_type' => 'Xэтчбэк', 'description' => 'Мы много работали над созданием городского автомобиля и гордимся достигнутым результатом. Встречайте Renault SANDERO — компактный и экономичный хетчбэк, который идеально вписывается в условия современного города.', 'brand' => 'Renault');
        $this->insert('model', $sandero);
        $duster = array('name' => 'Duster', 'slug' => 'duster', 'photo' => 'photo_duster', 'carcase_type' => 'Внедорожник', 'description' => 'Renault DUSTER — безусловный лидер в сегменте внедорожников, доказавший свою надежность, практичность и комфорт. Высокую проходимость по бездорожью обеспечивают новые более мощные двигатели, а современное оборудование поможет всегда оставаться на верном пути. Испытайте его в самых суровых условиях!', 'brand' => 'Renault');
        $this->insert('model', $duster);
        
        $solaris = array('name' => 'Solaris', 'slug' => 'solaris', 'photo' => 'photo_solaris', 'carcase_type' => 'Седан', 'description' => 'Создан специально для России. Создан быть лидером. Многочисленные опции подобраны таким образом, чтобы максимально удовлетворить потребности российских автомобилистов. Мы остались верны наследию любимого автомобиля и создали новый, но уже такой родной Solaris.', 'brand' => 'Hyundai');
        $this->insert('model', $solaris);
        $creta = array('name' => 'Creta', 'slug' => 'creta', 'photo' => 'photo_creta', 'carcase_type' => 'Кроссовер', 'description' => 'Дизайн, пробуждающий эмоции, больше динамики и комфорта для тех, кто не боится перемен. Все, что Вы ждете от автомобиля, воплощено в Hyundai Creta.', 'brand' => 'Hyundai');
        $this->insert('model', $creta);
        
// Таблица Заявки  
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->integer()->notNull(),
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
