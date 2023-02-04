<?php

include_once ('conn.php');
$sql= "SELECT * FROM shree";
$query =mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background: #CCCCCC">
    <div class="row">
    <div class="col">
      <div class="container">
      <div class="card mt-5">
        <div class="card-header">
          <form action="pdf_gen.php" method="POST">
            <button type="submit" name="btn_pdf" class="btn btn-success">PDF</button>
          </form>  
        </div>
        <div class="card-body">
        <table class="table table-striped">  
        <tr>
            <th>BILL NUMBER</th>
            <th>Date</th>
            <th>DIVISTION</th>
            <th>TOTLA</th>
            <th></th>
          </tr>
            <?php
            while($row=mysqli_fetch_assoc($query))
            {
              ?>
              <tr>
                <td><?php echo $row['Bill Number'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['date'] ?></td>
              </tr>
              <?php
            }
            ?>
        </table>
        </div>
      </div>
      </div>      
    </div> 
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>