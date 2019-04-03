<!DOCTYPE html>
<html>
    <body>

        <form action="" method="post">

            <label>Origin:</label> <input type="text" name="o" placeholder="Enter Origin location" required> <br><br>
            <label>Destination:</label> <input type="text" name="d" placeholder="Enter Destination location" required> <br><br>
            <input type="submit" value="Calculate distance & time" name="submit"> <br><br>

        </form>

        <?php
            if(isset($_POST['submit'])){
                $origin = $_POST['o']; $destination = $_POST['d'];
                $search_url= 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo';
                $results =  file_get_contents($search_url);
                $results_array = json_decode($results, true);
                 // var_dump($results_array['rows'][0]['elements'][0]['distance']['text']);
                //$api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo");
                //$data = file_get_contents($api);
                //$data_array = json_decode($data,true);
        ?>
            <label><b>Distance: </b></label> <span><p><?php echo ($results_array['rows'][0]['elements'][0]['distance']['text'] ); ?></span> <br><br>
            <label><b>Time: </b></label> <span><p><?php echo ($results_array['rows'][0]['elements'][0]['duration']['text'] ); ?></span> <br><br>
            </p>
        <?php } ?>

    </body>
</html>
