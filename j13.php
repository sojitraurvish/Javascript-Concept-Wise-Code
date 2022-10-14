<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        //var arr=["fdf",10];
        // var arr=[
        //     ["urvish","jay","loy","toy"],
        //     ["moy","jlu","ly","apy"],
            
        // ];
        // document.write(arr);
        // document.write(arr[0]);
        // document.write(arr[0][1]);
        
        var arr=["fdf",10];
        // arr=[];
        // arr.length=0;
        document.write(arr.length);

        var arr1=[10,20];
        arr1=arr.concat(arr);
        document.write(arr1);

        arr.pop();//right
        arr.shift();//left
        arr.push("urvish");//right
        arr.unshift("urvish");//left
        arr.splice(1);//left
        arr.splice(1,2);//left
        arr.indexOf("urvish");//left
        Array.isArray(arr);//left
        str.split("/");//string to array
        str.join(",");//array to string

    </script>
</head>
<body>
    
</body>
</html>