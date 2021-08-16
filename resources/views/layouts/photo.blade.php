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
  width: 300px;
  height: 200px;
}

.column {
  padding: 5px;
}

.row {
  display: flex;
  font-weight:bold;
}

</style>

<button onclick="function1()">Lunch Combination</button>
<button onclick="function2()">Appetizers</button>
<button onclick="function3()">Dinner Entrees</button>
<button onclick="function4()">Others</button>
<div id="div1" class="row">
  <div class="column">
  1. Lemon Chicken<img src= "{{asset('storage/LemonChicken.jpg') }}" class="inv">
  3. War Su Gai<img src= "{{asset('storage/WarSuGai.jpg') }}" class="inv">
  5. Hot Braised Chicken Wings<img src= "{{asset('storage/HotBraisedChickenWings.jpg') }}" class="inv">
  7 Chicken Sub Gum Chow Mein<img src= "{{asset('storage/ChickenSubGumChowMein.jpg') }}" class="inv">
  11. Beef With Broccoli<img src= "{{asset('storage/BeefWithBroccoli.jpg') }}" class="inv">  
  19. Chicken Curry<img src= "{{asset('storage/ChickenCurry.jpg') }}" class="inv">
  21. General Tso's Chicken<img src= "{{asset('storage/GeneralTsosChicken.jpg') }}" class="inv">
  23. Bourbon Chicken<img src= "{{asset('storage/BourbonChicken.jpg') }}" class="inv">
  </div>
  <div class="column">
  2. Sweet and Sour Chicken<img src= "{{asset('storage/SweetAndSourChicken.jpg') }}" class="inv">
  4. Sweet and Sour Shrimp<img src= "{{asset('storage/SweetAndSourShrimp.jpg') }}" class="inv">
  6. Chicken Lo Mein<img src= "{{asset('storage/ChickenLoMein.jpg') }}" class="inv">
  9. Green Pepper Steak<img src= "{{asset('storage/GreenPepperSteak.jpg') }}" class="inv">
  17. Moo Shu Pork<img src= "{{asset('storage/MooShuPork.jpg') }}" class="inv">
  20. Chung King Palace Pork<img src= "{{asset('storage/ChungKingPalacePork.jpg') }}" class="inv">
  22. Sesame Chicken<img src= "{{asset('storage/SesameChicken.jpg') }}" class="inv">
  24. Orange Chicken<img src= "{{asset('storage/OrangeChicken.jpg') }}" class="inv">
  </div>
</div>

<div id="div2">
Beef Teriyaki<img src= "{{asset('storage/BeefTeriyaki.jpg') }}" class="inv">
Egg Roll<img src= "{{asset('storage/EggRoll.jpg') }}" class="inv">
Oyster Chicken Wings<img src= "{{asset('storage/OysterChicken2.jpg') }}" class="inv">\
Spring Roll<img src= "{{asset('storage/SpringRoll.jpg') }}" class="inv">
</div>

<div id="div3">
Beef Chow Mein<img src= "{{asset('storage/BeefChowmein.jpeg') }}" class="inv">
Butterfly Shrimp<img src= "{{asset('storage/ButterflyShrimp.jpg') }}" class="inv">
Chung King Lo Mein<img src= "{{asset('storage/Chungkinglomein.jpg') }}" class="inv">
Crispy Duck<img src= "{{asset('storage/Crispyduck.jpg') }}" class="inv">
Shrimp With Lobster Sauce<img src= "{{asset('storage/ShrimpwithLobsterSauce.jpg') }}" class="inv">
Tofu With Vegatables<img src= "{{asset('storage/TofuWithVegatables.jpg') }}" class="inv">
</div>

<div id="div4">
Large Chung King Fried Rice<img src= "{{asset('storage/ChungKingFriedRice.jpg') }}" class="inv">
Small Pork Fried Rice<img src= "{{asset('storage/SmallPorkFriedRice.jpg') }}" class="inv">

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

function function2() {
  var x = document.getElementById("div2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function function3() {
  var x = document.getElementById("div3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function function4() {
  var x = document.getElementById("div4");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</html>

