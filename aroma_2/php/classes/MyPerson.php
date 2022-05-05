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
  function getLastname()
  {
    return $this->lastname;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getInfo(){
    return "<h3>Несколько слов обо мне:</h3><br>"."Меня зовут: ".$this->getName().",<br> моя фамилия: ".$this->getLastname().",<br> моего отца зовут: ".$this->getFather()->getName().",<br> фамилия отца: ".$this->getFather()->getLastname().",<br> мою маму зовут: ".$this->getMother()->getName().",<br> фамилия мамы: ".$this->getmother()->getLastname().",<br> моего дедушку по отцовской линии зовут: ".$this->getFather()->getFather()->getName().",<br> его фамиилия: ".$this->getFather()->getFather()->getLastname().",<br> моего дедушку по материнской линии зовут: ".$this->getMother()->getFather()->getName().",<br> его фамиилия: ".$this->getMother()->getFather()->getLastname().",<br> мою бабушку по отцовской линии зовут: ".$this->getFather()->getMother()->getName().",<br> её фамиилия: ".$this->getFather()->getMother()->getLastname().",<br> мою бабушку по материнской линии зовут: ".$this->getMother()->getMother()->getName().",<br> её фамиилия: ".$this->getMother()->getMother()->getLastname().".";

  }
}
// Здоровье человека не может быть выше 100
$novomir = new Person("Novomir", "Volkov", 94);
$valentina = new Person("Valentina", "Volkova", 93);

$leonid = new Person("Leonid", "Afanas`ev", 94);
$yulia = new Person("Yulia", "Afanas`eva", 93);

$nikolai = new Person("Nikolai", "Volkov", 66, $valentina, $novomir );
$zinaida = new Person("Zinaida", "Volkova", 67, $yulia, $leonid);
$aleksandr = new Person("Aleksandr", "Volkov", 38, $zinaida, $nikolai);

echo $aleksandr->getInfo();

// Задача на практическую часть:
// Создать как минимум 2 бабушки, 2 дедушки по линии каждого из родителей.
// Вывести на экран информацию о всей родне сына