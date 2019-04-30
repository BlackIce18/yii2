<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%goods}}`.
 */
class m190426_062315_create_goods_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%goods}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'price' => $this->decimal(10,2)->defaultValue(0.00),
            'description' => $this->text()->notNull(),
            'images' => $this->text(),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
        ]);

        $this->addForeignKey(
            'fk-goods-category_id',
            '{{%goods}}',
            'category_id',
            '{{%category}}',
            'id',
            'RESTRICT'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-goods-category_id',
            '{{%goods}}'
        );
        $this->dropTable('{{%goods}}');
    }
}
