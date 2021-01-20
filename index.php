<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>videogame-ost-cover-service</title>
</head>
<body>


<div class="content">
    <ul>
        <li>all: Liste aller Osts</li>
        <li>1-3: Ost mit angegebener id</li>
    </ul>
    <form method="get" action="request.php">
        <label>
            <input type="text" name="request">
        </label>
        <button value="submit">Submit</button>
    </form>
</div>

<script>
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.addEventListener("load", function () {
        let response = JSON.parse(this.responseText);
        console.log(response)

        document.getElementById('text').value = '';
        let child = document.createElement('div');
        if(response['success']==='true') {
            let name = response['name']
            comment = response['comment']
            child.innerHTML = `<div>${name}</div><div>${comment}</div>`
        }
        else {
            child.innerHTML = '<div></div><div>Dieser Kommentar enthält anstößige Worte und wird deshalb nicht gepostet</div>'
        }
        document.getElementById('myBox').appendChild(child);
    });

    xmlhttp.open("get", `../php/endpoints/post_comment.php?photoid=${id}&comment=${comment}`, true);
    xmlhttp.send();
</script>

</body>
</html>