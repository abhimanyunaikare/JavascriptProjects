<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <style>
        .tasks{
            display:inline-block;
        }
    </style>
</head>
<body>
    <div style="block">
        <h2>To Do List</h2>

        <div>
            <button onclick="addTask();">Add Task</button>
        </div>
        <hr>
        <form action="" method="post" name="tipform" onsubmit="event.preventDefault(); cal();">
            <div>
                <input type="checkbox" class="checkBoxes" onclick="clickCheckbox(this);">
                <div class="tasks">Hello World Programme.</div>
            </div>
            <div>
                <input type="checkbox" class="checkBoxes" onclick="clickCheckbox(this);">
                <div class="tasks">Display Alert Box</div>
            </div>
            <div>
                <input type="checkbox" class="checkBoxes" onclick="clickCheckbox(this);">
                <div class="tasks">Take User Input</div>
            </div>
            <div>
                <input type="checkbox" class="checkBoxes" onclick="clickCheckbox(this);">
                <div class="tasks">Hack USA Navy Server</div>
            </div>
            
            <div id="newElementPosition"></div>
        </form>

    </div>    

    <script>
       
        function clickCheckbox(element){   
            if(element.checked) 
                element.nextElementSibling.style.textDecoration="line-through";
            else
                element.nextElementSibling.style.textDecoration="none";
        }

        function addTask(){
            let person = prompt("Please enter Task : ");
            if(person !=null){

                let newEl = document.createElement("div");
                newEl.innerHTML="<input type='checkbox' class='checkBoxes' onclick='clickCheckbox(this);'> <div class='tasks'>"+person+"</div>";

                newEl.addEventListener('click', function clickCheckbox(){   
                    if(newEl.checked) 
                        newEl.nextElementSibling.style.textDecoration="line-through";
                    else
                        newEl.nextElementSibling.style.textDecoration="none";
                }
                );

                let newPos = document.getElementById("newElementPosition");
                newPos.insertBefore(newEl, null);

                /* let newBox = document.createElement("input");
                newBox.type="checkbox";
                newBox.class="checkBoxes";
                //newBox.style.display="block";
                //newBox.onclick="clickCheckbox(this);";

                newBox.addEventListener('click', function clickCheckbox(){   
                    if(newBox.checked) 
                        newBox.nextElementSibling.style.textDecoration="line-through";
                    else
                        newBox.nextElementSibling.style.textDecoration="none";
                }
                );

                let newPos = document.getElementById("newElementPosition");
                newPos.insertBefore(newBox, null);

                let newEle = document.createElement("div");
                newEle.innerHTML=person;
                newEle.class="tasks";
                newEle.style.display="inline-block";
                newPos.insertBefore(newEle, null);

                var linebreak = document.createElement('br');
                newPos.insertBefore(linebreak, null);
                //newEle.appendChild(linebreak); */
            }
        }
    </script>
</body>
</html>