<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--    
    beforebegin
    afterbegin
    beforeend
    afterend -->

    <div id="box">
        <div>urvish</div>
    </div>

    <script>
        let box=document.getElementById("box");
        box.insertAdjacentHTML("beforeend","<P>amit</p>")
    </script>

</body>
</html>