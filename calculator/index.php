<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
    <style>
        #display{
            padding:5px;
            margin:5px;
            height:20px;
        }
        button{
            width:50px;
            height:50px;
            background-color:hue;
            padding:3px;
            margin:5px;
        }
        .calc{

        }
        .device{
            background-color:grey;
        }
        #butts{
            padding:5px;
        }
    </style>
</head>
<body>
    <div style="display:block; width:300px;">
        <h2>Calculator</h2>
        <form action="" method="post" name="tipform" onsubmit="event.preventDefault(); ">
            <div>                
                <input type="text"  id="display" value="0" disable>
            </div>
            
            <div id="butts">

                <div>
                    <button type="" id="one" onclick="clickButton(1);">1</button>
                    <button type="" id="two" onclick="clickButton(2);">2</button>
                    <button type="" id="three" onclick="clickButton(3);">3</button>
                </div>
    
                <div>
                    <button type="" id="four" onclick="clickButton(4);">4</button>
                    <button type="" id="five" onclick="clickButton(5);">5</button>
                    <button type="" id="six" onclick="clickButton(6);">6</button>
                </div>
    
                <div>
                    <button type="" id="seven" onclick="clickButton(7);">7</button>
                    <button type="" id="eight" onclick="clickButton(8);">8</button>
                    <button type="" id="nine" onclick="clickButton(9);">9</button>
                </div>
    
                <div>
                    <button type="" id="plus" onclick="operation('add');">+</button>
                    <button type="" id="zero" onclick="clickButton(0);">0</button>
                    <button type="" id="minus" onclick="operation('sub');">-</button>
                </div>
    
                <div>
                    <button type="" id="mult" onclick="operation('mult');">*</button>
                    <button type="" id="divide" onclick="operation('div');">/</button>
                    <button type="" id="equal" onclick="clickEqual();">=</button>
                </div>

                <div>
                    <button type="reset" style="width: 100px;"  onclick="clickClear();">Clear</button>
                </div>
            </div>

        
        </form>

    </div>    

    <script>
       let num1 = "";
       let arg1 = res =0;
       let operator = "";
       let display = "";

       function clickButton(butt){
           num1=num1+""+butt;
           document.getElementById("display").value+=butt;
           //console.log(num1);
       }

       function operation(arg){
            arg1=parseInt(num1);
            if(arg=="add") document.getElementById("display").value+="+";   
            else if(arg=="sub")document.getElementById("display").value+="-";
            else if(arg=="mult")document.getElementById("display").value+="*";
            else if(arg=="div")document.getElementById("display").value+="/";
                
            operator=arg;
            num1=0;
       }

       function clickEqual(){
           if(operator=="add") res = arg1+parseInt(num1);
           if(operator=="sub") res = arg1-parseInt(num1);
           if(operator=="mult") res = arg1*parseInt(num1);
           if(operator=="div") res = arg1/parseInt(num1);
            
            document.getElementById("display").value+=" = "+res;
            console.log("num1:"+num1);
            console.log("arg1:"+arg1);
            console.log("res:"+res);
            num1=res;
       }

       function clickClear(){
           num1=0;
           res=0;
       }
    </script>
</body>
</html>