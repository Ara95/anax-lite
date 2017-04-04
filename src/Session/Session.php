<?php


namespace arno16\Session;



class Session
{


    public function __construct()
    {

    }


    public function startSession()
    {
        session_name($this->name);
        session_start();
    }



    public function resetSession()
    {
        session_destroy();
    }



    public function variable($var)
    {
        return array_key_exists($key, $_SESSION);
    }
}
