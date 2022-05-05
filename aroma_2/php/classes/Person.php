<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
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
//   function getInfo(){
//     return "
//     <h3>A few words about myself:</h3><br>"."My name is: ".$this->getName()."<br> my lastname is: ".$this->getLastname()."<br> my father is: ".$this->getFather()->getName();

//   }
}
// Здоровье человека не может быть выше 100
$igor = new Person("Igor", "Petrov", 68);

$alex = new Person("Alex", "Ivanov", 42);
$olga = new Person("Olga", "Ivanova", 42, null, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getName() . "<br>";
//echo $valera->mother->getName(); Так работать не будет, только через геттер
echo $valera->getMother()->getName() . "<br>"; //Получаем маму Валеры
echo $valera->getMother()->getFather()->getName();//Получаем дедушку Валеры

// $igor = new Person("Igor", "Petrov", 38);
// echo $alex->sayHi($igor->name);
// $alex->name = "Alex";
// echo $alex->name;
// $medKit = 50;

// $alex->setHp(-30); //Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit);
// echo $alex->getHp();
// Задача на практическую часть:
// Создать как минимум 2 бабушки, 2 дедушки по линии каждого из родителей.
// Вывести на экран информацию о всей родне сына