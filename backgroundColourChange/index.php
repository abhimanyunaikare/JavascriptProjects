<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color Changer</title>

    <style>
        .block{
            width:50px;
            height:20px;
            border:1px solid black;
            margin: 5px;
            cursor: pointer;
            padding:2px;
        }
    </style>
</head>
<body>
    <div style="display:block; margin:auto; width:300px;">
        <div style="">
            <h2>Background Color Changer</h2>
        </div>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div>
                <h3>Select Color</h3>   
                
                <hr>

                <div>
                    <div class="block" style="background:red" onclick="colorChange('red');">Red</div>
                    <div class="block" style="background:blue" onclick="colorChange('blue');">Blue</div>
                    <div class="block" style="background:yellow" onclick="colorChange('yellow');">Yellow</div>
                    <div class="block" style="background:white" onclick="colorChange('white');">White</div>
                </div>
            </div>
            
        </form>

    </div>    

    <script>       
                
        function colorChange(col){   
            console.log(col);
            document.body.style.backgroundColor =col;           
           
        }

    </script>
</body>
</html>