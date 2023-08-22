<?php
namespace frontend\controllers;

use yii\rest\ActiveController;
use common\models\WalkinRegistration;

class UserWalkinRegistrationController extends ActiveController{

    public $modelClass= WalkinRegistration::class;

}



?>