<?php
require_once 'config.php'; // Ensure config.php is included

class fingerprint extends config {
    public function settings() {
        $ID = "";
        if (isset($_POST['fing_submit'])) {
            $_GET['fing_submit'];
        }
        $con = $this->con(); // Get the database connection
        $sql = "INSERT INTO db_autodoor.tbl_finger_add_req (tbl_finger_add_req.col_status) VALUES ('Pending')";
        $stmt = $con->prepare($sql);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo "<tr><td colspan='5'>Error: " . $e->getMessage() . "</td></tr>";
        }
    }
}
