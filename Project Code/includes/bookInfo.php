<?php
if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $bookName = mysqli_real_escape_string($conn, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($conn, $_POST['authorName']);
    $publisherName = mysqli_real_escape_string($conn, $_POST['publisherName']);
    $isbnNumber = mysqli_real_escape_string($conn, $_POST['isbnNumber']);
    $bookPrice = mysqli_real_escape_string($conn, $_POST['bookPrice']);
    $bookLanguage = mysqli_real_escape_string($conn, $_POST['bookLanguage']);

    $sql = "INSERT INTO bookinfo (BookName,AuthorName,PublisherName,ISBN,BookPrice,BookLanguage) VALUES ('$bookName','$authorName','$publisherName','$isbnNumber','$bookPrice','$bookLanguage')";
    mysqli_query($conn, $sql);
} else {
    echo 'not submitted';
}