<?php
class User
{
    private $username;
    private $password;
    private $db_username = "xuantruong";
    private $db_password = "truong28@!";

    public function setInfor($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    function checkLogin()
    {
        if ($this->username == $this->db_username && $this->password == $this->db_password) {
            echo "Hello: " . $this->username;
        } else {
            echo "User không tồn tại";
        }
    }
}
$u = new User;
$u->setInfor("xuantruong", "truong28@!");
$u->checkLogin();
