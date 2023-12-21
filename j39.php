<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="javascript:void(0)" onclick="cleck_me()">cleck me</a>
    <script>
        function cleck_me(){

            // console.log(window.location);
            // window.location.href="https://google.com"
            // window.location.assign("https://google.com")
            // window.location.replace("https://google.com")//remove old history
            window.location.reload()
        }
    </script>
</body>
</html>