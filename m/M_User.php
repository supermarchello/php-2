<?php

/**
 * @todo Сделать через класс Sinleton
 * Class M_User
 */
class M_User
{
    private $isAuth = false;

    private $login;

    private $pass;

    public function __construct()
    {
        $this->login = 'admin';
        $this->pass = 'testUser1';
    }

    public function auth($login, $pass)
    {
        if ($this->checkDb($login, $pass)) {
            $this->isAuth = true;
            $_SESSION['LOGIN'] = $login;
            $_SESSION['PASS'] = $pass;

            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $login
     * @param $pass
     * @return bool
     * @todo Сделать реальную проверку на наличие пользователя в базе
     */
    private function checkDb($login, $pass)
    {
        return ($login == $this->login && $pass == $this->pass) ? true : false;
    }
}