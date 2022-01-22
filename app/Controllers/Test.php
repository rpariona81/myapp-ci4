<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        //echo "mmmm";
        //$demo = $this->request;
        /*$options = [
            'cost' => 12,
        ];
        $stored_hash = password_hash("joaquinmateo", PASSWORD_ARGON2I);*/
        //$stored_hash = password_hash("joaquinmateo", PASSWORD_BCRYPT, $options);
        //$user_password = "joaquinmateo";
        //if(password_verify($user_password, $stored_hash)) {
        /*if(password_verify($user_password, '$2y$12$terOCspJ14EnfuNq3VGcwOEZrsUDDgVv6mGGpKWfxHODWc4i4PiOi')) {
            // password validated
            //print_r("Bienvenido ".$user_password."-".$stored_hash);
            print_r("Bienvenido ".$user_password."!!!");
        }*/

        /*$timeTarget = 0.05; // 50 milliseconds 

            $cost = 10;
            do {
                $cost++;
                $start = microtime(true);
                password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
                $end = microtime(true);
            } while (($end - $start) < $timeTarget);

            echo "Appropriate Cost Found: " . $cost;
            */
            echo base_url();
        
    }

    public function view($page = 'home')
    {
        // ...
    }
}