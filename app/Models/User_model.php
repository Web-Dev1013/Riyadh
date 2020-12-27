<?php
namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use mysqli;

class User_model extends Model {

    public function __construct()
    {
        
    }

    public function init_Data($user_email, $user_permission){
        $db = db_connect();
        $builder = $db->table("user");
        if($user_permission != 2){
            $query = $builder->get();
        }
        else{
            $query = $builder->getWhere(['email' => $user_email]);
        }
        $user_info = array();
        $i = 0;
        foreach($query->getResult() as $row){
            $i++;
            $user_info[$i]['id'] = $row->id;
            $user_info[$i]['username'] = $row->username;
            $user_info[$i]['email'] = $row->email;
            $user_info[$i]['pass'] = $row->pass;
            $user_info[$i]['phone'] = $row->phone;
            $user_info[$i]['permission'] = $row->permission; 
        }
        return $user_info;
    }

    public function login($email, $password){
        $db = db_connect();
        $builder = $db->table("user");
        $builder->where("email", $email);
        $builder->where("pass", $password);
        $user_info = array();
        if($builder->countAllResults() > 0){
            $query = $builder -> getWhere(["email" => $email, "pass" => $password]);
            foreach($query->getResult() as $row){                
                array_push($user_info, $row->username);
                array_push($user_info, $row->email);
                array_push($user_info, $row->permission);
            }
            $data = [
                "username" => $user_info[0],
                "email" => $user_info[1],
                "permission" => $user_info[2]
            ];
            session()->set($data);
            return "success";
        }
        else{
            return "nouser";
        }
    }

    public function add_user($userName, $email, $pass, $phone, $permission){
        $db = db_connect();
        $builder = $db->table("user");
        $builder->where("email", $email);
        if($builder->countAllResults() > 0){
            return "already";
        }
        else{
            $data = [
                "username" => $userName,
                "email" => $email,
                "pass" => $pass,
                "phone" => $phone,
                "permission" => $permission
            ];
            $builder -> insert($data);
            return "success";
        }
    }

    public function delete_user($id){
        $db = db_connect();
        $builder = $db->table("user");
        $builder->delete(["id" => $id]);
    }

    public function save_Data($id, $username, $email, $pass, $phone, $permission){
        $db= db_connect();
        $builder = $db->table("user");
        $builder->delete(["id" => $id]);
        $builder->where("email", $email);
        $data=[
            "username" => $username,
            "email" => $email,
            "pass" => $pass,
            "phone" => $phone,
            "permission" => $permission
        ];
        $builder->replace($data);
    }
}
