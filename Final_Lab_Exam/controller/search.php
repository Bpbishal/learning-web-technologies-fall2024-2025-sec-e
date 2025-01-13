<?php
require_once('../model/usermodel.php');
if (isset($_GET['keyword'])) {
    $search = $_GET['keyword'];
    $authors = searchAuth($search); // Use your `searchAuth` function
    if (!empty($authors)) {
        echo '<table border="1" style="width: 80%; margin: auto; text-align: center;">';
        echo '<tr>
                <th>Author Name</th>
                <th>Phone</th>
                <th>Author Username</th>
                <th>Password</th>
                <th>Actions</th>
              </tr>';
        foreach ($authors as $author) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($author['authname']) . '</td>';
            echo '<td>' . htmlspecialchars($author['authphone']) . '</td>';
            echo '<td>' . htmlspecialchars($author['authusername']) . '</td>';
            echo '<td>' . htmlspecialchars($author['authpassword']) . '</td>';
            echo '<td>
                    <a href="update.php?id=' . $author['id'] . '">Update</a> | 
                    <a href="../controller/delete.php?id=' . $author['id'] . '">Delete</a>
                  </td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>No authors found.</p>';
    }
} else {
    echo '<p>Invalid search query.</p>';
}
?>
