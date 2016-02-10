<?php
class Place {
    private $city;

    function __construct($city)
    {
        $this->city = $city;
    }

    function setCity($newCity) {
        $this->city = (string) $newCity;
    }

    function getCity() {
        return $this->city;
    }

    function savePlace() {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }
}
 ?>
