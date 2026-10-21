<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductSpecsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_spec' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_product' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'spec_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'spec_value' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id_spec', true);
        $this->forge->addForeignKey('id_product', 'products', 'id_product', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_specs');
    }

    public function down()
    {
        $this->forge->dropTable('product_specs');
    }
}
