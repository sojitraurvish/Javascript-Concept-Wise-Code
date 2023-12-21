<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>Hello</div>
    <!-- <img src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" srcset=""> -->

   <script>
        /* 
           DOMContentLoaded // this event only fire when my dom get loaded or html tree get completed but not external content like this image css fiel js fiel
           Load // i will only fire when my entire content get loaded
           onbeforeunload/unload 
        */

        // window.addEventListener("DOMContentLoaded", function(){
        //     console.log("DOMContentLoaded")
        // });
        // window.addEventListener("Load", function(){
        //     console.log("Load")
        // });

        window.onbeforeunload=function(){
            return "hello"
        }
   </script>

</body>
</html>