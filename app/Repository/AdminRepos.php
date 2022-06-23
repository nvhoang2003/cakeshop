<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin() {
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'order by a.name';

        return DB::select ($sql);
    }

    public static function getAdminById($id){
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($admin){
        $sql = 'insert into admin ';
        $sql .= '(username, contact, email, password) ';
        $sql .= 'values (?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$admin->username, $admin->contact, $admin->email, $admin->password]);
        if($result){
            return DB::getAdmin()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($admin){
        $sql = 'update admin ';
        $sql .= 'set usernanme = ?, contact = ?, email = ?, password = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$admin->username, $admin->contact, $admin->email, $admin->password]);

    }
}
