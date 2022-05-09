<?php
$message = '';
$message2='';


if ($_POST) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];
    $number4 = $_POST['number4'];
    $number5 = $_POST['number5'];

    $total=$number1 + $number2 +$number3 + $number4 + $number5;
    $message =(($total)/500)*100 ;
     
    if($message>=90 ) 
    $message2="A";

    elseif($message>=80 && $message<90) 
    $message2="B";

    elseif($message>=70 && $message<80) 
    $message2="C";

    elseif($message>=60 && $message<70) 
    $message2="D";

    elseif($message>=40 && $message<60) 
    $message2="E";

    elseif($message<40) 
    $message2="F";


    
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Max And Min </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5 text-danger">
                  Grades
            </div>
            <div class="col-4 offset-4 my-5">
                <form method="post">
                    <div class="form-group">
                        <label for="number1">Number 1</label>
                        <input type="number" name="number1" id="national_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number2">Number 2</label>
                        <input type="number" name="number2" id="national_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number3">Number 3</label>
                        <input type="number" name="number3" id="national_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number4">Number 4</label>
                        <input type="number" name="number4" id="national_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number5">Number 5</label>
                        <input type="number" name="number5" id="national_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger rounded btn-sm "> Ckeck </button>
                    </div>

                    <!-- _________________________________________ -->
                    
                     <!-- <?php 
                        echo $message;
                        if(isset( $message )){
                            echo "<h2>This is the Max number <h2>". $message;
                        } 
                        echo $message ?? "";
                    ?>  -->
                    
                    <!-- ______________________________________________ -->


                </form>

                

          <div class="container">
          <div class="row">
              <div class="col-6 offset-3  mt-5">
                <ul class="alert alert-success">
                    <li>
                    Your Total Result : <?= $message ?> 
                    </li>
                    <li class="text-danger">
                    The Total Grade : <?= $message2  ?> 
                    </li>
        
                </ul>
              </div>
          </div>
      </div>
           

            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>