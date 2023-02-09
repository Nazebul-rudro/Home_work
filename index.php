<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student information Add Button</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <!--  -->
  <div class="container">
    
      <form action="infromationTable.php" method="post" class="form p-5">
        <div class="bg-success py-4">
        <h3 class="text-center">Data Input Form</h3>
    </div>
        <label for="fname">First Name :</label>
        <input type="text" name="fname" id="fname" class="form-control">
        <label for="lname">Last Name :</label>
        <input type="text" name="lname" id="lname" class="form-control">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" class="form-control">
        <label for="roll">Roll : </label>
        <input type="number" name="roll" id="roll" class="form-control">
        <label for="address">Address : </label>
        <input type="text" name="address" id="address" class="form-control">
        <input type="checkbox" name="checkmark" id="" value="1"> Do you check me.
        <br>
        <input type="submit" value="Submit" class="form-control bg-success">
    </form>


  </div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>