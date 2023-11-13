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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $prior = mysqli_real_escape_string($conn, $_POST['prior']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $assigned = mysqli_real_escape_string($conn, $_POST['assigned']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $startDate = mysqli_real_escape_string($conn, $_POST['startDate']);
    // $endDate = mysqli_real_escape_string($conn, $_POST['endDate']);

    $endDate = isset($_POST['endDate']) ? mysqli_real_escape_string($conn, $_POST['endDate']) : null;

    $query = "INSERT INTO Taskor (name, description, priority, author, assigned, startDate, endDate) VALUES ('$name', '$desc', '$prior', '$author', '$assigned', '$startDate', '$endDate')";

    if (mysqli_query($conn, $query)) {
        echo "Dodano nowy wiersz do bazy danych!";
    } else {
        echo "Błąd: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
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
                <a class="nav-item nav-link active" href="index.php">Lista zadań <span class="sr-only"></span></a>
                <a class="nav-item nav-link" href="form.php">Dodaj zadanie</a>
                <a class="nav-item nav-link" href="#"></a>
                <a class="nav-item nav-link disabled" href="#"></a>
            </div>
        </div>
    </nav>
    

    <div class="container mt-3">

        <legend>Add New Position</legend>

        <form action="" method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameOfTask">
                <div id="nameOfTask" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <input type="text" class="form-control" id="desc" name="desc">
            </div>
            <div class="mb-3">
                <label for="prior" class="form-label">Priority</label>
                <input type="text" class="form-control" id="prior" name="prior">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="mb-3">
                <label for="assigned" class="form-label">Assinged</label>
                <input type="text" class="form-control" id="assigned" name="assigned">
            </div>
            <div class="mb-3">
                <label for="startDate" class="form-label">Start date</label>
                <input type="date" class="form-control" id="startDate" name="startDate">
            </div>
            <div class="mb-3">
                <label for="endDate" class="form-label">End date</label>
                <input type="date" class="form-control" id="endDate" name="endDate">
            </div>
<!-- 
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"></label>
            </div> -->

            <button name="addTask" type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>