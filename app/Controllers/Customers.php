<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function customers()
    {
        $data['customers'] = [
            "cust1" => [
                "name" => "Braun Smith",
                "email" => "braun@tuetalk.der",
                "phone" => "0123456789"
            ],
            "cust2" => [
                "name" => "Park Baekho",
                "email" => "pbaekho@sdmb.der",
                "phone" => "8212345678"
            ],
            "cust3" => [
                "name" => "Park Jeongcheol",
                "email" => "namhaejc@daydream.der",
                "phone" => "8298765432"
            ],
            "cust4" => [
                "name" => "Lee Seokjong",
                "email" => "locust@daydream.der",
                "phone" => "8232198765"
            ],
            "cust5" => [
                "name" => "Kang Dojun",
                "email" => "leopard@daydream.der",
                "phone" => "8265498712"
            ]
        ];
        return view('customerlist', $data);
    }
}
