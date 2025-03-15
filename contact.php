<?php

$contacts =[];


function addContact( &$contacts, $name, $phone, $email, $address) {
    global $contact;
    $contact[] = [
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'address' => $address
    ];
}

while(true){
    echo "1. Add Contact\n";
    echo "2. Show Contact\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
    $choice = readline();

    if($choice == 1){
        echo "Enter name: ";
        $name = readline();
        echo "Enter phone: ";
        $phone = readline();
        echo "Enter email: ";
        $email = readline();
        echo "Enter address: ";
        $address = readline();
        addContact($contact, $name, $phone, $email, $address);
    }elseif($choice == 2){
        echo "No contact available\n";
        foreach($contacts as $contact){
            echo "Name: ".$contact['name']."\n";
            echo "Phone: ".$contact['phone']."\n";
            echo "Email: ".$contact['email']."\n";
            echo "Address: ".$contact['address']."\n";
        }
    }elseif($choice == 3){
        break;
    }else{
        echo "Invalid choice\n";
    }
}