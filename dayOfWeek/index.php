<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day of Week</title>
</head>
<body>
    <div style="block">
        <h2>Day of Week</h2>
        <form action="" method="post" name="wordform" onsubmit="event.preventDefault(); cal();">
            <div>
                <label for="amount">Select the Date : </label>
                <input type="date" id="dateInput">              
            </div>
            
            <div>
                <label for="amount">Day of Week: </label>
                <input type="text" id="days"  disabled>
            </div>

            <div>
                <label for="amount">Day: </label>
                <input type="text" id="dayname"  disabled>
            </div>

            <div>
                <button type="reset">Clear</button>
                <button type="submit" id="calculate">Submit</button>
            </div>
        </form>

    </div>    

    <script>       
        
        function cal(){   
            var daynames = ['Sun','Mon','Tues','Wed','Thrus','Fri','Sat'];

            element = document.getElementById("dateInput");
            if(element != null) val = new Date(element.value);
                        
                day = val.getDay();
                dayname = daynames[day];

                console.log(day);
                console.log(dayname);
                
            
            document.getElementById("days").value = day;
            document.getElementById("dayname").value = dayname;

        }

    </script>
</body>
</html>