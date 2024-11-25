<?php
require_once 'config.php'; // Ensure config.php is included

class viewLog extends config {
    public function viewLog() {
        $con = $this->con(); // Get the database connection
        $sql = "SELECT col_log_id, col_timestamp, col_action, col_method, col_door_state, col_profile_id FROM tbl_logs ORDER BY col_timestamp DESC";
        $stmt = $con->prepare($sql);

        try {
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                        <td>{$row['col_log_id']}</td>
                        <td>{$row['col_timestamp']}</td>
                        <td>{$row['col_action']}</td>
                        <td>{$row['col_method']}</td>
                        <td>{$row['col_door_state']}</td>
                        <td>{$row['col_profile_id']}</td>
                      </tr>";
            }
        } catch (PDOException $e) {
            echo "<tr><td colspan='5'>Error: " . $e->getMessage() . "</td></tr>";
        }
    }
}
