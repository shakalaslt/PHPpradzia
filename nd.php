<?php
    $plotis = 3;
    $gylis = 1.5;
 
    function getVolume($a, $b = 3, $c = 1.5) {
        return $a * $b * $c;
    }
    function getTrucks($volume, $t_volume) {
        $trucks = ceil($volume/$t_volume);
        return $trucks;
    }
    function getKaina($a, $b){
    
    	$kaina = $a * $b; 
    	return $kaina;
    }
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <title>9 Paskaita (PHP)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>9 Paskaita (PHP)</h1>
        </div>
    </div>
    <div class="container">
    <h2>Baseinų lentelė</h2>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                  <thead>
	                 <tr>
	                 <th colspan="4">Baseinas</th>
	                 <th colspan="4">Cisternos</th>	
	                 </tr> 
                    <tr>
                      <th rowspan="2">Ilgis</th>
                      <th rowspan="2">Plotis</th>
                      <th rowspan="2">Gylis</th>
                      <th rowspan="2">Tūris</th>
                      <th >10 m3</th>
                      <th>kaina</th>
                      <th>30 m3</th>
                      <th>kaina</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        for ($ilgis=1; $ilgis <= 50; $ilgis++) {

                        	$kaina10 = getKaina(getTrucks(getVolume($ilgis), 10),100);
                        	$kaina30 = getKaina(getTrucks(getVolume($ilgis), 30),250);

                        	$class10 ="";
                        	$class30 = "";

                        	if ($kaina10 < $kaina30){
                        		$class10 = "table-success";
                        	} else {
                        		$class30 = "table-success";
                        	}









                            echo "<tr><td>$ilgis</td><td>$plotis</td><td>$gylis</td>
                            <td>" . getVolume($ilgis) . "</td>
                            <td>" . getTrucks(getVolume($ilgis), 10) . "</td>
                            <td class='$class10'>" . $kaina10 . "</td>
                            <td>" . getTrucks(getVolume($ilgis), 30) . "</td>
                            <td class='$class30'>" . $kaina30 . "</td></tr>";
                        }
                    ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>