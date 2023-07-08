<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangayListSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['first_name' => 'LANI', 'middle_initial' => 'H.','last_name' => 'VILLAMIN', 'position' => 'Punong Barangay'],
            ['first_name' => 'JOSEPH JERICO', 'middle_initial' => 'S.','last_name' => 'DE CASTRO', 'position' => 'Sangguniang Barangay Member'],
            ['first_name' => 'BERNARDO', 'middle_initial' => 'A.','last_name' => 'NATI', 'position' => 'Sangguniang Barangay Member'],
            ['first_name' => 'MAXIMO', 'middle_initial' => 'L.','last_name' => 'CARGULLO', 'position' => 'Sangguniang Barangay Member'],
            ['first_name' => 'JAIME', 'middle_initial' => 'C.','last_name' => 'ADAY', 'position' => 'Sangguniang Barangay Member'],
            ['first_name' => 'IRENE', 'middle_initial' => 'M.','last_name' => 'BUENAVENTURA', 'position' => 'Sangguniang Barangay Member'],
            ['first_name' => 'LEONARDO', 'middle_initial' => 'B.','last_name' => 'LAPAN', 'position' => 'Sangguniang Barangay Member'],
            ['first_name' => 'JOHN JOHN', 'middle_initial' => 'D.','last_name' => 'MENDEZ', 'position' => 'Sangguniang Barangay Member'],
            ['first_name' => 'RIKKI RYAN', 'middle_initial' => 'S.','last_name' => 'DE GUZMAN', 'position' => 'SK Chairperson'],
            ['first_name' => 'RAQUEL', 'middle_initial' => 'G.','last_name' => 'NOVENO', 'position' => 'Barangay Secretary'],
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO barangay_officials (first_name, middle_initial, last_name, position) VALUES(:first_name:, :middle_initial:, :last_name:, :position:)', $data);

        // Using Query Builder
        $this->db->table('barangay_officials')->insertBatch($data);
    }
}