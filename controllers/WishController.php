<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Wish;

class WishController extends Controller
{
    public function actionIndex()
    {
        $model = new Wish();
        $wishes = [];

        
        if (Yii::$app->session->has('wishes')) {
            $wishes = Yii::$app->session->get('wishes');   // Загружаем сохранённые желания из сессии
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $wishes[] = $model->wish;
            Yii::$app->session->set('wishes', $wishes);

           
            $model = new Wish();

            return $this->refresh(); //предотвращение переотправки
        }

        return $this->render('index', [
            'model' => $model,
            'wishes' => $wishes,
        ]);
    }
}