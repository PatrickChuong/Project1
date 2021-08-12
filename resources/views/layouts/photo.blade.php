<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
@include ('layouts.header')

<style>
img
{
  width: 20%;
  height: 20%;
}
.hidden
(
  display:none;
)
</style>

</style>

<button onclick="function1()">Click</button>
<div id="div1">
  <img src= "{{asset('storage/EggRoll.jpg') }}" class="inv">
</div>

<script>
function function1() {
  var x = document.getElementById("div1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</html>

