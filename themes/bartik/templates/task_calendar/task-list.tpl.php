<?php
    if($data){

        echo "<table>";
        echo "<tr><th>SL.No</th><th>Task Description</th><th>Task Date</th><th>Status</th><th>Created At</th></tr>";

        $sl_no = 1;
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>".$sl_no++."</td>";
            echo "<td>".$row->task_description."</td>";
            echo "<td>".$row->task_date."</td>";
            echo "<td>".$row->status."</td>";
            echo "<td>".$row->created_at."</td>";
            echo "</tr>";
        }

        echo "</table>";

    }
    else{
        echo "No Records";
    }

?>
