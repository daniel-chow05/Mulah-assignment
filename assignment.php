<?php
?>
<!DOCTYPE HTML>
<head><title>assignment</title></head>
<body>
    <style>
        h1{
            margin-top: 5vh;
        }

        table{
            margin-bottom: 5vh;
            width: 75vw;
            border-collapse: collapse;
        }

        th{
            font-size: 2.5vw;
            background-color: #dddddd;
        }

        td{
            font-size: 1.5vw;
        }

        th, td{
            width: 50%;
            border: 1px solid;
            padding: 5px;
            text-align: center;
        }
    </style>
    <center>
        <!-- assignment 1 -->
        <h1>TABLE 1</h1>
        <table id = "assignment1">
            <tr>
                <th>Index</th>
                <th>Value</th>
            </tr>
        </table>
        <!-- assignment 2 -->
         <h1>TABLE 2</h1>
        <table id = "assignment2">
            <tr>
                <th>Category</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Alpha</td>
                <td id="alpha"></td>
            </tr>
            <tr>
                <td>Beta</td>
                <td id="beta"></td>
            </tr>
            <tr>
                <td>Charlie</td>
                <td id="charlie"></td>
            </tr>
        </table>
    </center>
</body>
<script>
    var A = [41, 18, 21, 63, 2, 53, 5, 57, 60, 93,
            28, 3, 90, 39, 80, 88, 49, 60, 26, 28]

    window.onload = InsertTable1(), InsertTable2()

    function InsertTable1(){
        var table = document.getElementById("assignment1");
        var tableContent = table.innerHTML
        A.forEach((element, index)=> {
            tableContent = tableContent.concat
            (`<tr>
                <td>A`+(index + 1)+`</td>
                <td>`+element+`</td>
            </tr>`)
        });
        console.log(tableContent)
        table.innerHTML = tableContent
    }

    function InsertTable2(){
        // A value must reduce by 1 to match the index in the array A
        var alpha = document.getElementById("alpha")
        alpha.innerHTML = A[4] + A[19]

        var beta = document.getElementById("beta")
        beta.innerHTML = A[14] / A[6]

        var charlie = document.getElementById("charlie")
        charlie.innerHTML = A[12] * A[11]
    }
</script>