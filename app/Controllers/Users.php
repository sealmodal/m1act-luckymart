<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function users()
    {
        $data['staff'] = [
            "staff1" => [
                "name" => "Kim Soleum",
                "username" => "norugrapes",
                "role" => "Cashier"
            ],
            "staff2" => [
                "name" => "Go Yongeun",
                "username" => "mintgoral",
                "role" => "Cashier"
            ],
            "staff3" => [
                "name" => "Ryu Jaekwan",
                "username" => "bronzeee",
                "role" => "Inventory"
            ],
            "staff4" => [
                "name" => "Choi Yowon",
                "username" => "lookychoi",
                "role" => "Manager"
            ],
            "staff5" => [
                "name" => "Lee Kangheon",
                "username" => "hawaiib53",
                "role" => "Administrator"
            ]
        ];
        return view('userlist', $data);
    }
}
