<?php

    // An object is a data type which stores data and information on how to process that data.

    // In PHP, an object must be explicitly declared.

    // First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods:
    class Car {
        function Car(){
            $this->model = "VW";
        }
    }
    //create an object
    $heribe = new Car();

    //show object properties
    echo $herbie->model;
?>