

<?php


function openMaBase(){
    $mysqli = new mysqli('localhost', 'root', 'root', 'vente');
    if (mysqli_connect_errno()){
        printf("Echec de la connex: %s\n", mysqli_connect_error());
        exit();
    }

    return $mysqli;
}


function closeMaBase($mysqli){
    $mysqli->close();
}

function inserProduct($mysqli, $id, $label, $description){
    $req = $mysqli->query("INSERT INTO Products(label, description) VALUES('$label', '$description'); ");
}

function inserProvider($mysqli, $id, $label){
    $req = $mysqli->query("INSERT INTO Providers(label) VALUES('$label');");
}

function inserCustomer($mysqli, $id, $email, $street, $zipCode, $city, $country){
    $req = $mysqli->query("INSERT INTO Customers(email, street, zipCode, city, country) VALUES ('$email','$street','$zipCpde', '$city', '$country');");
}

/*
function inserDelivery($mysqli, $id, $providerId, $satus, $orderedAt, $deliveredAt, $totalPrice){
    $req = $mysqli->query("INSERT INTO Delivery(status, orderedAt, deliveredAt, totalPrice) VALUES ('$status','','') ")
}   

function inserOrder($mysqli, $id, $custmerId, $status, $paidAt, $deliveredAt, $totalPrice ){

}

*/























?>









