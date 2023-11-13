
<?php 


$servername = "localhost";
$port = 8889;
$username = "root";
$password = "root";
$database = "Taskor";

// Tworzenie połączenia
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Sprawdzenie połączenia
if (!$conn) {
    die("Nie udało się połączyć z bazą danych: " . mysqli_connect_error());
} else {
    echo "Połączono z bazą danych!";
}

$query =
"SELECT * FROM Taskor
";

//      try 
// {
//     $conn
// }
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Taskor</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-2" href="">Taskar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Lista zadań <span class="sr-only"></span></a>
                <a class="nav-item nav-link" href="form.php">Dodaj zadanie</a>
                <a class="nav-item nav-link" href="#"></a>
                <a class="nav-item nav-link disabled" href="#"></a>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Author</th>
                    <th scope="col">Assigned</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr> -->

                        <?php 
        while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // echo "<th scope='row'>"1"</th>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Description"] . "</td>";
        echo "<td>" . $row["Priority"] . "</td>";
        echo "<td>" . $row["Author"] . "</td>";
        echo "<td>" . $row["Assigned"] . "</td>";
        echo "<td>" . $row["StartDate"] . "</td>";
        echo "<td>" . $row["EndDate"] . "</td>";
        echo "</tr>";

        }
        mysqli_close($conn);

        ?>
            </tbody>
        </table>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
