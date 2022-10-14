<!-- <ul id="box">
    <li>urvish</li>
    <li>amit</li>
    <li>bhavik</li>
</ul>

<script>
    let name=document.getElementById("box");
    console.log(name.firstElementChild.InnerHtml);
    console.log(name.lastElementChild.InnerHtml);
    console.log(name.children[0]);
    
</script> -->

<ul >
    <li>urvish</li>
    <li id="box" class="final">amit</li>
    <li>bhavik</li>
</ul>

<script>
    let name=document.getElementById("box");
    console.log(name.parentElement);
    console.log(name.nextElementSibling);
    console.log(name.previousElementSibling);
    document.getElementById("box").getAttribute("class");//final
    document.getElementById("box").hasAttribute("class");//it return true of false
    
</script>