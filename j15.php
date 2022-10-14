<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var arr={
            name:"urvish",
            fname:"vipulbhai",
            age:10,
            city:['delir','surat'],
            education:{
                pg:'M.Tech',
                ug:'Test'
            },
            fullname:function(){
                return this.fname+" "+this.name;
            },
            getName()
            {
                return this.fname+" "+this.name;
            },
            get getFullName(){
                return this.name;
            },
            set setFullName(par)
            {
                this.fname=par.fn;
                this.name=par.n;
            }


        };
        document.write(arr.name);
        document.write(arr.city);
        document.write(arr.city[1]);
        document.write(arr.education);
        document.write(arr.education.pg);
        document.write(arr.fullname());
        
        
        document.write(arr.getFullName);
        
        arr.setFullName={fn:"amit",n:"loy"};


    </script>
</head>
<body>
    
</body>
</html>