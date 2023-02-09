<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Math Function</title>
  </head>
  <body>
    

    <div class="container">
        <form action="" method="post" class="form">
            <div class="mt-3">
                <h3 class="text-center">Math Calculator</h3>
            </div>
            <div>
                <label for="first_num">First Number</label>
                <input type="text" name="first_num" id="first_num" class="form-control">
            </div>
            <div>
                <label for="second_num">Second Number</label>
                <input type="text" name="second_num" id="decond_num" class="form-control">
            </div>
            
            
            <div class="d-flex justify-content-end mt-2">
                <button class="btn btn-warning mx-2" name="sumbtn">Sum</button>
                <button class="btn btn-primary mx-2" name="subbtn">Subtraction</button>
                <button class="btn btn-success mx-2" name="mulbtn">Multiplication</button>
                <button class="btn btn-danger mx-2" name="divbtn">Division</button>
            </div>
        </form>
    </div>


    <div class="text-center">
        <?php
        $num1 = $_POST['first_num'] ?? "";
        $num2 = $_POST['second_num'] ?? "";

        // sum
            function doSum($num1, $num2){
                $num1 = (int)$num1;
                $num2 = (int) $num2;
                return  $num1 + $num2;
                                    
                                }

            function doSub($num1, $num2){
                            $num1 = (int)$num1;
                            $num2 = (int) $num2;
                            return  $num1 - $num2;
                                                
                                            }
            function doMul($num1, $num2){
                            $num1 = (int)$num1;
                            $num2 = (int) $num2;
                            return  $num1 * $num2;
                                                
                                            }
            function doDiv($num1, $num2){
                            $num1 = (int)$num1;
                            $num2 = (int) $num2;
                            if($num1 == 0){
                                $num2 = 0;
                            }else{
                                return  $num1 / $num2 ;
                            }
                            
                                                
                                            }

        if(array_key_exists('sumbtn', $_POST)) {
            echo "Total Sum = ". doSum($num1, $num2);
        }
        if(array_key_exists('subbtn', $_POST)){
            echo "Total Subtraction = ". doSub($num1, $num2);
        }
        if(array_key_exists('mulbtn', $_POST)){
            echo "Total Multipication = ". doMul($num1, $num2);
        }
        
        if(array_key_exists('divbtn', $_POST)){
           
                echo "Total Division = ". doDiv($num1, $num2);
            
        }


        // class sum_machine{

        //     // function doSum($num1, $num2){
        //     //     $num1 = (int)$num1;
        //     //     $num2 = (int) $num2;
        //     //     return (int) $num1 + $num2;
                
        //     // }  
            
        //     // function doSum($num1, $num2, $num3){
        //     //     $num1 = (int)$num1;
        //     //     $num2 = (int) $num2;
        //     //     $num3 = (int) $num3;
        //     //     return (int) $num1 + $num2 + $num3;
                
        //     // }

        // }
        
        ?>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>