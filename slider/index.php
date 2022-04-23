<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <style>
        #slider-container
        {

        }
        .slider{
            position:fixed;
            top:20%;
            width:100%;
            height:300px;
            left:0;
            display:none;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        .arrow{
            font-size:2em;
            width:30px;
            height:35px;
            background-color:#bdbdbd;
            position:fixed;
            top:47%;
            color:white;
            padding:5px;
            font-size:bold;
            text-align: center;
            cursor:pointer;
        }
        .arrow:hover{
            background-color:grey;
        }
        .prev{
            left:0;
        }
        .next{
            right:0;
        }
        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }
        p{
            text-align: center;
            bottom:0;
            color:white;
            position: fixed;
            top: 22%;
            margin: auto;
            width: 100%;
        }
    </style>
</head>
<body>
    <div style="block">
        <h2>Slider</h2>
    
        <div id="slider-container">
            <div class="slider fade" style="background-image: url('img/one.jpg');" id="slide1">
                <p>Slider 1</p>
            </div>        

            <div class="slider fade" style="background-image: url('img/two.jpg');" id="slide2">
                <img src="" alt="">
                <p>Slider 2</p>
            </div>        

            <div class="slider fade" style="background-image: url('img/three.jpg');" id="slide3">
                <img src="" alt="">
                <p>Slider 3</p>
            </div>               
        </div>
        
        <div class="arrow prev" onclick="sliderChange(-1)"><</div>
        <div class="arrow next" onclick="sliderChange(1)">></div>

       
    </div>    

    <script>       
        let slidenum=1;
        let slideshow = document.getElementById("slide"+slidenum);
        slideshow.style.display="block";

        function sliderChange(slides){
            slideshow.style.display="none";
            slidenum+=(slides);            
            if(slidenum==0) slidenum=3;
            else if(slidenum==4) slidenum=1;
            slideshow = document.getElementById("slide"+slidenum);
            slideshow.style.display="block";
            console.log("slide change");
            console.log(slidenum);
        }
        

    </script>
</body>
</html>