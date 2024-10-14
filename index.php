<?php
require_once 'domain_object/node_role.php';

$obj_role = [];

$obj_role[] = new Role( role_id: 1, role_name: "Artist", role_description: "dibuat untuk Pembuat Ilustratos", role_status: 1);
$obj_role[] = new Role( role_id: 1, role_name: "Developerr", role_description: "dibuat untuk progammer", role_status: 1);
$obj_role[] = new Role( role_id: 1, role_name: "Kurir", role_description: "dibuat untuk Drivers", role_status: 1);

include 'view/role_list.php';

