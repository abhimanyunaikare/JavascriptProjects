<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Number Game</title>
</head>
<body>
    <div style="display:block; margin:auto; width:300px;">
        <div style="">
            <h2>Guess Number Game</h2>
        </div>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div>
                <label for="amount">Guess the number : </label>
                <input type="text" id="numberInput">              
            </div>
            
           <div>
               <label for="result">Result : </label>
               <div id="result" style="color:orange;"></div>
           </div>

            <div>
                <button type="reset">Clear</button>
                <button type="submit" id="calculate">Submit</button>
            </div>
        </form>

    </div>    

    <script>       
        var numberNew = Math.floor(Math.random() * 100);
        console.log(numberNew);
        
        function cal(){   
        
            var val = document.getElementById("numberInput").value;
            
            if(val==numberNew){
                alert("You guessed correct number! The number is "+numberNew);
                document.getElementById("result").innerHTML="Correct Guess!!!";
            } 
            else if(val<numberNew){
                alert("The number is lower, Try again.");
                document.getElementById("result").innerHTML="Lower value guessed!";
            }
            else if(val>numberNew){
                alert("The number is greater, Try again.");
                document.getElementById("result").innerHTML="Higher value guessed!";
            } 
              
        }

    </script>
</body>
</html>