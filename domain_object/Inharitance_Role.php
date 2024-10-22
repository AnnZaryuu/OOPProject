<?php

class EmailUser {
    public $email;
    public $name;
    
    public function __construct($email, $name) {
        $this->email = $email;
        $this->name = $name;
    }
}

class Departement {
    public $Gaji;

    public function __construct($gaji) {
        $this->Gaji = $gaji;
    }
}

class Role extends Departement {
    public $role_id;
    public $role_name;
    public $role_description;
    public $role_status;
    public $email;  
    public function __construct($role_id, $role_name, $role_description, $role_status, $Gaji, EmailUser $emailUser) {
        parent::__construct($Gaji);  // Panggil konstruktor parent (Departement)
        $this->role_id = $role_id;
        $this->role_name = $role_name;
        $this->role_description = $role_description;
        $this->role_status = $role_status;
        $this->email = $emailUser;  // Simpan objek EmailUser
    }
}

class Model_role {
    private $roles = [];

    public function AddRole($name, $description, $status, EmailUser $emailUser) {
        $role_id = count($this->roles) + 1;
        $role = new Role($role_id, $name, $description, $status, 5000, $emailUser);  // Misalkan Gaji default 5000
        $this->roles[] = $role;
    }

    public function getRole() {
        return $this->roles;
    }
}
