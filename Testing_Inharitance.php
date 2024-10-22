<?php
require_once 'domain_object\Inharitance_Role.php';

$emailUser = new EmailUser('anjar@example.com', 'Anjar L');


$obj_role = new Model_role();
$obj_role->AddRole('Anjar', 'Mahasiswa', 1, $emailUser);
$obj_role->AddRole('Jack O Daniel', 'Miner', 1, new EmailUser('jack@example.com', 'Jack O'));

foreach ($obj_role->getRole() as $Role){
    echo "Role id : " . $Role->role_id . "<br>";
}
