<?php
    $persons = [
        [
            'name'=>'Khaled',
            'age'=>23,
            'gender'=> 'male'
        ],
        [
            'name'=>'Ahmed',
            'age'=>20,
            'gender'=> 'male'
        ],
        [
            'name'=>'Eman',
            'age'=>24,
            'gender'=> 'female'
        ]
    ];


    foreach ($persons as $person) {
        foreach ($person as $key => $info) {
            print $key . ': '.$info;
            print "<br>";
        }
        print "<hr>";
    }