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
<table>
@foreach($select as $key => $data)
    <tr>    
      <th>{{$data->id}}</th>
      <th>{{$data->item_Name}}</th>
      <th>{{$data->Price}}</th>
      <th ><form action"{{ route('placeOrder')}}" method="post">
      @csrf
            <div class="">
                <label for="quantity" class="sr-only">Quantity</label>
                <input type="number" name="quantity" id="quantity" placeholder="How many do you want (Numeric Value)?"
                class="@error('quantity') border-red-500 @enderror" value="">

                @error('quantity')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
      </th>
    </tr>
    <div>
@endforeach
</table>
<button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Place Order</button>
</form>
</div>
</div>

</html>
