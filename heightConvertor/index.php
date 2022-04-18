<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Height Convertor</title>
</head>
<body>
    <div style="display:block; margin:auto; width:300px;">
        <div style="">
            <h2>Height Convertor</h2>
        </div>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div>
                <label for="numberInput">Enter Height : </label>
                <input type="text" id="numberInput">              
            </div>
            
           <div>
               <label for="result">Unit : </label>
               <select name="inputUnit" id="inputUnit">
                   <option value="mm" id="mm">Mili Meter</option>
                   <option value="mt" id="mt">Meter</option>
                   <option value="ft" id="ft">Feet</option>
               </select>
           </div>
            <hr>
           <div>
               <label for="result">Convert To : </label>
               <select name="outputUnit" id="outputUnit">
                   <option value="mm" id="mm">Mili Meter</option>
                   <option value="mt" id="mt">Meter</option>
                   <option value="ft" id="ft">Feet</option>
               </select>
           </div>

           <div>
                <label for="amount">Result : </label>
                <input type="text" id="result">              
            </div>
            <br>
            <div>
                <button type="reset">Clear</button>
                <button type="submit" id="calculate">Submit</button>
            </div>
        </form>

    </div>    

    <script>       
                
        function cal(){   
        
            var val = document.getElementById("numberInput").value;
            var valUnit = document.getElementById("inputUnit").value;
            var resultUnit = document.getElementById("outputUnit").value;
            var result =0;
            if(valUnit=="mm"){
                if(resultUnit=="mm") 
                    result = val;
                else if(resultUnit=="mt") 
                    result = val/1000;
                else if(resultUnit=="ft") 
                    result = val/304.8;

                document.getElementById("result").value=result;
            } 

            else if(valUnit=="mt"){
                if(resultUnit=="mm") 
                    result = val*1000;
                else if(resultUnit=="mt") 
                    result = val;
                else if(resultUnit=="ft") 
                    result = val*3.28;

                document.getElementById("result").value=result;
            } 

            else if(valUnit=="ft"){
                if(resultUnit=="mm") 
                    result = val*304.8;
                else if(resultUnit=="mt") 
                    result = val*0.304;
                else if(resultUnit=="ft") 
                    result = val;

                document.getElementById("result").value=result;
            } 
            console.log("Value : "+val);
            console.log("Value Unit: "+valUnit);
            console.log("Result Unit : "+resultUnit);
            console.log("Result : "+result);
              
        }

    </script>
</body>
</html>