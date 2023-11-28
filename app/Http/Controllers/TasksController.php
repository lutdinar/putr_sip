<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //

    public function testing(Request $request)
    {
        $sessions   = $request->session()->all();
        echo json_encode($sessions);
    }

    public function get_roads(Request $request)
    {
        return response()->json([
            'data'  => [
                [
                    "id"        => 1,
                    "code"      => "AB",
                    "name"      => "Prabu Geusan Ulun",
                    "type"      => "road",
                    "length"    => "2.4",
                    "width"     => "1.2",
                    "task"      =>
                        [
                            [
                                "id"            => 10,
                                "year"          => 2023,
                                "type"          => "perencanaan",
                                "consultant"    => [
                                    "id"        => 1,
                                    "name"      => "IM Creative"
                                ]
                            ]
                        ]
                ],
                [
                    "id"    => 2,
                    "code"  => "KA",
                    "name"  => "R.A. Kartini",
                    "type"      => "road",
                    "length"    => "2.4",
                    "width"     => "1.2",
                    "task"  =>
                        [
                            [
                                "id"            => 19,
                                "year"          => 2023,
                                "type"          => "perencana",
                                "consultant"    => [
                                    "id"        => 2,
                                    "name"      => "Saung Galih"
                                ]
                            ],
                            [
                                "id"            => 29,
                                "year"          => 2023,
                                "type"          => "pengawas",
                                "consultant"    => [
                                    "id"        => 2,
                                    "name"      => "Sinar Jaya"
                                ]
                            ],
                            [
                                "id"            => 30,
                                "year"          => 2023,
                                "type"          => "konstruksi",
                                "consultant"    => [
                                    "id"        => 2,
                                    "name"      => "PT. JGI"
                                ]
                            ]
                        ]
                ]
            ],
            'year'  => $request->query('year')
        ]);
    }

    public function get_report_by_days()
    {
        return response()->json([
            'data'  => [
                [
                    "id" => 1,
                    "cat_image" => "product-1.png",
                    "categories" => "Smart Phone",
                    "category_detail" => "Choose from wide range of smartphones from popular brands",
                    "total_earnings" => "$99129",
                    "total_products" => 1947
                ],
                [
                    "id" => 2,
      "cat_image" => "product-2.png",
      "categories" => "Electronics",
      "category_detail" => "Choose from wide range of electronics from popular brands",
      "total_earnings" => "$2512.50",
      "total_products" => 7283
                ],
                [
                    "id" => 3,
      "cat_image" => "product-3.png",
      "categories" => "Clocks",
      "category_detail" => "Choose from wide range of clocks from popular brands",
      "total_earnings" => "$1612.34",
      "total_products" => 2954
                ],
            ]
        ]);
    }
}
