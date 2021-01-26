<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>videogame-ost-cover-service</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="cover">
        <div class="transparent">
            <h1>Suche OSTs</h1>
            <ul>
                <li>all: Liste aller OSTs</li>
                <li>1-3: OST mit angegebener id</li>
            </ul>
            <form class="flex-form" method="get" action="redirect.php">
                <input type="text" name="request" placeholder="ost id">
                <button value="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>