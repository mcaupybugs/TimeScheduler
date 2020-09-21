<?php
require "db.php";
?>
<?php
require "header.php";
?>


<?php
$result = '';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if (isset($_POST['submit'])) {

        $subject = $_POST['subject'];
        $link = $_POST['link'];
        $time = $_POST['time'];
        $addQuery = "INSERT INTO links (subject,link,time) VALUES ('$subject','$link','$time')";
        $rr = mysqli_query($connection, $addQuery);
        if (!$rr) {
            header("Location:addLink.php");
        } else {
            header("Location:index.php");
        }
    }
} else {
    $result = "Login First!!";
    header('location: login.php');
    exit;
}

?>

<body style="background-color: teal;">
    <div class="container" style="margin-top:100px;">
        <div>
            <form action="addLink.php" method="POST">
                <?php
                echo $result;
                ?>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Link</label>
                    <input type="text" name="link" class="form-control" id="exampleFormControlSelect1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Time</label>
                    <input type="text" placeholder="10:22" name="time" class="form-control" id="exampleFormControlSelect2">
                </div>
                <button class="btn btn-dark" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
</body>