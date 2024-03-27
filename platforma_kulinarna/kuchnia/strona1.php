<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przepisy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Platforma Przepisów Kulinarnych</h1>
    </header>
    <nav>
        <a href="przepisy.html">Przepisy</a>
        <a href="wyszukiwarka.html">Wyszukiwarka</a>
    </nav>
    <main>
        <section id="add-recipe">
            <h2>Dodaj Przepis</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="recipe-name">Nazwa Przepisu:</label>
                <input type="text" id="recipe-name" name="recipe-name" required>

                <label for="recipe-category">Kategoria:</label>
                <select id="recipe-category" name="recipe-category">
                    <option value="deser">Deser</option>
                    <option value="zupa">Zupa</option>
                    <option value="danie-glowne">Danie Główne</option>
                </select>
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
                <label for="data">Data:</label>
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
                <label for="recipe-instructions">Instrukcje:</label>
                <textarea id="recipe-instructions" name="recipe-instructions" rows="4" required></textarea>
                <button type="submit">Dodaj Przepis</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Platforma Przepisów Kulinarnych</p>
    </footer>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kuchnia1";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Połączenie nieudane: " . $conn->connect_error);
        }

        $recipe_name = $_POST['recipe-name'];
        $category = $_POST['recipe-category'];
        $cuisine = $_POST['Cuisines'];
        $date = $_POST['date'];
        $rating = $_POST['rating'];
        $instructions = $_POST['recipe-instructions'];

        $sql = "INSERT INTO kuchnia1 (nazwa, kategoria, kuchnie, data, ocena, instrukcje)
        VALUES ('$recipe_name', '$category', '$cuisine', '$date', '$rating', '$instructions')";

        if ($conn->query($sql) === TRUE) {
            echo "Nowy przepis został dodany!";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

</body>
</html>