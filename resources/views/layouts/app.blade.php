<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
{
    box-sizing:border-box;
}
html, body {
    width:100%;
    height:100%;
    overflow:hidden;
    position:fixed;
    margin:0;
    padding:0;
}
.table {
    display:table;
    width:100%;
    height:100%;
    table-layout:;
}


.th{
    max-width: 150px;
    max-height: 150px;
    overflow: hidden;
}

.row {
    display:table-row;
}
.cell {
    display:table-cell;
}

.header {
    display:table-header-group;
    border:1px solid grey;
    height:10%;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;

}

li a {
  display: block;
  width: 60px;
  background-color: #dddddd;
}
</style>

<body>
<table class='table'>
  <tr>
    <th style="width: 20%; vertical-align:top; text-align:center;">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </th>
    <th style="width: 80%;">title 2</th>
  </tr>
</table>

</body>
</html>
