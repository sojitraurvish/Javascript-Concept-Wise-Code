<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul id="box">
        <li>urvish</li>
        <li >amit</li>
        <li >bhavik</li>
    </ul>

    <script>
        let box=document.getElementById("box")
        let position=box.firstElementChild.nextElementSibling.nextElementSibling;

        let li=document.createElement("li")
        li.textContent="ram"

        box.replaceChild(li,position)

    </script>

</body>
</html>