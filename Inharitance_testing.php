<?php

require_once 'Model\Inharitance_model.php';

echo "=== TESTING COMPOSITE MODEL ===<br>";


$roleModel = new RoleModel();

// Menambahkan role utama dengan gaji
$roleModel->tambahRole(1, "Manager", "Mengelola tim", 1, 5000);
$roleModel->tambahRole(2, "Team Leader", "Memimpin tim", 1, 4000);

// Menambahkan sub-role
$roleModel->addSubRole(1, new Role(3, "Developer", "Mengembangkan aplikasi", 1));
$roleModel->addSubRole(1, new Role(4, "Designer", "Mendesain antarmuka", 1));


echo "<strong>Daftar Role:</strong><br>";
foreach ($roleModel->getAllRoles() as $role) {
    $role->displayDetails();
}
