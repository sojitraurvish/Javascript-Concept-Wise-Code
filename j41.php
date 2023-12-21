<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>

        let arr=["lory","tory"]


        localStorage.setItem("name",JSON.stringify(arr))
        
        // localStorage.setItem("name","urvish")

        // localStorage.clear();//remove all value
        // localStorage.removeItem("name") remove perticular item
        // console.log(localStorage.getItem("name"));
        console.log(JSON.parse(localStorage.getItem("name")));


        //local strorage will not forget your data untill you will not remove it manually
        //data will be used for only one browser and perticular page only
    
    </script>
</body>
</html>