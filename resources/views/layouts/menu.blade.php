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

    </style>
    <body>
        <select id="target">
            <option value="">Menu Selection</option>
            <option value="content_1">Daily Specials</option>
            <option value="content_2">Lunch Combinations</option>
            <option value="content_3">Dinner Menu</option>
            <option value="content_4">Favorites</option>
        <select>

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
                <tr>
                    <th colspan='2'>Hot and Spicy</th>
                </tr>
                <tr>
                    <td>Kun Bao Beef</td>
                    <td></td>
                </tr>

            </table>

        </div>

        <div id="content_4" class="inv">

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
