<?php
    $tusach = [
        'mot' =>[
            'ten' => 'van hoc',
            'gia' => 12000
        ],
        'hai' => [
            'ten' => 'su hoc',
            'gia' => 12000
        ]
        ]; 
    
    // foreach(  $tusach as $key => $book){
    //     foreach($book as $k => $gt){
    //          echo '<br>'.$k.'-'.$gt ;
    //     }
    // }
    foreach ($tusach as $book){
        echo '<br>'.$book['ten'].'-'.$book['gia'];
    }
        


    echo '<pre>';
    print_r($tusach);
    echo '</pre>';



