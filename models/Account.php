<?php

require_once 'models/Connect.php';
require 'models/AccountObject.php';

class Account
{
    public function login($params)
    {
        $sql = "select * from user where email = '" . $params['email'] . "' and password = '" . md5($params['password']) . "'";
        $result = (new Connect())->excuteQuery($sql);
        return mysqli_num_rows($result);
        // return new AccountObject($each);
    }
}
