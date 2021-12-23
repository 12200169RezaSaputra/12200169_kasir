<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'user_id'       => [
                'type'           => 'INT',
                'constraint'     => 5
            ],
            'harga'      => [
                'type'           => 'INT',
                'constraint'     => 100
            ],
            'gambar' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'kategori'      => [
                'type'           => 'ENUM',
                'constraint'     => ["makanan", "minuman"],
                "default" => "makanan"
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey("id", TRUE);
        $this->forge->createTable('menu', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('menu');
    }
}