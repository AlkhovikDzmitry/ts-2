
<?php

class Person {
  public $id;
  public $name;
  public $surname;
  public $dateOfBirth;
  public $gender;
  public $birthCity;

  public function __construct($id = null, $name = null, $surname = null, $dateOfBirth = null, $gender = null, $birthCity = null) {
    $this->id = $id;
    $this->name = $name;
    $this->surname = $surname;
    $this->dateOfBirth = $dateOfBirth;
    $this->gender = $gender;
    $this->birthCity = $birthCity;
  }

  public function save() {
    //Сохранение полей экземпляра класса в БД
  }

  public static function deleteById($id) {
    // Удаление человека из БД в соответствии с id объекта
  }

  public static function convertDateToAge($dateOfBirth) {
    // static преобразование даты рождения в возраст (полных лет)
  }

  public static function convertGenderToString($gender) {
    // static преобразование пола из двоичной системы в текстовую (муж, жен)
  }

  public static function getById($id) {
    //создает человека в БД с заданной информацией, либо берет информацию из БД по id
    $person = new Person($id, $name, $surname, $dateOfBirth, $gender, $birthCity);
    return $person;
  }

  public function format($includeAge = false, $includeGender = false) {
    // Форматирование человека с преобразованием возраста и (или) пола
    $formattedPerson = new stdClass();
    $formattedPerson->id = $this->id;
    $formattedPerson->name = $this->name;
    $formattedPerson->surname = $this->surname;
    $formattedPerson->dateOfBirth = $this->dateOfBirth;
    $formattedPerson->gender = $includeGender ? Person::convertGenderToString($this->gender) : null;
    $formattedPerson->birthCity = $this->birthCity;
    $formattedPerson->age = $includeAge ? Person::convertDateToAge($this->dateOfBirth) : null;
    return $formattedPerson;
  }
}
