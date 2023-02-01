<table>
    <?php for($i=1; $i<13;$i++){ ?>
        <tr>
            <td>2 x <?php echo  $i; ?></td>
            <td>=</td>
            <td><?php echo 2* $i; ?></td>
        </tr>
    <?php } ?>
 </table> 

 <form method="post">
  <label for="start">Start number:</label><br>
  <input type="text" id="start" name="start"><br>
  <label for="end">End number:</label><br>
  <input type="text" id="end" name="end"><br>
  <input type="submit" value="Submit">
</form> 

<?php

// Check if the form has been submitted
if (isset($_POST['start']) && isset($_POST['end'])) {
  // Get the start and end numbers from the form
  $start = $_POST['start'];
  $end = $_POST['end'];

  // Loop through the numbers
  for ($i = $start; $i <= $end; $i++) {
    // Check if the number is odd or even
    if ($i % 2 == 0) {
      // Number is even
      echo "$i is even<br>";
    } else {
      // Number is odd
      echo "$i is odd<br>";
    }
  }


}

//http://localhost/public_html/index.php
 
 
