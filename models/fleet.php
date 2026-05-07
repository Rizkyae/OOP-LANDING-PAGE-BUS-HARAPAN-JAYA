<?php
class Fleet {
    public function getFleet() {
        return [
            [
                "emoji"    => "🚌",
                "nama"     => "Ekonomi AC",
                "badge"    => "HEMAT",
                "features" => ["AC", "Reclining Seat", "Bagasi", "Toilet"],
                "harga"    => "Mulai Rp 65.000",
                "desc"     => "Nyaman & terjangkau untuk perjalanan jarak jauh."
            ],
            [
                "emoji"    => "🚍",
                "nama"     => "Eksekutif",
                "badge"    => "POPULER",
                "features" => ["AC Double", "Kursi Lebar", "USB Charger", "Snack", "Toilet"],
                "harga"    => "Mulai Rp 115.000",
                "desc"     => "Kenyamanan lebih dengan kursi semi-bed & layanan premium."
            ],
            [
                "emoji"    => "🏎️",
                "nama"     => "Super Executive",
                "badge"    => "PREMIUM",
                "features" => ["Full Reclining", "Wi-Fi", "Entertainment", "Meal", "Selimut"],
                "harga"    => "Mulai Rp 175.000",
                "desc"     => "Pengalaman travel terbaik setara bisnis class penerbangan."
            ],
            [
                "emoji"    => "🎌",
                "nama"     => "Sleeper Class",
                "badge"    => "TERBARU",
                "features" => ["Bed 180°", "Privacy Curtain", "Bantal", "Charger", "Snack Box"],
                "harga"    => "Mulai Rp 225.000",
                "desc"     => "Tidur nyenyak sepanjang perjalanan dengan tempat tidur penuh."
            ],
        ];
    }
}
