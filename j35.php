<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="javascript:void(0)" onclick="openTab()">Open Tab</a>
    <!-- <a href="javascript:void(0)" onclick="openTab2()">Open Tab2</a> -->

    <a href="javascript:void(0)" onclick="closeTab()">Close Tab</a>
    <script>
        let op;
        function openTab(){
            // let url="https://google.com";
            // let name="tab";
            // let options="width=200;height=400;";
            // op=window.open(url,name,options)


            let options="width=200;height=400;";
            // op=window.open("","",options)
            // op=window.open("","_blank","")
            // op=window.open("","_self","")
            // op=window.open("","_parent","")
            op=window.open("","_top","")
            op.document.write("hellow urvish")

        }
        // function openTab2(){
        //     let url="https://google.com";
        //     let name="tab"; // with same name tab it will not open new tab
        //     let options="width=400;height=400;";
        //     op=window.open(url,name,options)
        // }
        function closeTab(){
            op.close();
        }
    </script>

    <style>
      
    </style>

</body>
</html>