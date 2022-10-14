<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        // var obj=new Object();

        // obj.name="urvih";
        // obj.age="urvih";
        //-----------------------

        // var obj={
        //     name:"loy",
        //     age:15
        // };

        // obj.mobile=9097890987;


        // delete(obj.name);

        // document.write('age' in obj);
        //---------------

        
        var obj={
            name:"loy",
            age:15,
            mobile:21221
        };

        for(var key in obj)
        {
            document.write(key+obj[key]);
        }

    </script>
</head>
<body>
    
</body>
</html>