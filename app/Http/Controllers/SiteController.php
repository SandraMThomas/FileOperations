<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $students = [];

        if (($open = fopen(storage_path() . "/sample1.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $students[] = $data;
            }

            fclose($open);
        }

        echo "<pre>";
        $lenofarray = sizeof($students);
        for($i=1;$i<$lenofarray;$i++){
            $students[$i][3] = $students[$i][3]+100;

            foreach ($students[$i] as $value) {
                echo $value;
            }
        }
        $fp = fopen('C:\Users\sukee\PhpstormProjects\fileread\storage\sample1.csv', 'w');


        foreach ($students as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);



    }
}
