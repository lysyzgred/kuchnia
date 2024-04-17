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
        <a href="strona1.php">Przepisy</a>
        <a href="wyszukiwarka.php">Wyszukiwarka</a>
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
            <option value="kuchnia_włoska">włoska</option>
                    <option value="kuchnia_polska">polska</option>
                    <option value="kuchnia_japońska">japońska</option>
                    <option value="kuchnia_chińska">chińska</option>
                    <option value="kuchnia_niemiecka">niemiecka</option>
                    <option value="kuchnia_hiszpańska">hiszpańska</option>
                    <option value="kuchnia_francuska">francuska</option>
                    <option value="kuchnia_wietnamska">wietnamska</option>
                    <option value="kuchnia_czeska">czeska</option>
                    <option value="kuchnia_grecka">grecka</option>
                    <option value="kuchnia_meksykańska">meksykańska</option>
                    <option value="kuchnia_turecka">turecka</option>
                    <option value="kuchnia_angielska">angielska</option>
            </select>
            <label for="recipe-category">Kategoria:</label>
                <select id="recipe-category" name="category">
                <option value="deser">Deser</option>
                    <option value="zupa">Zupa</option>
                    <option value="danie-glowne">Danie Główne</option>
                </select>
            <br>
            <label for="date">Data:</label>
            <input type="date" id="date" name="date"> 
            <label for="rating">Ocena</label>
            <select id="rating" name="rating">
                <option value="10/10">10/10</option>
                <option value="9/10">9/10</option>
                <option value="8/10">8/10</option>
                <option value="7/10">7/10</option>
                <option value="6/10">6/10</option>
                <option value="5/10">5/10</option>
                <option value="4/10">4/10</option>
                <option value="3/10">3/10</option>
                <option value="2/10">2/10</option>
                <option value="1/10">1/10</option>
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
    $dbname = "platofrma_kulinarna";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
    }
    $search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';
    $cuisine = isset($_GET['Cuisines']) ? $_GET['Cuisines'] : '';
    $category = isset($_GET['category']) ? $_GET['category'] : '';
    $date = isset($_GET['date']) ? $_GET['date'] : '';
    $rating = isset($_GET['rating']) ? $_GET['rating'] : '';
    
    $results = [];
    
    if (!empty($search_query)) {
        $sql = "SELECT * FROM kuchnia1 WHERE nazwa LIKE '%$search_query%'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        }
    }
    
    if (!empty($cuisine)) {
        $sql = "SELECT * FROM kuchnia1 WHERE kuchnie = '$cuisine'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        }
    }
    
    if (!empty($category)) {
        $sql = "SELECT * FROM kuchnia1 WHERE kategoria = '$category'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        }
    }
    
    if (!empty($date)) {
        $sql = "SELECT * FROM kuchnia1 WHERE data = '$date'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        }
    }
    
    if (!empty($rating)) {
        $sql = "SELECT * FROM kuchnia1 WHERE ocena = '$rating'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        }
    }
    
    // Display results
    if (!empty($results)) {
        foreach ($results as $row) {
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
