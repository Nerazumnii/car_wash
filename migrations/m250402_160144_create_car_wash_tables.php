<?php

use yii\db\Migration;

class m250402_160144_create_car_wash_tables extends Migration
{
    public function safeUp()
    {
        $this->createTable('car_wash', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'address' => $this->string(512)->notNull(),
            'rating' => $this->decimal(3, 2)->defaultValue(0),
            'work_hours' => $this->string(100)->notNull(),
            'description' => $this->text(),
            
        ]);
        
        // Добавляем тестовые данные (опционально)
        $this->batchInsert('car_wash', 
            ['name', 'address', 'rating', 'work_hours', 'description'],
            [
                ['Мойка №1', 'ул. Центральная, 1', 4.5, '08:00-22:00', 'Автомойка премиум-класса'],
                ['Чистый авто', 'пр. Победы, 15', 4.2, '09:00-21:00', 'Экспресс-мойка']
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('car_wash');
    }
}
