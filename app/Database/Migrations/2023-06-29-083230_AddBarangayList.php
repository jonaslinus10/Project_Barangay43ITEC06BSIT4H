<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBarangayList extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'middle_initial' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'position' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('barangay_officials');
        $seeder = \Config\Database::seeder();
        $seeder->call('BarangayListSeeder');
    }

    public function down()
    {
        $this->forge->dropTable('barangay_officials');
    }
}
