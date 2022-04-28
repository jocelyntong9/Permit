<?php

class LoginContr {
    protected $User;
    protected $Pass;

    public function __construct($User, $Pass)
    {
        $this->User = $User;
        $this->Pass = $Pass;
    }
}