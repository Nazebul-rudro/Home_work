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
    <form action="" method="post" class="form">
        <div class="mt-2">
        <label for="number">Input your Number : </label>
        <input type="number" name="number" id="number" placeholder="Input Number" class="form-control mt-2">
        </div>
        <div class="d-flex justify-content-end mt-3">
        <input type="submit" value="Result" class="btn btn-success">
        </div>
    </form>
  </div>
  <?php
  if(isset($_SERVER['REQUEST_METHOD'])=='POST'){
    $mark = $_POST['number'] ?? '';
    if( $mark >= 80 && $mark <=100){
        echo "Your gread A+";
    }elseif($mark >= 70 && $mark <=100){
        echo "Your gread A";
    }elseif($mark >= 60 && $mark <=100){
        echo "Your gread A-";
    }elseif($mark >= 50 && $mark <=100){
        echo "Your gread B";
    }elseif($mark >= 40 && $mark <=100){
        echo "Your gread C";
    }elseif($mark >= 33 && $mark <=100){
        echo "Your gread D";
    }elseif($mark >=0 && $mark <= 32){
        echo "Your gread F";
    }else{
        echo "Please Enter Right Number";
    }
  }
  ?>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>