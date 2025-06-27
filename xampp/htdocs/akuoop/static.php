<?php

class Statis {
    public static $angka = 4;

    public static function halo() {
        return "Halo " . self::$angka . " Kali";
    }
}

echo Statis::halo();



