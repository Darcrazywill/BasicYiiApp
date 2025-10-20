<?php
namespace app\models;
use yii\base\Model;
class MouseForm extends Model{
    public $name;
    public $email;
    public $petName;

    public function rules(){
        return [
            [['name','email', 'petName'], 'required'],
            ['email', 'email']
        ];
    }
}?>