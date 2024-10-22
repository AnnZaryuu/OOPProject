<?php

// Aggregation
class EmailUser {
    public $email;
    public $userName;
    
    public function __construct($email, $userName) { 
        $this->email = $email; 
        $this->userName = $userName;
    }
}


class Role {
    public $role_id;
    public $role_name;
    public $role_description;
    public $role_status;
    public $email;
    
    public function __construct($role_id, $role_name, $role_description, $role_status, EmailUser $email_user) {
        $this->role_id = $role_id;
        $this->role_name = $role_name;
        $this->role_description = $role_description;
        $this->role_status = $role_status;
        $this->email = $email_user;
    }
}
