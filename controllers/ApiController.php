<?php
//namespace backend\controllers;
//use backend\models\Collectors;
namespace app\controllers;
use Yii;
use app\models\Collectors;
//use Yii;
class ApiController extends \yii\rest\Controller
{

    public function actionCollectors(){

        $username = !empty($_POST['collector_code'])?$_POST['collector_code']:'';
        $password = !empty($_POST['password'])?$_POST['password']:'';
        $response = [];

        if(empty($username) || empty($password)){
            $response = [
                'status' => 'error',
                'message' => 'username & password both are required!',
                'data' => '',
            ];
        }
        else{
               $user = Collectors::findByUsername($username);
            if(!empty($user)){


                if($user->password == $_POST['password']){
                    $response = [
                        'status' => 'success',
                        'message' => 'login successfully!',
                        'data' => [
                            'id' => $user->id,
                            'collector_code' => $user->collector_code,
                            'name' => $user->name,
                            'email'=>$user->email,
                            'phone_number'=>$user->phone_number,
                            'api_token' => $user->api_token,
                            'assigned_location' => $user->assigned_location,
                            'assigned_toll_type' => $user->assigned_toll_type,
                            'vehicle_type' => $user->vehicle_type,
                            'remember_token' => $user->remember_token,
                        ]
                    ];
                }

                else{
                    $response = [
                        'status' => 'error',
                        'message' => 'wrong password !',
                        'data' => '',
                    ];
                }
            }

            else{
                $response = [
                    'status' => 'error',
                    'message' => 'user is disabled or does not exist!',
                    'data' => '',
                ];
            }
        }
        return $response;


    }

    protected function verbs()
    {
        return [
            'login' => ['POST'],
        ];
    }
}
