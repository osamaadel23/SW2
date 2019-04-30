<?php


namespace App\strategy\User;
use App\strategy\User\UserInterface as EncrypterContract;


class context
{
    //singleton
    private static $instance = null;
    public static function getInstance(EncrypterContract $stat )
    {
        if (self::$instance == null)
        {
            self::$instance = new context($stat);
        }

        return self::$instance;
    }



    //strategy
    private $stategy;

    public function __construct(EncrypterContract $stat)
    {
        $this->strategy = $stat;
    }

    public function encrypt($text)
    {
        return $this->strategy->encrypt($text);
    }

    public function decrypt($text)
    {
        return $this->strategy->decrypt($text);
    }

}