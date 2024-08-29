<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the device type information sent from the client
    $isMobileDevice = $_POST["isMobileDevice"];
    $isTabletDevice = $_POST["isTabletDevice"];

    echo "hello";

    // Check if the user is using a mobile or tablet device
    if ($isMobileDevice) {
        echo "Login from a Mobile Device";
    } elseif ($isTabletDevice) {
        echo "Login from a Tablet Device";
    } else {
        echo "Login from a Desktop or Laptop";
    }
}
?>
