<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane użytkownika</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ABE2, #5563DE);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background-color: #5563DE;
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .back:hover {
            background-color: #3942b4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Odebrane dane</h2>
        <?php
        $zmienna1 = $_POST['Imie'];
        echo "<p><b>Imię:</b> $zmienna1</p>";

        $zmienna2 = $_POST['Nazwisko'];
        echo "<p><b>Nazwisko:</b> $zmienna2</p>";

        $zmienna3 = $_POST['Numer_domu'];
        echo "<p><b>Numer domu:</b> $zmienna3</p>";

        $zmienna4 = $_POST['Numer_telefonu'];
        echo "<p><b>Numer telefonu:</b> $zmienna4</p>";

        $zmienna5 = $_POST['Adres_zamieszkania'];
        echo "<p><b>Adres zamieszkania:</b> $zmienna5</p>";

        $zmienna6 = $_POST['Kod_pocztowy'];
        echo "<p><b>Kod pocztowy:</b> $zmienna6</p>";

        $zmienna7 = $_POST['Adres_email'];
        echo "<p><b>Adres e-mail:</b> $zmienna7</p>";

        $zmienna8 = $_POST['Data_urodzenia'];
        echo "<p><b>Data urodzenia:</b> $zmienna8</p>";
        ?>
        <a class="back" href="index.html">Wróć do formularza</a>
    </div>
</body>
</html>