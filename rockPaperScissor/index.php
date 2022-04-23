<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissor</title>
</head>
<body>
    <div style="display:block; margin:auto; width:300px;">
        <div style="">
            <h2>Rock Paper Scissor</h2>
        </div>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div>
                <h3>Hand Shows</h3>              
            </div>
            
            <hr>
           
            <div id="result" style="color:red; font-weight:1.2em;">
                              
            </div>

            <br>
            <div>
                
                <button type="submit" id="calculate">Play</button>
            </div>
        </form>

    </div>    

    <script>       
                
        function cal(){   
        
            
            let randomNumbers= Math.round(Math.random() * (3 - 1)) + 1;   
            console.log(randomNumbers);
                       
            if(randomNumbers==1)
            {
                document.getElementById("result").innerHTML="Rock";
            }
            else if(randomNumbers==2){
               document.getElementById("result").innerHTML="Paper";
            }
            else if(randomNumbers==3){
               document.getElementById("result").innerHTML="Scissors";
            }
        }

        cal();

    </script>
</body>
</html>