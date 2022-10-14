<html>

<head>
<style>
::placeholder {
  color: red;
  opacity: 1; /* Firefox */
}


</style>

<script>
  //selecters
  // document.getElementById("myText").placeholder = "Type name here..";
  //element.setAttribute(attribute, value)same of above

  // document.getElementsByTagName("p")[0].innerHtml;
  // document.getElementsByName("p")[0].style.color="pink";
  
  // const x = document.getElementsByClassName("intro");
  // const x = document.querySelectorAll("p.intro");//work with class only insted of id

  // document.getElementById(id).onclick = function(){code}
function validateForm() 
{
  var x = document.forms["myForm"]["fname"].value;
  if (x == "" || x == null) 
  {
    document.getElementsByName("fname")[0].placeholder="file it ";
    return false;
  }
}
</script>
</head>
<body>

    <h2>JavaScript validation for empty input field</h2>
    <p>Try to submit the form without entering any text.</p>

        <form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post" required>
        Name: <input type="text" name="fname">
        <input type="submit" value="Submit">
        </form>

</body>
</html>
