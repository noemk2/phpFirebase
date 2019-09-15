<?php

require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;

class Users
{
    protected $database;
    protected $dbname = 'users';

    public function __construct()
    {
        $firebase = (new Factory)
            ->withServiceAccount('./secret/php-tutorial-640b0-f517fd37fac9.json')
            ->withDatabaseUri('https://php-tutorial-640b0.firebaseio.com/')
            ->create();
        $this->database = $firebase->getDatabase();
    }

    public function get(int $userID = NULL)
    {
        if (empty($userID) || !isset($userID)) {
            return FALSE;
        }

        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)) {
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        } else {
            return FALSE;
        }
    }


    public function insert(array $data)
    {
        if (empty($data) || !isset($data)) {
            return FALSE;
        }

        foreach ($data as $key => $value) {
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }

        return TRUE;
    }

    public function delete(int $userID)
    {
        if (empty($userID) || !isset($userID)) {
            return FALSE;
        }

        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)) {
            $this->database->getReference($this->dbname)->getChild($userID)->remove();
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

$users = new Users();

//var_dump($users->insert([
//    '1' => 'John',
//    '2' => 'Doe',
//    '3' => 'Smith'
//]));

//var_dump($users->get(1));

//var_dump($users->delete(2));

var_dump($users->insert([
    '1' => 'John Doe'
]));
