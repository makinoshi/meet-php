<?php

function create_dishes($db) {
    return $db->exec("create table if not exists dishes (" .
                     " dish_id int," .
                     " dish_name varchar(255)," .
                     " price decimal(4,2)," .
                     " is_spicy int" .
                     ")");
}

function add_dish($db, array $a) {
    $st = $db->prepare('insert into dishes' .
                       ' (dish_name, price, is_spicy)' .
                       ' values (?,?,?)');
    $st->execute([$a['dish_name'], $a['price'], $a['is_spicy']]);
}

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=meetphp', 'beginner', 'foofoofoo');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print "Connection established";
    create_dishes($db);

    $data = ['dish_name' => 'beaf', 'price' => 10, 'is_spicy' => 1];
    add_dish($db, $data);
} catch (PDOException $e) {
    print "Couldn't connect to the DB: " . $e->getMessage();
}
