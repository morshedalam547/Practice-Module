<?php

$contacts = [1];
function addContact( &$contacts, $name, $phone, $email, $address) {
    global $contacts;
    $contacts[] = [
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'address' => $address
    ];
}
if($choice == 1){
    $name = readline("Enter name:");
    $phone = readline("Enter phone:");
    $email = readline("Enter email:");
    $address = readline("Enter address:");
    
    addContact($contacts, $name, $phone, $email, $address);}elseif($choice == 2){
    foreach($contacts as $contact){
        echo "Name: ".$contact['name']."\n";
        echo "Phone: ".$contact['phone']."\n";
        echo "Email: ".$contact['email']."\n";
        echo "Address: ".$contact['address']."\n";
    }}elseif($choice == 3){
    }