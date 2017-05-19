<?php
$admin = $app->admin;
echo "<div class='edit-container'>";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_POST['delete'])) {

    if ($_POST['deleteTyped'] == "delete") {
        $admin->deleteUser($id);
        header("Location: $usersLink");
    } else {
        echo "<p class='warning'>Please type 'delete' to delete profile</p>";
    }
}

if (isset($_POST['save'])) {

    $info = htmlentities($_POST['info']);
    $email = htmlentities($_POST['email']);
    $authority = htmlentities($_POST['authority']);
    $params = [$info, $email, $authority];

    $admin->editUser($params, $id);
    echo "<p class='success'>You updated the details!</p>";
}

if (isset($_POST['changePass'])) {
    $new_pass = isset($_POST["new_pass"]) ? htmlentities($_POST["new_pass"]) : null;
    if (empty($new_pass)) {
        echo "<p class='warning'>$new_pass Fail! Input was either 0, empty, or not set at all</p>";
    } else {
        $crypt_pass = password_hash($new_pass, PASSWORD_DEFAULT);
        $admin->changePasswordId($id, $crypt_pass);
        echo "<p class='success'>Password changed to $new_pass</p>";
    }
}

$admin->setUser($id);
?>
</div></div></div>
