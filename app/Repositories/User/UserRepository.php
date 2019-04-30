<?php


namespace App\Repositories\User;
use App\contact;
use App\Repositories\User\UserInterface as UserInterface;


class UserRepository implements UserInterface
{
    public $contact;


    function __construct(contact $contact) {
        $this->contact = $contact;
    }


    static public function getAll()
    {
        return contact::getAll();
    }

}
