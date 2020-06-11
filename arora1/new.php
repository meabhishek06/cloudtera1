

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Bookings</title>
        <style>
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }

            th,
            td {
                text-align: left;
                padding: 16px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2
            }

        </style>
		
    </head>

    <body>


        <h2>Total Bookings</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Date</th>
                <th>Strating</th>
                <th>Destination</th>
                <th>Vehicle</th> 
            </tr>


            <?php
     $con=mysqli_connect("localhost","root","","mytransport") or die(mysql_error());
     

                    $sql = "SELECT * FROM register ";
                    $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo    '
                                      <tr>
                                      <td>'.$row["name"].'</td>
                                      <td>'.$row["mobile"].'</td>
                                      <td>'.$row["date"].'</td>
									  <td>'.$row["start"].'</td>
                                      <td>'.$row["destination"].'</td>
                                      <td>'.$row["vehicle"].'</td>
                                      
                                      </tr>';
                                }
                        } else {
                            echo "";
                        }


             
                        ?>


        </table>


    </body>

    </html>
