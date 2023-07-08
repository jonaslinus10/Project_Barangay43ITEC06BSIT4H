<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ResidentList extends Seeder
{
    public function run()
    {
        $data = [
            ['first_name' => 'LANI', 'middle_initial' => 'H.','last_name' => 'VILLAMIN', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'JOSEPH JERICO', 'middle_initial' => 'S.','last_name' => 'DE CASTRO', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'BERNARDO', 'middle_initial' => 'A.','last_name' => 'NATI', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'MAXIMO', 'middle_initial' => 'L.','last_name' => 'CARGULLO', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'JAIME', 'middle_initial' => 'C.','last_name' => 'ADAY', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'IRENE', 'middle_initial' => 'M.','last_name' => 'BUENAVENTURA', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'LEONARDO', 'middle_initial' => 'B.','last_name' => 'LAPAN', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'JOHN JOHN', 'middle_initial' => 'D.','last_name' => 'MENDEZ', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'RIKKI RYAN', 'middle_initial' => 'S.','last_name' => 'DE GUZMAN', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
            ['first_name' => 'RAQUEL', 'middle_initial' => 'G.','last_name' => 'NOVENO', 'email' => 'exampleemail@gmail.com', 'address' => 'example address here', 'mobile_number' => '09999999999'],
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO barangay_officials (first_name, middle_initial, last_name, position) VALUES(:first_name:, :middle_initial:, :last_name:, :position:)', $data);

        // Using Query Builder
        $this->db->table('resident_list')->insertBatch($data);
    }
}
