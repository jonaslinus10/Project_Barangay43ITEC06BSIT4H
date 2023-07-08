<?php 

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    public function getBarangayList(){

        $db = \Config\Database::connect();
        $query = $db->query('select first_name, middle_initial, last_name, position from barangay_officials');
        $result = $query->getResult();
        if(count($result)>0){

            return $result;

        }else{
            
            return false;
        }
    }

    public function getResidentList(){

        $db = \Config\Database::connect();
        $query = $db->query('select * from resident_list');
        $result = $query->getResult();
        if(count($result)>0){

            return $result;

        }else{
            
            return false;
        }
    }

    public function getUser(){
        $db = \Config\Database::connect();
        $username = $_SESSION["user"];
        $query = $db->query("select * from users where username = '$username'");
        $result = $query->getResult();
        if(count($result)>0){

            return $result;

        }else{
            
        }
    }
    
}