<?php

if($_POST){

    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $years = $_POST['years'];

     if($years < 3)
    $interest_rate = (10/100 * $amount)*$years;

    else{
        $interest_rate =  (15/100 * $amount)*$years;
    }

    $leon_after_interests = $amount + $interest_rate ;

    $monthly = $leon_after_interests / ($years*12);

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row text-danger text-blold">
            <div class="col-12 text-center h1 mt-5 text-danger">
                Bank
            </div>
            <div class=" text-danger col-4 offset-4 my-5">
                <form method="post" class="tesxt-danger">
                    <div class="form-group  tesxt-danger">
                        <label for="number1">User Name</label>
                        <input type="text" name="name" id="name" class="form-control" <?php if(isset($name)) { ?> value="<?=$name?>" <?php } ?>>
                    </div>
                    <div class="form-group ">
                        <label for="number1">Loan Amount</label>
                        <input type="number" name="amount" id="amount" class="form-control" <?php if(isset($amount)) { ?> value="<?=$amount?>" <?php } ?>>
                    </div>
                    <div class="form-group ">
                        <label for="number1">Loan Years</label>
                        <input type="number" name="years" id="years" class="form-control" <?php if(isset($years)) { ?> value="<?=$years?>" <?php } ?>>
                    </div>


                    <div class="form-group">
                        <button class="btn btn-outline-danger rounded btn-sm "> Calculate</button>
                    </div>

                    <!-- _________________________________________ -->



                    <!-- ______________________________________________ -->


                </form>



                <div class="container">
                    <div class="row text-danger">
                        <div class="col-12">

                            <!-- ####################### table ####################33 -->

                            <?php if($_POST){  ?>
                            <table class="table caption-top ">
                                <caption>Calculation Of Your Loan Interest</caption>
                                <thead class="text-danger">
                                    <tr>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Interest Rate</th>
                                        <th scope="col">Loen After Interest</th>
                                        <th scope="col">Monthly</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   

                                    <tr>
                                      
                                        <td><?=isset($name) ? $name : "" ?></td>
                                        <td><?= isset($interest_rate)? $interest_rate : ""  ?></td>
                                        <td><?= isset($leon_after_interests)? $leon_after_interests : ""  ?></td>
                                        <td><?=isset($monthly)? $monthly : ""   ?></td>
                                    </tr>
                        
                                   
                                </tbody>
                            </table>

                            <?php  ;} ?>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>