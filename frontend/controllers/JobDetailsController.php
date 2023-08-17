<?php
namespace frontend\controllers;

use yii\rest\ActiveController;
use common\models\jobdetails;

class JobDetailsController extends ActiveController{

    public $modelClass= jobdetails::class;

}



?>