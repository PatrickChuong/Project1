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
  position:relative;
  top:50px;
  display: flex;
  font-weight:bold;
}

#div2, #div3, #div4{
  position:relative;
  top:50px;
  font-weight:bold;
  padding: 5px;

}

p{
  position:relative;
  top:50px;
}
button
{
  position:relative;
  top:50px;
  padding: 5px;
}


</style>
<p>Please Select a Button to show photos</p>

<button class="bg-blue-500 text-white px-3 py-2 rounded font-medium" onclick="function1()">Lunch Combination</button>
<button class="bg-blue-500 text-white px-3 py-2 rounded font-medium" onclick="function2()">Appetizers</button>
<button class="bg-blue-500 text-white px-3 py-2 rounded font-medium" onclick="function3()">Dinner Entrees</button>
<button class="bg-blue-500 text-white px-3 py-2 rounded font-medium" onclick="function4()">Others</button>
<div class="row">
    <div id="div1" class="column">
      1. Lemon Chicken<img src= "{{asset('storage/LemonChicken.jpg') }}" class="inv">
      3. War Su Gai<img src= "{{asset('storage/WarSuGai.jpg') }}" class="inv">
      5. Hot Braised Chicken Wings<img src= "{{asset('storage/HotBraisedChickenWings.jpg') }}" class="inv">
      7. Chicken Sub Gum Chow Mein<img src= "{{asset('storage/ChickenSubGumChowMein.jpg') }}" class="inv">
      11. Beef With Broccoli<img src= "{{asset('storage/BeefWithBroccoli.jpg') }}" class="inv">  
      19. Chicken Curry<img src= "{{asset('storage/ChickenCurry.jpg') }}" class="inv">
      21. General Tso's Chicken<img src= "{{asset('storage/GeneralTsosChicken.jpg') }}" class="inv">
      23. Bourbon Chicken<img src= "{{asset('storage/BourbonChicken.jpg') }}" class="inv">
    </div>
    <div id="div1-1" class="column">
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
Oyster Chicken Wings<img src= "{{asset('storage/OysterChicken2.jpg') }}" class="inv">
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
  var x = document.getElementById("div1");
  x.style.display = "none";
  var x1 = document.getElementById("div1-1");
  x1.style.display = "none";
  var x2 = document.getElementById("div2");
  x2.style.display = "none";
  var x3 = document.getElementById("div3");
  x3.style.display = "none";
  var x4 = document.getElementById("div4");
  x4.style.display = "none";

function function1() {
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  if (x1.style.display === "none") {
    x1.style.display = "block";
  } else {
    x1.style.display = "none";
  }
}

function function2() {
  if (x2.style.display === "none") {
    x2.style.display = "block";
  } else {
    x2.style.display = "none";
  }
}

function function3() {
  if (x3.style.display === "none") {
    x3.style.display = "block";
  } else {
    x3.style.display = "none";
  }
}

function function4() {
  if (x4.style.display === "none") {
    x4.style.display = "block";
  } else {
    x4.style.display = "none";
  }
}
</script>


</html>

