<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Filter</title>
    <style>
        .product-container{
            width:100px;
            height:150px;
            /* background-color:grey; */
            border:1px solid grey;
            padding:3px;
            margin:5px;
            display: inline-block;
        }
        .productImg{
            width:95%;
            height:110px;
            margin:auto;
            display:block;
        }
        .productName{
            text-align:center;
            margin:auto;
            width:100%;
        }
        .pricetag{
            text-align:center;
            margin:auto;
            width:100%;
            font-size:0.7em;
        }
    </style>
</head>
<body>
    <div>
        <h2>Product Filter</h2>
        <form action="" method="post" name="tipform" onsubmit="event.preventDefault(); cal();">
            <div style="padding:10px;">
                <label for="amount">Filter : </label>
                <div id="fillers">
                    <input type="checkbox" id="shirts" class="shirts" name="filler" value="shirts">Shirts
                    <input type="checkbox" id="pants" class="pants" name="filler" value="panst">Pants
                </div>

                <button type="reset">Clear</button>
                <button type="submit" id="calculate">Submit</button>
            </div>            
            
            <div id="container">

                <div class="product-container shirt">
                    <img src="img/1.png" alt="" class="productImg">
                    <div class="productName">Shirt A</div>
                    <div class="pricetag">Rs. 2000</div>
                    <div class="tags" style="display:none;">shirt</div>
                </div>
    
                <div class="product-container shirt">
                    <img src="img/1.png" alt="" class="productImg">
                    <div class="productName">Shirt B</div>
                    <div class="pricetag">Rs. 3000</div>
                    <div class="tags" style="display:none;">shirt</div>
                </div>
    
                <div class="product-container pant">
                    <img src="img/3.jpeg" alt="" class="productImg">
                    <div class="productName">Pant F</div>
                    <div class="pricetag">Rs. 2000</div>
                    <div class="tags" style="display:none;">pant</div>
                </div>
    
                <div class="product-container pant">
                    <img src="img/3.jpeg" alt="" class="productImg">
                    <div class="productName">Pant G</div>
                    <div class="pricetag">Rs. 1000</div>
                    <div class="tags" style="display:none;">pant</div>
                </div>
    
                <div class="product-container shirt">
                    <img src="img/1.png" alt="" class="productImg">
                    <div class="productName">Shirt C</div>
                    <div class="pricetag">Rs. 2000</div>
                    <div class="tags" style="display:none;">shirt</div>
                </div>
    
                <div class="product-container shirt">
                    <img src="img/1.png" alt="" class="productImg">
                    <div class="productName">Shirt D</div>
                    <div class="pricetag">Rs. 2300</div>
                    <div class="tags" style="display:none;">shirt</div>
                </div>
            </div>
            
        </form>

    </div>    

    <script>
        function cal(){
            let s = document.querySelector('.shirts').checked;
            let p = document.querySelector('.pants').checked;
            
            let x = document.querySelectorAll(".shirt"); 
            let y = document.querySelectorAll(".pant"); 
            
            if(s && !p){
                x.forEach((e)=> {e.style.display="inline-block";});
                y.forEach((t)=> {t.style.display="none";});

            }
            else if(p && !s)
            {
                x.forEach((e)=> {e.style.display="none";});
                y.forEach((t)=> {t.style.display="inline-block";});
            }
            else if(p && s)
            {
                console.log("both");
                x.forEach((e)=> {e.style.display="inline-block";});
                y.forEach((t)=> {t.style.display="inline-block";});
            }

        }
    </script>
</body>
</html>