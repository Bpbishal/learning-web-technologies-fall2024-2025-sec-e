<?php
require_once('../model/usermodel.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];  // Fetching the id from the URL
    $user = getUser($id);
} else {
    echo "No user ID specified.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (updateUser($id, $username, $password, $email)) {
        header("Location: userinfo.php");
        exit;
    } else {
        echo "Error: Could not update user.";
    }
}

// if (isset($_REQUEST['id'])) {
//     $id = $_REQUEST['id'];
//     $user = getUser($id);
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User Information</title>
</head>
<body>
    <h1>Update Information of user "<?=$user['username']?>"</h1>
    <form method="POST" action="update.php?id=<?= $id ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?= $user['username'] ?>" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?= $user['password'] ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $user['email'] ?>" required>
    <br>
    <input type="submit" value="Update">
</form>

</body>
</html>
