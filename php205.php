<?php
    class Car{
        function testCar(){
            echo $this->msg = "Thailand <br />";
            echo $this->model = "UV";
        }
    }

    $newCar = new Car();
    echo $newCar->testCar();


