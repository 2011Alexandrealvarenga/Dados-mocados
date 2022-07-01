<?php 
 $BASE_URL = "http://" . $_SERVER['SERVER_NAME'].':8080'. dirname($_SERVER["REQUEST_URI"].'?') . '/';$posts=[
    [
        'id' => 1,
        'title' => 'titulo 1',
        'description' => 'descrição 1',
        'img'=> '1.jpg',
        'tags' => ['tag1','tag2','tag3']

    ],
    [
        'id' => 2,
        'title' => 'titulo 2',
        'description' => 'descricao 2',
        'img'=>'2.jpg',
        'tags' => ['tag1','tag2','tag3']
    ]
];