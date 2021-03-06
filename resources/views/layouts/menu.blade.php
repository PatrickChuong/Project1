<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
@include ('layouts.header')

<style>
.inv {
    display: none;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px; 
}
table{
    padding:5px;
}

div.div1{
    padding: 46px;
}
.column {
  padding: 5px;
}

.row {
  position:relative;
  display: flex;
  font-weight:bold;
}
</style>
<div class="div1">
    <body>
        <select id="target">
            <option value="">Menu Selection</option>
            <option value="content_1">Daily Specials</option>
            <option value="content_2">Lunch Combinations</option>
            <option value="content_3">Dinner Menu - Hot and Spicy</option>
            <option value="content_4">Dinner Menu - Seafood</option>
            <option value="content_5">Dinner Menu - Beef</option>
            <option value="content_6">Dinner Menu - Pork</option>
            <option value="content_7">Dinner Menu - Master Chef's Selection</option>
            <option value="content_8">Dinner Menu - Poultry</option>
            <option value="content_9">Favorites</option>
        </select>

        <div id="content_1" class="inv">
            <table style="width=100%">
                <tr>
                    <th colspan="2">Daily Specials</th>
                </tr>
                <tr style="text-align:center">
                    <th colspan="2">$6.90</th>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>Moo Shu Pork (Hot&Spicy)</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>Chicken Cashew (Hot&Spicy)</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Green Pepper Steak</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>Beef with Broccoli</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>Chicken with Chinese Vegatables</td>
                </tr>
            </table>
        </div>
        <div id="content_2" class="inv">
            <table>
            <tr>
                <th colspan="2">Luncheon Combinations $6.29</th>
            </tr>
            <tr>
                <th colspan="2">Monday-Saturday: 11:00AM - 4:30PM</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Lemon Chicken</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sweet & Sour Chicken (or Pork)</td>
            </tr>
            <tr>
                <td>3</td>
                <td>War Su Gai</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Sweet & Sour Shrimp (or Crab)</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Hot Braised Chicken Wings</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Chicken, Pork or Beef Chow Mein (or Lo Mein)</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Chicken Sub Gum Chow Mein</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Egg Foo Young</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Green Pepper Steak</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Beef with Chinese Vegatables</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Beef with Broccoli</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Shrimp Chow Mein</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Shrimp Almond Ding</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Moo Goo Gai Pan</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Chicken Almond Ding</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Beef Almond Ding</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Moo Shu Pork (or Chicken) (Hot&Spicy)</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Chicken with Cashews (Hot&Spicy)</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Chicken Curry (Hot&Spicy)</td>
            </tr>
            <tr>
                <td>20</td>
                <td>Chung King Palace Pork (Hot&Spicy)</td>
            </tr>
            <tr>
                <td>21</td>
                <td>General Tso's Chicken (Hot&Spicy)</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Sesame Chicken (Hot&Spicy)</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Bourbon Chicken</td>
            </tr>
            <tr>
                <td>24</td>
                <td>Orange Chicken</td>
            </tr>
            <tr>
                <th colspan="2">All Combinations include Fried Rice (or Steamed/White Rice) and an Egg Roll</th>
            </tr>
            <tr>
                <th colspan="2">Dinner Combinations - $7.29</th>
            </tr>
            <tr>
                <th colspan="2">Carry-Out Only: 4:30PM - 9:00PM</th>
            </tr>
            </table>

        </div>

        <div id="content_3" class="inv">
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu as $menu)
                        <tr>
                            <td>{{$menu->item_Name}}</td>
                            <td>{{$menu->desc}}</td>
                            <td>{{$menu->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="content_4" class="inv">
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu2 as $menu2)
                        <tr>
                            <td>{{$menu2->item_Name}}</td>
                            <td>{{$menu2->desc}}</td>
                            <td>{{$menu2->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div id="content_5" class="inv">
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu3 as $menu3)
                        <tr>
                            <td>{{$menu3->item_Name}}</td>
                            <td>{{$menu3->desc}}</td>
                            <td>{{$menu3->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="content_6" class="inv">
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu4 as $menu4)
                        <tr>
                            <td>{{$menu4->item_Name}}</td>
                            <td>{{$menu4->desc}}</td>
                            <td>{{$menu4->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="content_7" class="inv">
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu5 as $menu5)
                        <tr>
                            <td>{{$menu5->item_Name}}</td>
                            <td>{{$menu5->desc}}</td>
                            <td>{{$menu5->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="content_8" class="inv">
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu6 as $menu6)
                        <tr>
                            <td>{{$menu6->item_Name}}</td>
                            <td>{{$menu6->desc}}</td>
                            <td>{{$menu6->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="content_9" class="inv">
        <div class="row">
            <div class="column">
            <table style="width=100%">
                <tr>
                    <th colspan="3">Fried Rice</th>
                </tr>
                <tr>
                    <td></td>
                    <td>Small</td>
                    <td>Large</td>
                </tr>
                <tr>
                    <td>Pork or Chicken</td>
                    <td>$5.25</td>
                    <td>$7.95</td>
                </tr>
                <tr>
                    <td>Shrimp or Beef</td>
                    <td>$5.65</td>
                    <td>$8.55</td>
                </tr>
                <tr>
                    <td>Chung King Palace</td>
                    <td>$5.65</td>
                    <td>$8.55</td>
                </tr>
            </table>
            </div>

            <div class="column">
            <table style="width=100%">
                <tr>
                    <th colspan="2">Soups</th>
                </tr>
                <tr>
                    <td>Wonton</td>
                    <td>$2.95</td>
                </tr>
                <tr>
                    <td>Hot & Sour</td>
                    <td>$3.29</td>
                </tr>
                <tr>
                    <td>Chinese Vegatables</td>
                    <td>$2.95</td>
                </tr>
                <tr>
                    <td>Chicken Rice</td>
                    <td>$2.95</td>
                </tr>
                <tr>
                    <td>Egg Drop</td>
                    <td>$2.95</td>
                </tr>
                <tr>
                    <td>San Shen</td>
                    <td>$3.29</td>
                </tr>
                <tr>
                    <td>Chicken Noodle</td>
                    <td>$2.95</td>
                </tr>
            </table>
            </div>


            <div class="column">
            <table style="width=100%">
                <tr>
                    <th colspan="2">Beverages</th>
                </tr>
                <tr>
                    <td>Hot Tea</td>
                    <td>$2.10</td>
                </tr>
                <tr>
                    <td>Soft Drink</td>
                    <td>$2.10</td>
                </tr>
                <tr>
                    <td>Milk</td>
                    <td>$2.10</td>
                </tr>
                <tr>
                    <td>Ice Tea</td>
                    <td>$2.10</td>
                </tr>
            </table>
            </div>

            <div class="column">
            <table style="width=100%">
                <tr>
                    <th colspan="2">Appetizers</th>
                </tr>
                <tr>
                    <td>Steamed Dumplings or Pot Stickers (8)</td>
                    <td>$5.55</td>
                </tr>
                <tr>
                    <td>Barbecued Pork</td>
                    <td>$6.25</td>
                </tr>
                <tr>
                    <td>Crab Rangoon</td>
                    <td>$4.55</td>
                </tr>
                <tr>
                    <td>Chicken Wings</td>
                    <td>$5.75</td>
                </tr>
                <tr>
                    <td>Beef Teriyaki</td>
                    <td>$6.75</td>
                </tr>
                <tr>
                    <td>Fried Wonton</td>
                    <td>$4.55</td>
                </tr>
                <tr>
                    <td>Egg Roll</td>
                    <td>$1.30</td>
                </tr>
                <tr>
                    <td>Pupu Platter*</td>
                    <td>$6.95</td>
                </tr>
            </table>
            <p>*Per Person, Minimum 2 People</p>
            <p>*Barbecued Pork,Fried Wonton Chicken Wings, Sweet and Sour Chicken, Beef Teriyaki and Egg Roll</p>
            <div>
        </div>
        </div>

        
        
        <script>
            document
                .getElementById('target')
                .addEventListener('change', function () {
                    'use strict';
                    var vis = document.querySelector('.vis'),   
                        target = document.getElementById(this.value);
                    if (vis !== null) {
                        vis.className = 'inv';
                    }
                    if (target !== null ) {
                        target.className = 'vis';
                    }
            });
        </script>
    </body>
</div>
