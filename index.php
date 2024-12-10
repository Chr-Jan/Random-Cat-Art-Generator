<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Cat Art</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #555;
        }
        .artwork {
            display: inline-block;
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 20px;
            max-width: 600px;
        }
        .artwork img {
            max-width: 100%;
            height: auto;
        }

        .button-primary {
            margin-top: 10px;
            height: 50px;
            padding: 5px 10px;
            background-color: #337ab7;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 15px !important; 
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
    <h1>Random Cat Art</h1>
    <div class="artwork">
        <?php
        $url = "https://cataas.com/cat?position=center";
        echo "<img src='$url' alt='Random Cat Art' />";
        ?>
        <div>
            <button class="button-primary" onclick="location.reload();">New Cat</button>
        </div>
    </div>
</body>
</html>
