<!DOCTYPE html>
<html lang="en">
<?php
require "db.php";
?>
<?php
require "header.php";
?>


<?php

if (!isset($_SESSION["loggedin"])) {
    header("location: index.php");
    exit;
}

$db_id = $_SESSION['userid'];


$query = "SELECT * FROM links;";
$result = mysqli_query($connection, $query);

?>

<body style="background-color: teal;">

    <div class="container" style="margin-top:100px">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">User Owning</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_row($result)) {
                ?>
                    <tr>

                        <th scope="row"><?php print_r($row[0]) ?></th>
                        <td><?php print_r($row[1]) ?></td>
                        <td><?php print_r($row[2]) ?></td>
                        <td><?php print_r($row[3]) ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>