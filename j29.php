<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- setAttribute
    getAttribute
    removeAttribute
    hasAttribute -->

    <div  id="name" ></div>
    <input type="button" onclick="addAttr()" value="Add">
    <input type="button" onclick="removeAttr()" value="Remove">
    <input type="button" onclick="getAttr()" value="Get">
    <input type="button" onclick="hasAttr()" value="Get">
    <script>
        function addAttr(){

            let name=document.getElementById("name")
            name.setAttribute("class","my_class")
        }
        function removeAttr(){

            let name=document.getElementById("name")
            name.removeAttribute("class")
        }
        function getAttr(){

            let name=document.getElementById("name")
            console.log(name.getAttribute("class"))
        }
        function hasAttr(){

            let name=document.getElementById("name")
            console.log(name.hasAttribute("class"))
        }
    </script>

</body>
</html>