<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gioca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button id="start">GIOCA</button>

    <script>
        let start = document.getElementById("start");
        start.addEventListener("click", function() {
            window.location.href = "index.php";
        });
    </script>
</body>
</html>