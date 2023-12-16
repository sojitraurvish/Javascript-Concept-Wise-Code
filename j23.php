<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul id="box">
    <li>urvish</li>
    <li >amit</li>
    <li>bhavik</li>
</ul>

<input type="text" id="name"/>

<input type="button" onclick="addNewLi()" value="Add More">

<script>
    // function addNewLi(){
        
    //     //input box id 
    //     let input=document.getElementById("name").value;
 
    //     let ulBox=document.getElementById("box");
    //     let newLi=document.createElement("li");

    //     // newLi.className="new calls";
    //     // newLi.id="my id";

    //     let liText=document.createTextNode(input)
    //     newLi.appendChild(liText)
    //     ulBox.appendChild(newLi)
        
    // }

    function addNewLi(){
        
        let ulBox=document.getElementById("box");
        let newLi=document.createElement("li");
        
        // 2nd way to assign attributes
        //input box id 
        newLi.textContent=document.getElementById("name").value;
        
        
        // let liText=document.createTextNode(input)
        // newLi.appendChild(liText)
        ulBox.appendChild(newLi)
        
    }

</script>

</body>
</html>

