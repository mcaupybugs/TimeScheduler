<?php
require "db.php";
?>
<?php
require "header.php";
?>


<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if (isset($_POST['submit'])) {
        $subject = $_POST['subject'];
        $link = $_POST['link'];
        $time = $_SESSION['time'];
        $addQuery = "INSERT INTO book (book_name,address,user_id) VALUES ('$book_name','$address','$user_id')";
        $rr = mysqli_query($connection, $addQuery);
        if (!$rr) {
            header("Location:addBook.php");
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
            <form>
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
                    <input type="text" placeholder="10:22" class="form-control" id="exampleFormControlSelect2">
                </div>
                <button class="btn btn-dark" value="submit">Submit</button>
            </form>
        </div>
    </div>
</body>