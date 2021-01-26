<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>videogame-ost-cover-service</title>
    <link href="src/style.css" rel="stylesheet">
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
                    <form action="">
                        <input type="text" name="request" placeholder="OST">
                        <button value="submit">Submit</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
</body>
</html>