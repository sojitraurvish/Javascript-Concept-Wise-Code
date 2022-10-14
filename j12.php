<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        // var name=['urvish',10];
        // document.write(name[0]);
        // var name=new Array("loy","joy");
        // document.write(name[0]);

        // var arr=[];
        // arr[0]="jay";
        // arr[1]=10;
        
        var arr=["urvish","jay","dishang","loy","toy"];
        arr.sort();
        var html="<select><option>Select City</option>";
        for(var i=0;i<4;i++)
        {
            html+="<option>"+arr[i]+"</option>";
        }
        html+="</select>";
        document.write(html);
    </script>
</head>
<body>
    
</body>
</html>