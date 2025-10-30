<?php

namespace app\models;

use yii\base\Model;

class User extends Model
{
    public $id;
    public $name;
    public $age;
   

    public static function getData()
    {
        return [
            new self(['id'=>1, 'name'=>'Иван', 'age'=>25]),
            new self(['id'=>2, 'name'=>'Дарина', 'age'=>18]),
            new self(['id'=>3, 'name'=>'Петр', 'age'=>30]),
        ];
    }
    
    public static function updateAge($id, $newAge){
        $users = self::getData();
        foreach ($users as $user){
            if ($user->id==$id){
                $user->age = $newAge;
            }
        }
        return $users;
    }


}
