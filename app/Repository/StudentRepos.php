<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class StudentRepos
{
    public static function getAllStudent(){
        $sql='select s.* ';
        $sql.='from student as s ';
        $sql.='order by s.Name';
        return DB::select ($sql);
    }

    public static function getStudentById($id){
        $sql='select s.* ';
        $sql.='from student as s ';
        $sql.='where s.id = ? ';
        return DB :: select ($sql,[$id]);
    }

    public static function insert($student){
        $sql = 'insert into student ';
        $sql .= '(Name, Email, Contact, classname) ';
        $sql .= 'values (?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$student->Name, $student->Email, $student->Contact,$student->classname]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($student){
        $sql = 'update student ';
        $sql .= 'set Name = ?, Email = ?, Contact = ?, classname = ? ';
        $sql .= 'where id = ?';

        DB::update($sql, [$student->Name, $student->Email, $student->Contact, $student->classname, $student->id]);

    }

    public static function delete($id){
        $sql = 'delete from student ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }
    public static function getclasssBystudent($id){
        $sql = 'select p.* ';
        $sql .= 'from publishers as p ';
        $sql .= 'join books as b on p.id = b.publisherId ';
        $sql .= 'where b.id = ?';

        return DB::select($sql, [$bookId]);
    }
}
