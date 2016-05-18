<?php
	require_once "create.logic.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./common/main.css">
</head>
<body>


	<h1>Nieuwe verjaardag</h1>


	<form method="post">
	<label class="lab"> Persoon:</label> 
        <input type="text" id="persoon" name="person">
        <br>

        <label class="lab">Datum:</label>
        <row>
            <column cols="3">
                 <select name="day">
                   
                <option value='01'>01</option>
                <option value='02'>02</option>
                <option value='03'>03</option>
                <option value='04'>04</option>
                <option value='05'>05</option>
                <option value='06'>06</option>
                <option value='07'>07</option>
                <option value='08'>08</option>
                <option value='09'>09</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
                </select>                
            </column>
            <column cols="3">

                <select name="month">
               
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">Mei</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Okt</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
                </select>               
            </column>

            <column cols="6">

            <?php

              $currently_selected = date('Y'); 
              $earliest_year = 1960; 
              $latest_year = date('Y'); 

              print '<select name= "year">';
              foreach ( range( $latest_year, $earliest_year ) as $i ) {
                    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
              }
              print '</select>';
              ?>
        </column>
        </row>
        <input type="submit" class="button" value="Submit" />
</form>
</body>
</html>