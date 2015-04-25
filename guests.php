<?php 
    $user = markandmichelle;
    $pass = 133528THave.;
    $db = new PDO( 'mysql:host=localhost;dbname=markandmichelle', $user, $pass );
    $sql = "SELECT * FROM users";
    $query = $db->prepare( $sql );
    $query->execute();
    $results = $query->fetchAll( PDO::FETCH_ASSOC );

    foreach( $results as $row ){
      print_r( $row );
    }