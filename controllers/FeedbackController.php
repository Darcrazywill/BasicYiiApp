<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\FeedbackForm;

class FeedbackController extends Controller
{
    public function actionIndex()
    {
        $model = new FeedbackForm();
        $success = false;
        $submittedData = [];

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Сохранение данных (здесь можно добавить логику сохранения в БД)
            $submittedData = [
                'name' => $model->name,
                'email' => $model->email,
                'message' => $model->message,
            ];
            
            $success = true;
            
            // Сброс формы после успешной отправки
            $model = new FeedbackForm();
        }

        return $this->render('index', [
            'model' => $model,
            'success' => $success,
            'submittedData' => $submittedData,
        ]);
    }
}
?>