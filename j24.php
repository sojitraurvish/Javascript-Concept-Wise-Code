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
        <li id="lid3">bhavik</li>
    </ul>

    <!-- <script>
        //remove chil
        let ulBox=document.getElementById("box")
        // let liBox=document.firstElementChild; this will not work

        document.body.removeChild(ulBox)
    </script> -->
    <script>
        //remove chil
        let ulBox=document.getElementById("box")
        // let liBox=ulBox.firstElementChild;
        // let liBox=ulBox.firstElementChild.nextElementSibling;
// or
        let liBox=document.getElementById("lid3")
        ulBox.removeChild(liBox)

        // document.body.removeChild(ulBox)
    </script>
</body>
</html>