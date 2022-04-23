<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Tracker</title>
    <style>
        #tabl, tr, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding:5px;
        }
        #tabl{
            width:100%;
        }
        #width130{
            width:100px;
        }
        button{
            float:right;
            margin:10px;
        }

        /* Modal */
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
            width:35%;
            height:161px;
        }
        #clos{
            cursor:pointer;
        }
        .formItem{
            margin:5px;
        }
        #finalTabVal{
            font-weight:bold;            
        }
    </style>
</head>
<body>
    <div style="display:block; margin:auto; width:500px;">
        <div style="">
            <h2 style="text-align:center">Budget Tracker</h2>
        </div>

        <div>
            <button onclick="openModal();">Add Item</button>
        </div>
                    
        <table id="tabl">
            <tr>
                <th></th>
                <th>Item</th>
                <th>Tag &nbsp;
                    <select name="filterTableCol" id="filterTableCol" onchange="filterTab()">
                        <option value="all">All</option>
                        <option value="transport">Transport</option>
                        <option value="food">food</option>
                        <option value="house">house</option>
                        <option value="utilities">utilities</option>
                    </select>
                </th>
                <th>Amount (Rs.)</th>
            </tr>
            <tr class="trans">
                <td>1</td>
                <td>Taxi Fare</td>
                <td>Transport</td>
                <td>300</td>
            </tr>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Sum</td>
                    <td id="finalTabVal">180</td>
                </tr>
            </tfoot>
        </table>

    </div>    

    <!-- Modal -->
    <div id="modal">
        <div id="modal-content">
            <span style="float:right" id="clos" onclick="clos()">&times;</span>
            <h2 style="text-align:center;">Add Item</h2>
            <div class="formItem">
                <label for="itemDesc">Item:</label>
                <input type="text" id="itemDesc">
            </div>

            <div class="formItem">
                <label for="itemTag">Item:</label>
                <select name="itemTag" id="itemTag">
                    <option value="Transport">Transport</option>
                    <option value="Food">Food</option>
                    <option value="House">House</option>
                    <option value="Utilities">Utilities</option>
                </select>
            </div>

            <div class="formItem">
                <label for="amount">Amount:</label>
                <input type="text" id="amount">
            </div>

            <div class="formItem">
                <button onclick="reset();">Reset</button>
                <button onclick="submit();">Submit</button>
            </div>
        </div>
    </div>


    <script>   
        let vb = document.getElementById("tabl");
        console.log(vb.lastElementChild.previousSibling.lastElementChild);

        function submit(){
            let taskForm = document.getElementById("itemDesc").value;
            let tagForm = document.getElementById("itemTag").value;
            let amountForm = document.getElementById("amount").value;


            let tble = document.getElementById("tabl");
            let lastSr = tble.lastElementChild.previousSibling.lastElementChild.firstElementChild.innerHTML;
            let nowSr = parseInt(lastSr)+1;
            
            console.log(lastSr);

            let newEl = document.createElement("tr");
            newEl.className=tagForm;
            newEl.innerHTML="<td>"+nowSr+"</td> <td>"+taskForm+"</td> <td>"+tagForm+"</td> <td>"+amountForm+"</td>";
            tble.querySelector('tbody').appendChild(newEl, tble.lastElementChild.previousSibling.lastElementChild);
            
            taskForm = tagForm = amountForm = " ";
            //console.log("item: "+taskForm);
            mymodal.style.display="none";
            totalSum();
        }

        function filterTab(){
            let tble = document.getElementById("tabl");
            let tr = tble.getElementsByTagName("tr");
            let td = txtVal = "";

            let filterVal = document.getElementById("filterTableCol").value.toUpperCase();
            //console.log(filterVal);

            for(let i=0; i<tr.length; i++){                
                        tr[i].style.display="";            
            }

            for(let i=0; i<tr.length; i++){
                td = tr[i].getElementsByTagName("td")[2];
                if(td){
                    txtVal = td.textContent || td.innerText;
                    if(txtVal.toUpperCase().indexOf(filterVal) > -1){
                        tr[i].style.display="";
                        tr[i].classList.remove("hideCal");
                    }
                    else if(filterVal=="ALL"){
                        tr[i].style.display="";
                        tr[i].classList.remove("hideCal");
                    }
                    else{
                        tr[i].style.display="none";
                        tr[i].className="hideCal";
                    }
                }
            }
            totalSum();
        }

        function totalSum(){
            let tble = document.getElementById("tabl");
            let tr = tble.getElementsByTagName("tr");
            let totalSum=0;
            tr[tr.length-1].style.display="";
            
            for(let i=1; i<(tr.length-1); i++)
            {
                if(tr[i].classList.contains("hideCal"))
                    continue;
                else
                    totalSum+=parseInt(tr[i].getElementsByTagName("td")[3].innerHTML);
            }
            document.getElementById("finalTabVal").innerHTML=totalSum;

        }

        totalSum();

       /* Modal */
        var mymodal = document.getElementById("modal");
        function openModal(){   
            mymodal.style.display="block";
        }
        function clos(){
            mymodal.style.display="none";
        }
    </script>
</body>
</html>