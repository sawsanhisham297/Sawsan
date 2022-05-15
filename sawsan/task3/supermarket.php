<?php
$x=0;
$y=0;
$total=0;



 if($_POST && isset($_POST['EnterProducts'])){


    $x=1;
    $z=0;
    $name = $_POST['name'];
    $city = $_POST['city'];
    $NumberProducts = $_POST['NumberProducts'];

    // $productName = $_POST['productName'];
    // $price = $_POST['price'];
    // $quantity = $_POST['quantity'];
    
 }

 if($_POST && isset($_POST['Receipt'] ) ){


    $z=0;
    $y=1;
    
    $name = $_POST['name'];
    $city = $_POST['city'];
    $NumberProducts = $_POST['NumberProducts'];


    //for($i=0 ; $i<$NumberProducts ; $i++){  
    $productName= $_POST['productName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    

   
  
 
  

    $z=1;
    $right="right";
    // $SubTotal = $price * $quantity;

    
    $totalSubTotal=0;
    for($i=0 ; $i<$NumberProducts ; $i++){ 

        $totalSubTotal += ($price[$i] * $quantity[$i]);
        } 
        echo $totalSubTotal;

        // print_r($_POST);
 //#####################################
        
         $total = $totalSubTotal;
     
        if($total <= 1000)
        $discount = (0*$total)/100;

        elseif($total >1000 && $total <=3000 )
        $discount = (10*$total)/100;

        elseif($total >3000 && $total <=4500)
        $discount = (15*$total)/100;

        elseif($total > 4500)
        $discount = (20*$total)/100;

      //  $discount = (20*100)/$total;
// ###############################333
 if($city == 'Cairo')
 $delevary=0;
 elseif($city == 'Giza')
 $delevary=30;
 elseif($city == 'Alex')
 $delevary=50;
 elseif($city == 'Other')
 $delevary=100;

 //#############################33

 $totalAfterDiscount=$total-$discount;

 $netTotal=$totalAfterDiscount + $delevary;




    



 }
 else{
     $worrning= "All field is required";
 }



?>

<!doctype html>
<html lang="en">

<head>
    <title>Supermarket </title>
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
                Supermarket
            </div>
            <div class=" text-danger col-4 offset-4 my-5">
                <form method="post" class="tesxt-danger">
                    <div class="form-group  tesxt-danger">
                        <label for="name">User Name</label>
                        <input type="text" name="name" id="name" class="form-control" <?php if(isset($name)) { ?>
                            value="<?=$name?>" <?php } ?>>
                    </div>
                    <div class="form-group ">
                        <label for="city">City</label>
                        <br>
                        <select id="city" name="city" class="form-control">



                            <option <?php  if(isset($city)&&$city=="Cairo") { echo "selected" ?> value="Cairo"
                                <?php } ?>>Cairo</option>
                            <option <?php if(isset($city)&&$city=="Giza") { echo "selected"  ?> value="Giza" <?php } ?>>
                                Giza</option>
                            <option <?php if(isset($city)&&$city=="Alex") { echo "selected" ?> value="Alex" <?php } ?>>
                                Alex</option>
                            <option <?php if(isset($city)&&$city=="Other") { echo "selected"  ?> value="Other"
                                <?php } ?>>Other</option>



                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="NumberProducts">Number Of Products</label>
                        <input type="number" name="NumberProducts" id="NumberProducts" class="form-control"
                            <?php if(isset($NumberProducts)) { ?> value="<?=$NumberProducts?>" <?php } ?>>
                    </div>


                    <div class="form-group">
                        <button class="btn btn-outline-danger rounded btn-sm " name="EnterProducts"> Enter
                            Products</button>
                    </div>

                    <!-- _________________________________________ -->



                    <!-- ______________________________________________ -->






                    <div class="container">
                        <div class="row text-danger">
                            <div class="col-12">

                                <!-- ####################### table ####################33 -->

                                <?php if(isset($_POST['EnterProducts'])){  ?>
                                <table class="table caption-top ">

                                    <thead class="text-danger">
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quntities</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(isset($_POST['EnterProducts'])){  ?>
                                        <?php for($i=0 ; $i<$NumberProducts ; $i++){  ?>

                                        <tr>




                                            <td><input type="text" name="productName[]" id="productName"
                                                    class="form-control">
                                            </td>






                                            <td><input type="number" name="price[]" id="price" class="form-control">
                                            </td>






                                            <td><input type="number" name="quantity[]" id="quantity"
                                                    class="form-control">
                                            </td>










                                        </tr>

                                        <?php   } ?>

                                        <?php   } ?>






                                    </tbody>
                                </table>

                                <div class="form-group">
                                    <button class="btn btn-outline-danger rounded btn-sm " name="Receipt">
                                        Receipt</button>
                                </div>

                                <?php   } ?>


                                <?= isset($worrning) ?    $worrning  :   $right ?>


                                <?php if(isset($_POST['Receipt'])){  ?>
                                <table class="table caption-top ">

                                    <thead class="text-danger">
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quntities</th>

                                            <th scope="col">Sub Total</th>

                                        </tr>
                                    </thead>
                                    <tbody >

                                        <?php if(isset($_POST['Receipt'])){  ?>
                                        <?php for($i=0 ; $i<$NumberProducts ; $i++){  ?>

                                        <tr>

                                            <td><?php if(isset($productName)) $productName[$i]  ?>
                                                <?=$productName[$i] ?>

                                            </td>

                                            <td><?php if(isset($price)) $price[$i] ?>
                                                <?=$price[$i] ?>
                                            </td>

                                            <td><?php if(isset($quantity)) $quantity[$i]?>
                                                <?=$quantity[$i] ?>

                                            <td><?php $price[$i]*$quantity[$i]  ?>
                                                <?=$price[$i]*$quantity[$i]   ?>


                                            </td>









                                        </tr>

                                        <?php   } ?>



                                        <tr>
                                            <td colspan="2" class="text-danger"> <b>Client Name</b> </td>
                                            <td colspan="2"> <?=$name?> </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="text-danger"> <b>City Name</b> </td>
                                            <td colspan="2"> <?=$city?> </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="text-danger"> <b>Total Price</b> </td>
                                            <td colspan="2"> <?=$total?> </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="text-danger"> <b>Discount</b> </td>
                                            <td colspan="2"> <?= $discount ?> </td>
                                        </tr>



                                        <tr>
                                            <td colspan="2" class="text-danger"> <b>Total After Discount</b> </td>
                                            <td colspan="2"> <?= $totalAfterDiscount ?> </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="text-danger"> <b> Delevary</b> </td>
                                            <td colspan="2"> <?=  $delevary ?> </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="text-danger"> <b>Net Total</b> </td>
                                            <td colspan="2"> <?= $netTotal ?> </td>
                                        </tr>

                                        <?php   } ?>

                                        <?php   } ?>










                                    </tbody>
                                </table>




                </form>


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