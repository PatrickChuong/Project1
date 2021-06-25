<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<style>
div.div1{
    position:relative;
    top:50px;
}

th, td{
    padding:10px;
}
</style>



@include ('layouts.header')
<div class="div1">
    <form action"{{ route('placeOrder')}}" method="post">
        @csrf
        <div class="form-group">
            <select class="form-control" name="item_id">
                @foreach($menu as $menu)
                <option value="{{$menu->id}}">{{$menu->item_Name}} {{$menu->Price}}</option>
                @endforeach
                <select name="quantity">
                    <input type="number" name="quantity" id="quantity" placeholder="How many do you want (Numeric Value)?"</input>
                </select>

            </select>

            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Place Order</button>
    </form>
</div>

</html>
