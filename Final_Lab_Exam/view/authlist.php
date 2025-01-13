<?php
require_once('../model/usermodel.php');
$authors = getAllAuth(); 
?>
<html>
<head>
    <title>Author Information</title>
</head>
<body>
    <h1>Author Information</h1>
    <h3>Search Author</h3>
    <input type="text" class="form-control" name="search" id="search"  
                placeholder="Search.." onkeyup="ajax()"/>
    <div id="searchResults"></div>
    <table border="1" style="width: 80%; margin: auto; text-align: center;">
        <tr>
            
            <th>Author Name</th>
            <th>Phone</th>
            <th>Author Username</th>
            <th>Paswword</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($authors as $author) { ?>
        <tr>
            <td><?= $author['authname'] ?></td>
            
            <td><?= $author['authphone'] ?></td>
            <td><?= $author['authusername'] ?></td>
            <td><?= $author['authpassword'] ?></td>
            <td>
                <a href="update.php?id=<?= $author['id'] ?>">Update</a> | 
                <a href="../controller/delete.php?id=<?= $author['id'] ?>" >Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div align="center" style="margin-top: 20px;">
    <a href="../controller/logout.php"><button>Logout</button></a>
    <a href="./dashboard.php"><button>Back</button></a>
    </div>

    <script>
        function ajax() {
        let search = document.getElementById('search').value;
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../controller/search.php?keyword=' + search, true); 
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById('searchResults').innerHTML = this.responseText;
            }
        }
    }
   
    </script>
</body>
</html>
