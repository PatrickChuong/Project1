<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<style>

div.div2{
    position:relative;
    top:100px;
}

th, td{
    padding:10px;
}
</style>



@include ('layouts.header')


<div class="div2">
<form action="{{ route('totalOrder')}}" method="post">
        @csrf
        <select name="total">
            <input type="number" name="total" id="total" placeholder="Which order ID do you want to total of?"</input>
        </select>
        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Find Total of Order ID</button>
    </form>
</div>

</html>
