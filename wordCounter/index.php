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
        <h2>Word Counter</h2>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div>
                <label for="amount">Input Paragraph : </label>
                <textarea name="inputText" id="inputText" cols="30" rows="10" ></textarea>                
            </div>
            
            <div>
                <label for="amount">Word Count : </label>
                <input type="text" id="wordcount"  disabled>
            </div>

            <div><label for="">Charachter Count : </label>
                <input type="text" id="charcount" disabled>
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
            var sumword =0;
            var sumchar =0;

            element = document.getElementById("inputText");
            if(element != null) val = element.value;
            
            if(val.length ==0) alert("Enter valid input");
            else{
                for(var i=0; i<val.length; i++)
                {
                    var currentchar = val[i];

                    if(currentchar == " ")
                    {
                        sumword++;
                    }
                }
                sumchar = val.length;
                console.log(sumword+1);
                console.log(sumchar);
                
            }
            //document.getElementById("tipamount").value = tip;

        }

    </script>
</body>
</html>