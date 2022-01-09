<?php

    $nilai = 50;

    if ($nilai >=80) {
        $grade = "A";
    } else if ($nilai >= 70) {
        $grade = "B";
    } else if ($nilai >= 50) {
        $grade = "C";
    } else if ($nilai >= 30) {
        $grade = "D";
    } else if ($nilai >= 0) {
        $grade = "E";
    } else {
        echo "NIlai hanya A sampai E";
    }

    echo "NIlai Anda : $nilai <br>";
    echo "Grade : $grade";

?>