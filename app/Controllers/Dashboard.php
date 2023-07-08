<?php

namespace App\Controllers;

use \App\Models\UsersModel;

class Dashboard extends BaseController
{
    public function index(){

        if(!session('user')){

            return redirect()->to('/dashboard/login');
        }

        $data =[
            'page_title' => 'Brgy 43 Pinagpala Dashboard',
            'page_header' => 'Dashboard',
        ];

        $userModel = new UsersModel();
        $data['barangay_list'] = $userModel->getBarangayList();

        return view('dashboard_view', $data);

    }

    public function resident_record(){

        $data =[
            'page_title' => 'Brgy 43 Pinagpala Resident Records',
            'page_header' => 'Resident Records',
        ];

        $userModel = new UsersModel();
        $data['resident_list'] = $userModel->getResidentList();

        return view('resident_record', $data);

    }

    public function user(){

        $data =[
            'page_title' => 'Brgy 43 Pinagpala User',
            'page_header' => 'User',
        ];

        $userModel = new UsersModel();
        $data['user'] = $userModel->getUser();
        
        return view('user_view', $data);
    }

    public function login(){

        $data =[
            'page_title' => 'Brgy 43 Pinagpala | Login',
            'page_header' => 'Brgy 43 Pinagpala',
            'page_login' => 'Login'
        ];

        return view('login', $data);
    }

    public function do_login(){
        
        $userModel = new UsersModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $db = \Config\Database::connect();
        $query = $db->query("select * from users where username = '$username'");
        $result = $query->getResult();
        if(count($result) > 0){
            foreach($query->getResult() as $row){
                $row->password;
                $row->username;
            }
    
            if($password === $row->password){

                $this->session->set("user", $row->username);

                return redirect()->to('/dashboard');

            }else{

                $data =[
                    'page_title' => 'Brgy 43 Pinagpala | Login',
                    'page_header' => 'Brgy 43 Pinagpala',
                    'page_login' => 'Login',
                    'page_error' => 'Invalid Password'
                ];
    
                return view('login', $data);

            }

        }else{

            $data =[
                'page_title' => 'Brgy 43 Pinagpala | Login',
                'page_header' => 'Brgy 43 Pinagpala',
                'page_login' => 'Login',
                'page_error' => 'Invalid Username or Password'
            ];

            return view('login', $data);
        }

    }

    public function addResident(){

        $first_name = $this->request->getPost('first_name');
        $middle_initial = $this->request->getPost('middle_initial');
        $last_name = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        $mobile_number = $this->request->getPost('mobile_number');

        $db = \Config\Database::connect();
        $query = $db->query("insert into resident_list (first_name, middle_initial, last_name, email, address, mobile_number) values ('$first_name', '$middle_initial', '$last_name', '$email', '$address', '$mobile_number')");
        
        return redirect()->to('/dashboard/resident_record');
    }

    public function editResident(){

        $user_id = $this->request->getPost('user_id');
        $first_name = $this->request->getPost('first_name');
        $middle_initial = $this->request->getPost('middle_initial');
        $last_name = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        $mobile_number = $this->request->getPost('mobile_number');

        $db = \Config\Database::connect();
        $query = $db->query("update resident_list set first_name = '$first_name', middle_initial = '$middle_initial', last_name = '$last_name', email = '$email', address = '$address', mobile_number = '$mobile_number' where id = '$user_id'");
        
        return redirect()->to('/dashboard/resident_record');
    }

    public function deleteResident(){

        $user_id = $this->request->getPost('user_id');

        $db = \Config\Database::connect();
        $query = $db->query("DELETE FROM resident_list WHERE id = '$user_id'");
        
        return redirect()->to('/dashboard/resident_record');

    }

    public function logout(){

        session_destroy();

        return redirect()->to('/dashboard/login');
    }

}
