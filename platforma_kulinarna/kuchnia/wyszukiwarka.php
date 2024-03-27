<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<header>
    <nav>
        <a href="strona1.html">Przepisy</a>
        <a href="wyszukiwarka.html">Wyszukiwarka</a>
    </nav>
</header>
<body>
    <div class="container">
        <h1>Wyszukiwarka Przepisów</h1>
        <form action="#" method="GET">
            <input type="text" name="search_query" placeholder="Wyszukaj przepis...">
            <br>
            <label for="Cuisines">Kuchnie:</label>
            <select id="Cuisines" name="Cuisines">
            </select>
            <label for="recipe-category">Kategoria:</label>
                <select id="recipe-category" name="category">
                </select>
            <br>
            <label for="date">Data:</label> 
            <input type="date" id="date" name="date"> 
            <label for="rating">Ocena</label>
                <select id="rating" name="rating">
                </select>
            <br>
            <input type="submit" name="submit" value="Szukaj">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Platforma Przepisów Kulinarnych</p>
    </footer>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kuchnia1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
    }

    $search_query = $_GET['search_query'] ?? '';
    $cuisine = $_GET['Cuisines'] ?? '';
    $category = $_GET['category'] ?? '';
    $date = $_GET['date'] ?? '';
    $rating = $_GET['rating'] ?? '';

    $sql = "SELECT * FROM kuchnia1 WHERE nazwa LIKE '%$search_query%'";

    if (!empty($cuisine)) {
        $sql .= " AND kuchnia = '$cuisine'";
    }

    if (!empty($category)) {
        $sql .= " AND kategoria = '$category'";
    }

    if (!empty($date)) {
        $sql .= " AND data = '$date'";
    }

    if (!empty($rating)) {
        $sql .= " AND ocena = '$rating'";
    }

    $result = $conn->query($sql);

    if ($result === false) {
        die("Błąd zapytania: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["nazwa"] . "</h2>";
            echo "<p>Kuchnia: " . $row["kuchnie"] . "</p>";
            echo "<p>Kategoria: " . $row["kategoria"] . "</p>";
            echo "<p>Data: " . $row["data"] . "</p>";
            echo "<p>Ocena: " . $row["ocena"] . "</p>";
            echo "<p>Instrukcje: " . $row["instrukcje"] . "</p>";
        }
    } else {
        echo "Brak wyników spełniających kryteria wyszukiwania.";
    }

    $conn->close();
    ?>

</body>
</html>