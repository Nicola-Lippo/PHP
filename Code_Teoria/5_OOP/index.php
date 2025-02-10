<?php
//classe
class User
{
    public string $name;
    public string $surName;
    //metodo = funzione di un istanza
    public function getSurName()
    {
        //this si riferisce all'oggetto che ha istanziato la classe
        return $this->surName;
    }
    public function setSurName($lastName)
    {
        //this si riferisce all'oggetto che ha istanziato la classe
        $this->surName = $lastName;
    }
}
//nuova istanza
$user_1 = new User();
$user_1->name = 'Marco';
$user_1->setSurName('Rossi');
var_dump($user_1);
/********************************/
//classe col costruttore
class Book
{
    public string $title;
    public string $author;
    public int $sale;
    //metodo = funzione di un istanza
    public function __construct(string $_title, string $_author, int $_sale)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->sale = $_sale;
    }
    //metodo di pulizia 
    public function __destruct()
    {
        echo 'sono stato invocato';
    }
}
//nuova istanza col costruttore
$book_1 = new Book('Vivere insieme', 'J. Smith', 56);
var_dump($book_1);
//public / private
class BankAccount
{
    public string $owner;
    private int $money = 1000;
    //metodo = funzione di un istanza
    public function __construct(string $_owner)
    {
        $this->owner = $_owner;
    }
    //metodo di pulizia 
    public function getMoney()
    {
        return $this->money . ' $';
    }
}
//nuova istanza
$owner_1 = new BankAccount('Zio Paperone');
var_dump($owner_1);
//echo $owner_1->getMoney();
