<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Statyczne funkcje oraz praktyczny przykład poznanych wiadomości - by Arkadiusz Włodarczyk - videokurs.pl</title>

    </head>
    <body>
    <?php


$servername = "localhost";
$port = 8888;
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

// $query = "
// ";

// try 
// {
//     $conn
// }
// $result = mysqli_query($conn, $query);


// Zamknięcie połączenia
mysqli_close($conn);
?>
    </body>
</html>

