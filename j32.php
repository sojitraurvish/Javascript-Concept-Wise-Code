<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="box">urvish</div>

    <script>
        // let intCounter=setInterval(test,0);

        // let x=1;
        // function test(){
        //     if(x===1000)
        //     {
        //         clearInterval(intCounter)
        //     }
        //     // console.log(x)
        //     var num=document.getElementById("box").innerHTML=x
        //     x++
        // }


        //------------------------------------------

        // setInterval(incwidth,1000)

        // let x=10;
        // function incwidth(){
        //     x+=10;
        //     let c=document.getElementById("box")
        //     c.style.width=x+"px"
        //     // c.setAttribute("width",x+"px")
            
        // }

        //------------------------------------------

        setInterval(showClock,1000,"jay")

        function showClock(name){
            // let d=new Date();
            // document.getElementById("box").innerHTML=d.toLocaleTimeString()
        
            console.log("I am "+name)
        }



    </script>

    <style>
        /* 2 valu #box{
            background-color: red;
            width: 1px;
            height: 50px;
        } */
    </style>

</body>
</html>