<?php


namespace app\models;


use app\core\Model;

class AccountModel extends Model
{


    public function authData($data)
    {
        $users = [
            'name' => $this->getData()[0],
            'password' => $this->getData()[1],
        ];
        if ($data['name'] === $users['name'] && $data['password'] === $users['password']) {
            return true;
        } else {
            return false;
        }
    }

}