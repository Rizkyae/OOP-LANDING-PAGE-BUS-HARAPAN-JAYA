<?php
class Route {
    public function getRoutes() {
        return [
            [
                "from"     => "Surabaya",
                "to"       => "Jakarta",
                "emoji"    => "🌟",
                "duration" => "12 Jam",
                "depart"   => "08:00 & 20:00",
                "harga"    => "Rp 185.000",
                "seats"    => "42 Kursi",
                "popular"  => true,
            ],
            [
                "from"     => "Surabaya",
                "to"       => "Yogyakarta",
                "emoji"    => "🏰",
                "duration" => "6 Jam",
                "depart"   => "07:00, 13:00 & 21:00",
                "harga"    => "Rp 95.000",
                "seats"    => "38 Kursi",
                "popular"  => false,
            ],
            [
                "from"     => "Jakarta",
                "to"       => "Bandung",
                "emoji"    => "🌺",
                "duration" => "3 Jam",
                "depart"   => "06:00, 10:00 & 15:00",
                "harga"    => "Rp 65.000",
                "seats"    => "40 Kursi",
                "popular"  => false,
            ],
            [
                "from"     => "Malang",
                "to"       => "Bali",
                "emoji"    => "🌴",
                "duration" => "8 Jam",
                "depart"   => "09:00 & 21:00",
                "harga"    => "Rp 145.000",
                "seats"    => "36 Kursi",
                "popular"  => true,
            ],
            [
                "from"     => "Surabaya",
                "to"       => "Semarang",
                "emoji"    => "🎋",
                "duration" => "5 Jam",
                "depart"   => "07:30, 12:00 & 19:00",
                "harga"    => "Rp 80.000",
                "seats"    => "42 Kursi",
                "popular"  => false,
            ],
            [
                "from"     => "Jakarta",
                "to"       => "Surabaya",
                "emoji"    => "✨",
                "duration" => "12 Jam",
                "depart"   => "07:00 & 19:00",
                "harga"    => "Rp 185.000",
                "seats"    => "42 Kursi",
                "popular"  => false,
            ],
        ];
    }
}
