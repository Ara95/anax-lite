<?php
/**
 * Config file for Database.
 *
 * Example for MySQL.
 *  "dsn" => "mysql:host=localhost;dbname=test;",
 *  "username" => "test",
 *  "password" => "test",
 *  "driver_options"  => [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
 *
 * Example for SQLite.
 *  "dsn" => "sqlite:memory::",
 *
 */

 /**
  * Config file for Database.
  *
  * Example for MySQL.
  *  "dsn" => "mysql:host=localhost;dbname=test;",
  *  "username" => "test",
  *  "password" => "test",
  *  "driver_options"  => [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
  *
  * Example for SQLite.
  *  "dsn" => "sqlite:memory::",
  *
  */


/**
 * Config file for Database.
 */
// return [
//     "dsn"             => "mysql:host=localhost;dbname=skolan;",
//     "username"        => "root",
//     "password"        => "",
//     "driver_options"  => array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"),
//     "fetch_mode"      => \PDO::FETCH_OBJ,
//     "table_prefix"    => null,
//     "session_key"     => "Anax\Database",
//     "verbose"         => null,
//     "debug_connect"   => false,
// ];


return [
    "dsn" => "mysql:host=blu-ray.student.bth.se;dbname=arno16",
    "username"        => "arno16",
    "password"        => "WDYQqHR5AvFd",
    "driver_options"  => [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
    "fetch_mode"      => \PDO::FETCH_OBJ,
    // "table_prefix"    => null,
    // "session_key"     => "Anax\Database",
    // // True to be very verbose during development
    // "verbose"         => null,
    // // True to be verbose on connection failed
    // "debug_connect"   => false,
];
