<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="block">
        <h2>Tip Calc</h2>
        <form action="" method="post" name="tipform" onsubmit="event.preventDefault(); cal();">
            <div>
                <label for="amount">Bill Amount : </label>
                <input type="text"  caption="Enter the Bill amount : " id="amount" 
                >
            </div>
            
            <div>
                <label for="amount">Enter the Percent for the Tip : </label>
                <input type="Enter the tip : " id="percent" >
            </div>

            <div><label for="">Tip Value : </label>
                <input type="text" id="tipamount">
            </div>

            <div>
                <button type="reset">Clear</button>
                <button type="submit" id="calculate">Submit</button>
            </div>
        </form>

    </div>    

    <script>
        
        function cal(){   
            var val =0;
            element = document.getElementById("amount");
            if(element != null) val = element.value;
            element2 = document.getElementById("percent");
            if(element2 != null) per = element2.value;
            
            tip = val*per/100;
            console.log(tip); 

            document.getElementById("tipamount").value = tip;

        }

        cal();
    </script>
</body>
</html>