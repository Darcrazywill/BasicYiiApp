<?php

namespace app\models;

use Yii;
use yii\base\Model;

class FeedbackForm extends Model
{
    public $name;
    public $email;
    public $message;

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            ['name', 'string', 'min' => 2],
            ['email', 'email'],
            ['message', 'string', 'min' => 2],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Email',
            'message' => 'Сообщение',
        ];
    }
}
?>