<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null) //Через "=" можем указать значения по умолчанию
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
  }

  function sayHi($name)
  {
    return "Hi $name, I am " . $this->name;
  }
  function getName()
  {
    return $this->name;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getLastname()
  {
    return $this->lastname;
  }
  function getInfo()
  {
    return "<h2 style = 'margin-bottom: 1px' >Информация обо мне:</h2>" .
      "<br>Моё имя: " . "<b>" . $this->getName() . "</b>" .
      "<br>Моя фамилия: " . "<b>" . $this->getLastname() . "</b>" .
      "<br>Моего папу зовут: " . "<b>" . $this->getFather()->getName() . "</b>" .
      "<br>Мою маму зовут: " . "<b>" . $this->getMother()->getName() . "</b>" .
      "<br>Моих дедушку и бабушку по папиной линии зовут: " . "<b>" . $this->getFather()->getFather()->getName() . " и " . $this->getFather()->getMother()->getName() . "</b>" .
      "<br>Моих дедушку и бабушку по маминой линии зовут: " . "<b>" . $this->getMother()->getFather()->getName() . " и " . $this->getMother()->getMother()->getName() . "</b>";
  }
}
//родители Ольги
$alex = new Person("Александр", "Иванов", 72); //отец Ольги
$maria = new Person("Мария", "Иванова", 68); //мама Ольги

//родители Игоря
$kolya = new Person("Николай", "Петров", 70); //отец Игоря
$katya = new Person("Екатерина", "Петрова", 69); //мама Игоря

//родители Валеры
$igor = new Person("Игорь", "Петров", 40, $katya, $kolya); //отец Валеры
$olga = new Person("Ольга", "Петрова", 38, $maria, $alex); //мама Валеры

//сын Игоря и Ольги; внук Александра и Марии, Николая и Екатерины
$valera = new Person("Валера", "Петров", 10, $olga, $igor);

echo $valera->getInfo();