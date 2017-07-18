
<?php
include_once 'db.php';
@mysql_connect(host,user,pwd);
mysql_select_db(database);
$res=mysql_query("select * from tour_detail");

?>

<?php
            echo "<table border='2'>";
            echo "<tr><td>name</td>,<td>RegNo</td>,<td>email</td>,<td>number</td>,<td>booking_id</td>,<td>vehical_type</td>,<td>From</td>,<td>To</td>,<td>start_date</td>,<td>end_date</td>,<td>startTime</td>,<td>terms_and_conditions</td></tr>";
            while($row=  mysql_fetch_array($res)){
            echo "<tr>";
            //echo "<td>".$row["prog_name"]."</td>"."<td>".$row["prog_course"]."</td>"."<td>".$row["prog_location"]."</td>"."<td>".$row["first_name"]."</td>"."<td>".$row["last_name"]."</td>"."<td>".$row["city"]."</td>"."<td>".$row["state"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row[""]."</td>"."<td>".$row["prog_name"]."</td>"."<td>".$row["prog_name"]."</td>"."<td>".$row["prog_name"]."</td>"."<td>".$row["prog_name"]."</td>"."<td>".$row["prog_name"]."</td>"."<td>".$row["prog_name"]."</td>";
                echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td>";
            echo "<tr>";}
            echo "</table>"
            ?>
?>