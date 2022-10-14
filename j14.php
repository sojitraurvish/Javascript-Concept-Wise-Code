<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        var arr=["vishl","jay","loy"];
        
        arr.forEach(function(value,key){
            document.write(value,key+"</br>");
        });
        
        

        function arrFun(val,key)
        {
            document.write(value,key+"</br>");
        }

        arr.forEach(arrFun);
    </script>
</head>
<body>
    
</body>
</html>