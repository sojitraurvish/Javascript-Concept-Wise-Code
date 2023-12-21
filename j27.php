<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <input type="button" id="btn" class="abc" value="ab">

    <script>

        let btn=document.getElementById("btn")

        // btn.addEventListener("click",test)
        // btn.addEventListener("click",test1)
        // function test(){
        //     console.log("test click")
        // }
        // function test1(){
        //     console.log("test click1")
        // }

        btn.addEventListener("click",function test(){
            console.log(this.getAttribute("class"))
            
            
        })
        btn.addEventListener("click",test1)
        
        function test1(){
            console.log("test click1")
            let btn=document.getElementById("btn")
            btn.removeEventListener("click",test1)
        }
        
    </script>

</body>
</html>