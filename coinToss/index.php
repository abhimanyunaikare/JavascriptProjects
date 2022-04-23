<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Toss</title>
</head>
<body>
    <div style="display:block; margin:auto; width:300px;">
        <div style="">
            <h2>Coin Toss</h2>
        </div>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div>
                <h3>Coin Faces</h3>              
            </div>
            
            <hr>
           
            <div id="result" style="color:red; font-weight:1.2em;">
                              
            </div>

            <br>
            <div>
                
                <button type="submit" id="calculate">Toss</button>
            </div>
        </form>

    </div>    

    <script>       
                
        function cal(){   
        
            let coin = Math.floor(Math.random()*10);
            console.log(coin);
            
            let reminder = coin%2;

            if(reminder)
            {
                console.log("Odd");
                document.getElementById("result").innerHTML="Heads";
            }
            else {
                console.log("Even");

                document.getElementById("result").innerHTML="Tails";
            }
        }

        cal();

    </script>
</body>
</html>