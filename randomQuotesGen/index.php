<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quotes Generator</title>

</head>
<body>
    <div style="display:block; margin:auto; width:300px;">
        <div style="">
            <h2>Random Quotes Generator</h2>
        </div>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div id="quotes">
                

            </div>

            <div>
                <button type="submit">Get Quote</button>
            </div>
            
        </form>

    </div>    

    <script>       
        let quotes=[
            "Thy Shall not Steel",
            "You can not know the meaning of your life untill you are connected to the power that created you",
            "You are a pure Spirit",
            "Know Thyself"
        ];



        function cal(){
            let randomNumbers= Math.round(Math.random() * (3 - 0)) + 0; 

        console.log(quotes[randomNumbers]);
        console.log(randomNumbers);
            document.getElementById("quotes").innerHTML=quotes[randomNumbers];          
           
        }

    </script>
</body>
</html>