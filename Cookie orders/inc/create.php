<?php // Filename: connect.inc.php
require 'db_connect.php';
require 'functions.php';
require 'config.php';

$error_bucket = [];
$first = null;
$last = null;
$house = null;
$flavor = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // First insure that all required fields are filled in
    if (empty($_POST['first'])) {
        array_push($error_bucket, "<p>A first name is required.</p>");
    } else {
        $first = $_POST['first'];
    }
    if (empty($_POST['last'])) {
        array_push($error_bucket, "<p>A last name is required.</p>");
    } else {
        $last = $_POST['last'];
    }
    if (empty($_POST['house'])) {
        array_push($error_bucket, "<p>A house number is required.</p>");
    } else {
        $house = $_POST['house'];
    }
    if (empty($_POST['flavor'])) {
        array_push($error_bucket, "<p>A flavor is required.</p>");
    } else {
        $flavor = $_POST['flavor'];
    }

    // If we have no errors than we can try and insert the data
    if (count($error_bucket) == 0) {
        // Time for some SQL
        $sql = "INSERT INTO $db_table (first, last, house, flavor)";
        $sql .= "VALUES (:first,:last,:house,:flavor)";
        $stmt = $db->prepare($sql);
        $stmt->execute(["first" => $first, "last" => $last, "house" => $house, "flavor" => $flavor]);
    } else {
        display_error_bucket($error_bucket);
    }
}
