<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'password' => [
                'type' => 'VARCHAR',
                'null' => FALSE,
                'constraint' => 255
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}