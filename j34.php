<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="txt" class="box">urvish</div>

    <!--2) <input type="button" onclick="changeColorRed()" value="Red">
    <input type="button" onclick="changeColorGreen()" value="Green">

    <input type="button" onclick="getStyle()" value="Get Style" > -->

<!-- 3--------------------------------------------------------------- -->
    <input type="button" onclick="test()" value="Toggle">
    <script>
       /*
        Inline style
            style
            setAttribute

        className
        classList
            add 
            remove
            replace
            contains
            length
            item
            toggle
       */


    //1)    let txt=document.getElementById("txt");
    //    txt.style.color="blue"
    //    txt.style.fontSize="50px"


        //2) function changeColorRed(){
        //     let txt=document.getElementById("txt")
        //     txt.style.color="red" there is a difference between them
        //     txt.setAttribute("style","color:red;width:100px;background-color:blue;")
        // }
        // function changeColorGreen(){
        //     let txt=document.getElementById("txt")
        //     txt.style.color="green"
        // }
        // function getStyle(){
        //     let txt=document.getElementById("txt")
        //     // console.log(txt.style.color)
        //     let css=getComputedStyle(txt);
        //     console.log(css.color)
        // }

        //---------------------------------------------------------------
            let txt=document.getElementById("txt")
            // txt.className+=" lot"
            // console.log(txt.className)

            // console.log(txt.classList)

            // txt.classList.add("new","fdee")
            // txt.classList.remove("fdee")
            // txt.classList.replace("fdee","anc")
            // console.log(txt.classList.length)
            // console.log(txt.classList.contains("new")) //return true of false
            // console.log(txt.classList.item(1)) 


            function test(){
                let txt=document.getElementById("txt")
                txt.classList.toggle("test")
            }
        </script>

    <style>
      
    </style>

</body>
</html>