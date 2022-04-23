<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    <style>
        #modal{
            z-index:1;
            position:fixed;
            padding-top:100px;
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            width:100%;
            height: 100%;
            display:none;
            left:0;
            top:0;
        }
        #modal-content{
            background-color:#fefefe;
            margin:auto;
            padding:20px;
            width:80%;
        }
        #clos{
            cursor:pointer;
        }
    </style>
</head>
<body>
    
        <div >
            <h2>Modal Example</h2>
        </div>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div id="modal">
                <div id="modal-content">
                    <span style="float:right" id="clos" onclick="clos()">&times;</span>
                    Hello World!
                </div>
            </div>

            <div>
                <button type="submit" id="modalOpen">Modal</button>
            </div>
        </form>

       

    <script>       
        var mymodal = document.getElementById("modal");
        function cal(){   
            mymodal.style.display="block";
        }
        function clos(){
            mymodal.style.display="none";
        }
    </script>
</body>
</html>