<?php
require_once('../model/usermodel.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];  
    $author = getAuthor($id);
} else {
    echo "No user ID specified.";
    exit;
}

if (isset($_REQUEST['submit'])) {
    //$id = $_POST['id'];
    $authname= $_REQUEST['authname'];
    $authphone=$_REQUEST['authphone'];
    $authusername = $_POST['authusername'];
    $authpassword = $_POST['authpassword'];

    if (updateAuth($id, $authname,$authphone,$authusername, $authpassword)) {
        header("Location: authlist.php");
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
    <title>Update authloyee Information</title>
</head>
<script>
        
        function validateForm() {
            let authname = document.getElementById("authname").value.trim();
            let authphone = document.getElementById("authphone").value.trim();
            let authusername = document.getElementById("authusername").value.trim();
            let authpassword = document.getElementById("authpassword").value.trim();

            if (!authname) {
                alert("author Name cannot be empty.");
                return false;
            }

            if (!authphone) {
                alert("Phone cannot be empty.");
                return false;
            }

            if (!/^[0-9]{10}$/.test(authphone)) {
                alert("Invalid phone number. Please enter a valid 10-digit number.");
                return false;
            }

            if (!authusername) {
                alert("Username cannot be empty.");
                return false;
            }

            if (!authpassword) {
                alert("Password cannot be empty.");
                return false;
            }

            return true; 
        }
    </script>
<body>
    <h1>Update Information of Author "<?=$author['authusername']?>"</h1>
    <form method="POST" action="update.php?id=<?= $id ?>">
    <label for="authname">Author Name:</label>
    <input type="text" id="authname" name="authname" value="<?= $author['authname'] ?>" required>
    <br>
    
    <label for="phone">Phone:</label>
    <input type="text" id="authphone" name="authphone" value="<?= $author['authphone'] ?>" required>
    <br>
    <label for="authusername">author Username:</label>
    <input type="text" id="authusername" name="authusername" value="<?= $author['authusername'] ?>" required>
    <br>
    <label for="authpassword">Password:</label>
    <input type="password" id="authpassword" name="authpassword" value="<?= $author['authpassword'] ?>" required>
    <br>
    
    <input type="submit" name="submit" value="Update">
    <a href="authlist.php">Back</a>
</form>

</body>
</html>
