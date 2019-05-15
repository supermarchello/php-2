<?php
include_once('../m/M_User.php');

class C_Auth extends C_Base
{
    public function action_auth()
    {
        $this->title .= '::Авторизация';
        $this->content = $this->Template('v/v_auth.php', array());
    }

    public function action_exit()
    {
        $this->title .= '::Авторизация';
        $this->content = $this->Template('v/v_auth.php', array());
    }
}

