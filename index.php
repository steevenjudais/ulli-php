<?php
$studens = array(
    array(
        'id' => 1,
        'firstname' => 'John',
        'lastname' => 'Doe',
        'email' => 'john@doe.com',
    ),
    array(
        'id' => 2,
        'firstname' => 'Pierre',
        'lastname' => 'Durand',
        'email' => 'pierre@durand.com',
    ),
);

//array_walk_recursive($studens, function ($item, $key) {
  //  echo "$key holds $item\n";
//});

foreach ($studens as $row) {
    echo '<li>'.$row['firstname'].',';
    echo $row['lastname'];
    echo '('.$row['email'].')</li>';}

?>
