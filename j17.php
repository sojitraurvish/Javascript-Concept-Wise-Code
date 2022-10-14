<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        // var obj1={
        //     fname:"urvish",
        //     lname:"gupta"
        // };
        // var obj2={
        //     fname:"urvish",
        //     lname:"gupta"
        // };
        //INSTED OF THIS DO THIS

        //CONSTRACTOR 

        function User(fn,ln)
        {
            this.fname=fn;
            this.lname=ln;
            this.fullname=function()
            {
                return this.fname+this.lname;
            },
            this.phone=1212112//two way to do it
        }
        User.prototype.phone=12121112;//both way valid

        var obj1=new User("urvish","soitra");
        var obj3=new User("jay","rakoliya");

        obj3.age=10;
    </script>
</head>
<body>
    
</body>
</html>