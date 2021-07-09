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
    top:100px;
}

th, td{
    padding:10px;
}
</style>


@include ('layouts.header')
<div class="div1">
    <form action"{{ route('placeOrder')}}" method="post" id="placeOrder">
        @csrf
        <div class="form-group">
            <select class="form-control" name="menu_item">
                @foreach($menu as $menu)
                <option value="{{$menu->id}}">{{$menu->item_Name}} {{$menu->price}}</option>
                @endforeach
                <select name="quantity">
                    <input type="number" name="quantity" id="quantity" placeholder="How many do you want (Numeric Value)?"</input>
                </select>

            </select>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" onclick="add()" name="count">Place Order</button>
                <input type="hidden" name="count" id="count" value="0"></input>
    </form>
</div>

<script>
var num = 1;
function add()
{
      //e.preventDefault();
      num=num+1;
      document.getElementById('count').value = num;
      //document.getElementById('placeOrder').submit();
}
</script>

@if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong></strong> {{ Session::get('message', '') }}
    </div>
@endif

</html>
