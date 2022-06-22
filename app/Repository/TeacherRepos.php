<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class TeacherRepos
{
    public static function getAllTeacher(){
        $sql='select t.* ';
        $sql.='from teacher as t ';
        $sql.='order by t.Name';
        return DB::select ($sql);
    }

    public static function getTeacherById($id){
        $sql='select t.* ';
        $sql.='from teacher as t ';
        $sql.='where t.id = ? ';
        return DB :: select ($sql,[$id]);
    }

    public static function insert($teacher){
        $sql = 'insert into teacher ';
        $sql .= '(Name, DOB, SSID) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$teacher->Name, $teacher->DOB, $teacher->SSID]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($teacher){
        $sql = 'update teacher ';
        $sql .= 'set Name = ?, DOB = ?, SSID = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$teacher->Name, $teacher->DOB, $teacher->SSID, $teacher->id]);

    }

    public static function delete($id){
        $sql = 'delete from teacher ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }
}
