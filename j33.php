<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form >
        <input type="text" id="name">
        <input type="button" onclick="submitData()" value="Click">
    </form>
    <div id="result"></div>

    <!-- 1<input type="button" onclick="clearT()" value="Clear"> -->


    <script>
        // let timeO=setTimeout(test,3000)
        // function test(){
        //     console.log("hello")
        // }

        // function clearT(){
        //     clearTimeout(timeO)
        // }


        //-----------------------------------------------

        function submitData(){
            let name=document.getElementById("name").value;
            if(name==""){
                document.getElementById("result").innerHTML="Please enter name";
                setTimeout(clearForm,5000/*,"paramiter"*/);
            }else{
                
                document.getElementById("result").innerHTML="Hello "+name;
            }

        }

        function clearForm(){
            document.getElementById("result").innerHTML=""
            document.getElementById("name").value=""
        }
    </script>

    <style>
      
    </style>

</body>
</html>