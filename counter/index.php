<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
    <style>
        #time{
            font-weight: bold;
            font-size:2em;
        }
    </style>
</head>
<body>
    <div style="display:block; margin:auto; width:300px;">
        <div style="">
            <h2>Counter</h2>
        </div>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div id="time">
                0000
            </div>

            <div>
                <button type="submit" id="sub">Start</button>
                <button type="submit" id="pau" onclick="event.preventDefault(); pause()">Pause</button>
                <button type="submit" id="clr" onclick="event.preventDefault(); clean()">Clear</button>

            </div>
            
        </form>

    </div>    

    <script>             
        let time =0;
        let id=0;

        function timer(){
            time++;
            document.getElementById("time").innerHTML=time+" sec";
            console.log("Interval");
        }

        function cal(){
            id = setInterval(timer, 1000);
            console.log("start");
        }

        function pause(){
            clearInterval(id);
            console.log("pause");
        }

        function clean(){
            console.log("clear");
            document.getElementById("time").innerHTML="0000";
            time=0;
        }

    </script>
</body>
</html>