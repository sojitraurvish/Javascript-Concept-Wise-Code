<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        //hoisting 

        //if example
        //var v=10;
        //document.write(v);

        //now
        // document.write(v); 
        // var v=10;  

        //THEN javascript engine EXECUTED it LIKE THIS maner 
            // var v;
            // v="undefined";
            // document.write(v); 

        // hello();//if we have define body after calling so javascript engine will put this line bellow
        // function hello()
        // {
        //     document.write("hellow me urvish");
        // }
        //here hello(); like this

        hello();//now it raise an error beacuse it is variable so it will be undefine
        var hello=function()
        {
            document.write("hellow its's me");
        }



        "use strict";
        //when you create variable with this mode at that time we have to specifies type like var , let , const
    </script>
</head>
<body>
    
</body>
</html>