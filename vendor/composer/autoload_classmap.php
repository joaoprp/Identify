<?php

// autoload_classmap.php generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'CreateRolesTable' => $baseDir . '/src/migrations/2013_02_05_041219_create_roles_table.php',
    'CreateUserRolesTable' => $baseDir . '/src/migrations/2013_02_05_041254_create_user_roles_table.php',
    'CreateUsersTable' => $baseDir . '/src/migrations/2013_02_05_041153_create_users_table.php',
    'Regulus\\Identify\\Role' => $baseDir . '/src/models/Role.php',
    'Regulus\\Identify\\User' => $baseDir . '/src/models/User.php',
    'Regulus\\Identify\\UserRole' => $baseDir . '/src/models/UserRole.php',
    'RolesTableSeeder' => $baseDir . '/src/seeds/RolesTableSeeder.php',
    'UserRolesTableSeeder' => $baseDir . '/src/seeds/UserRolesTableSeeder.php',
    'UsersTableSeeder' => $baseDir . '/src/seeds/UsersTableSeeder.php',
);
