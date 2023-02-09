<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student information Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <!--  -->
    
    <?php
    $count = 0;
    if(isset( $_SERVER["REQUEST_METHOD"]) == "POST"){
      $fname = $_POST['fname'] ?? '';
      $lname = $_POST['lname'] ?? '';
      $email = $_POST['email'] ?? '';
      $roll = $_POST['roll'] ?? '';
      $address = $_POST['address'] ?? '';
      $checkmark = $_POST['checkmark'] ?? '';
    }
    ?>

    <div class="container">
      <h3 class="text-center bg-warning">information Table</h3>

    <table class="table table-hover border">
    
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roll</th>
                <th>Address</th>
                <th>Checkbox</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td><?php echo ++$count ?? '' ?></td>
                <td><?php echo $fname .= $lname ?? '' ?></td>
                <td><?php echo $email ?? '' ?></td>
                <td><?php echo $roll ?? '' ?></td>
                <td><?php echo $address ?? '' ?></td>
                <td><?php echo $checkmark ?? '' ?></td>
            </tr>
        </tbody>
    </table>
    </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>