<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['first_name' => 'LANI', 'middle_initial' => 'H.','last_name' => 'VILLAMIN', 'username' => 'admin', 'password' => 'admin', 'location' => 'Brgy. 43 Pinagpala', 'work_number' => '431-6234', 'mobile_number' => '0999-000-0000', 'email' => 'lanivillamin@gmail.com', 'work_address' => 'Brgy. 43 Pinagpala', 'position' => 'Punong Barangay'],
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}