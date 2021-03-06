<?php
namespace Ara\Connect;

use \PDO;

class Connect
{
    protected $db;

    public function __construct()
    {
        // $databaseConfig = [
        //     "dsn"      => "mysql:host=localhost;dbname=skolan;",
        //     "login"    => "root",
        //     "password" => "",
        //     "options"  => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
        // ];


        $databaseConfig = [
            "dsn"      => "mysql:host=blu-ray.student.bth.se;dbname=arno16",
            "login"    => "arno16",
            "password" => "WDYQqHR5AvFd",
            "options"  => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
        ];
        try {
            $db = new PDO(...array_values($databaseConfig));
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db = $db;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            throw new PDOException("Could not connect to database, hiding details.");
        }
    }

        /**
     * Do INSERT/UPDATE/DELETE with optional parameters.
     *
     * @param string $sql   statement to execute
     * @param array  $param to match ? in statement
     *
     * @return PDOStatement
     */
    public function execute($sql, $param = [])
    {
        $sth = $this->db->prepare($sql);
        if (!$sth) {
            $this->statementException($sth, $sql, $param);
        }
        $status = $sth->execute($param);
        if (!$status) {
            $this->statementException($sth, $sql, $param);
        }
        return $sth;
    }

    public function addUser($user, $pass, $authority)
    {
        $stmt = $this->db->prepare("INSERT into users (name, pass, authority) VALUES ('$user', '$pass', '$authority')");
        $stmt->execute();
    }


    public function getAllRes($sql)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }


    public function getRes($sql)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res;
    }


    public function getHash($user)
    {
        $stmt = $this->db->prepare("SELECT pass FROM users WHERE name='$user'");
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res["pass"];
    }

    public function getInfo($user)
    {
        $stmt = $this->db->prepare("SELECT info, email, authority FROM users WHERE name='$user'");
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        $returnValue = [$res["info"], $res["email"], $res["authority"]];
        return $returnValue;
    }

    public function edit($params, $user)
    {
        // Prepare SQL statement to UPDATE a row in the table
        $stmt = $this->db->prepare("UPDATE users SET info = ?, email = ? WHERE name='$user'");
        // Execute the SQL to Update
        $stmt->execute($params);
    }

    public function changePassword($user, $pass)
    {
        $stmt = $this->db->prepare("UPDATE users SET pass='$pass' WHERE name='$user'");
        $stmt->execute();
    }

    public function changePasswordId($id, $pass)
    {
        $stmt = $this->db->prepare("UPDATE users SET pass='$pass' WHERE id='$id'");
        $stmt->execute();
    }


    public function exists($user)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE name='$user'");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return !$row ? false : true;
    }
}
