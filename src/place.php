<?php
class Place
{
    private $location;
    private $photo;



    function __construct($location, $photo)
    {
        $this->location = $location;
        $this->photo = $photo;
    }

    function setLocation ($new_location)
    {
        $this->location = (string) $new_location;
    }

    function getLocation()
    {
        return $this->location;
    }

    function setPhoto ($new_photo)
    {
        $this->location = (string) $new_photo;

    }

    function getPhoto()
    {
        return $this->photo;
    }

    function save()
    {
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
