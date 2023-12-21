<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="box" style="padding: 100px; border:1px solid #000;">urvish</div>

    <script>
        let box=document.getElementById("box");

        let cWith=box.clientWidth;
        let cHeight=box.clientHeight;
        
        console.log(cWith)
        console.log(cHeight)
        
        let oWith=box.offsetWidth;
        let oHeight=box.offsetHeight;
        
        console.log(oWith)
        console.log(oHeight)
        </script>

</body>
</html>