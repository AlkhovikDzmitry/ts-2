<?php
class Person {
  public $id;
  public $name;
  public $surname;
  public $birthdate;
  public $gender;
  public $city;

  function __construct($id, $name, $surname, $birthdate, $gender, $city) {
    $this->id = $id;
    $this->name = $name;
    $this->surname = $surname;
    $this->birthdate = $birthdate;
    $this->gender = $gender;
    $this->city = $city;
  }
}

class DatabaseSearcher {
  public $idArray;
  public $name;
  public $surname;
  public $minBirthdate;
  public $maxBirthdate;
  public $gender;
  public $city;

  function __construct($idArray, $name = '', $surname = '', $minBirthdate = '0000-00-00', $maxBirthdate = '9999-12-31', $gender = null, $city = '') {
    $this->idArray = $idArray;
    $this->name = $name;
    $this->surname = $surname;
    $this->minBirthdate = $minBirthdate;
    $this->maxBirthdate = $maxBirthdate;
    $this->gender = $gender;
    $this->city = $city;
  }

  function search() {
    $foundPeople = array();
    foreach ($this->idArray as $id) {
      // assuming that $db is an array of person objects
      $person = array_filter($db, function($p) use ($id) {
        return ($p->id === $id);
      });

      if ($person && 
          ($this->name === '' || $person->name === $this->name) &&
          ($this->surname === '' || $person->surname === $this->surname) &&
          ($person->birthdate >= $this->minBirthdate && $person->birthdate <= $this->maxBirthdate) &&
          ($this->gender === null || $person->gender === $this->gender) &&
          ($this->city === '' || $person->city === $this->city)) {
        $foundPeople[] = $person;
      }
    }
    return $foundPeople;
  }

  function deletePeople() {
    $people
  }