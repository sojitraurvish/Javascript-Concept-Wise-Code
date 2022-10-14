<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <div id="test">
        <div>urvish</div>
        <div>jay</div>
        <div>loy</div>
    </div>
    
    <script>
        //dome element get,set,add,delete

        //document -> heirarchy start from hire and it is globel object too.and with this object we can access full html tree
            //html

            document.getElementById('id');
            document.getElementsByClassName('id');
            document.getElementsByTagName('id');
            document.getElementByName('id');
            document.all;
            document.head;
            document.title;
            document.body;
            document.images[0].src;
            document.anchors;
            document.links[0].length;
            document.forms;
            document.URL;
            document.domain;
            document.baseURI;
            console.log()

            var divId=document.getElementById('test');
            var name=divId.getElementsByTagName('div');

    </script>
</head>
<body>
    
</body>
</html>