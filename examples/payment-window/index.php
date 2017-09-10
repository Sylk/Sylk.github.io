<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <link href="/favicon.ico" rel="shortcut icon">

    <!-- link all the styles -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:700|Permanent+Marker|Chango|Sonsie+One" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/uikit.min.css" />
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <link rel="stylesheet" href="assets/css/compiled-scss.css">

    <!-- link all the scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="uk-container uk-container-center uk-text-center">
        <div class="uk-grid">
            <div class="uk-width-10-10">
                <div class="lava-header-container">
                    <div class="lava-header-text">Quigg Pay</div>
                </div>
            </div>
            <table class="uk-table uk-width-10-10">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Debit</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>Oil Shit</td>
                        <td>541 652 487</td> :: A map to get you by
                        <td>1569.02</td>
                    </tr> -->
                    <?php
                    $servername = "localhost";
                    $username = "slothlor_admin";
                    $password = "SHARKMASTER69kek";
                    $dbname = "slothlor_lavaconcept";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                         die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT id, date, company, amount FROM paymentTable"; //need to add an order by column here and set it to date
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                         // output data of each row
                         while($row = $result->fetch_assoc()) {
                             echo "<tr>
                                    <td>". $row["date"]. "</td>
                                    <td>". $row["company"]. "</td>
                                    <td>". $row["amount"]. "</td>
                                  </tr>";
                            //  echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["email"] . "<br>";
                         }
                    } else {
                         echo "0 results";
                    }

                    $conn->close();
                    ?>
                    <tr>
                        <td>Oil Shit</td>
                        <td>541 652 487</td>
                        <td>1569.02</td>
                    </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td></td>
                    <?php
                    $result = mysql_query('SELECT SUM(amount) AS amount_sum FROM paymentTable');
                    $row = mysql_fetch_assoc($result);
                    $sum = $row['value_sum'];
                    echo "<td>Total: ". $sum ."</td>"
                    ?>
                  </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>
