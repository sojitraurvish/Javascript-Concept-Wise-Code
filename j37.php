<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
        }
        #div{
            background-color: blue;
            padding: 50px;
        }
        #a{
            color: white;
        }
    </style>
</head>
<body>
    <div id="div">
        <a href="javascript:void(0)" id="a">Click</a>
    </div>
    <script>
        /*
            1. Child To Parent -> event bubbling

            2. Parent To Child -> event capturing
            
            3. Only  Click Event
        */

        document.getElementById("div").addEventListener("click",function(){
            console.log("Div Click");
        },true/*true for reverse order -> event capturing*/)
        
        document.getElementById("a").addEventListener("click",function(){
            console.log("A Click");
        })/*Child To Parent -> event bubbling*/

        document.addEventListener("click",function(e){
            e.stopPropagation(); // only one event get fire whatever is clicked 
            console.log("Body Click");
        },true)
    </script>
</body>
</html>