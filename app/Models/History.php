<?php

namespace App\Models;

class History
{
    private static $histories = [
        [
            "tanggal" => "13-09-2021",
            "waktu" => "08.00",
            "lokasi" => "Toko Buku Hangat",
            "suhu" => "36.2"
        ],
        [
            "tanggal" => "13-09-2021",
            "waktu" => "10.00",
            "lokasi" => "Bulan Dept Store",
            "suhu" => "36.2"
        ],
        [
            "tanggal" => "16-09-2021",
            "waktu" => "15.00",
            "lokasi" => "Pagi Jogging Area",
            "suhu" => "37.0"
        ],
    ];

    public static function all()
    {
        return collect(self::$histories);
    }
}
