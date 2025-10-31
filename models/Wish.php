<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Wish extends Model
{
    public $wish;

    public function rules()
    {
        return [
            ['wish', 'required', 'message' => 'Пожалуйста, введите ваше желание.'],
            ['wish', 'string', 'min' => 2, 'tooShort' => 'Желание должно быть не короче 2 символов.'],
            ['wish', 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'wish' => 'Ваше желание',
        ];
    }
}