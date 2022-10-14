<ul id="box">
    <li>urvish</li>
    <li>amit</li>
    <li>shkk</li>
</ul>

<script>
    let libox=document.getElementById("box");
    let newLi=document.createElement("li");

    newLi.className="new_li abc";
    newLi.id="my_id";

    libox.appendChild(newLi);
    let liText=document.createTextNode("urvish");
    newLi.appendChild(liText);
    
</script>