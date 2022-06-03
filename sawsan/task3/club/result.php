<?php
// I want to store the Subscriber name and the number of the famile members to can access it on other pages (so I have to use session)
// when click sumbit , head to games page

session_start();


// if($_SERVER['REQUEST_METHOD'] == "POST"){
  
//         $_SESSION['members[]'] = $_POST['members[]'];
//         $_SESSION['football[]'] = $_POST['football[]'];
//         $_SESSION['swimming[]'] = $_POST['swimming[]'];
//         $_SESSION['vollyball[]'] = $_POST['vollyball[]'];
//         $_SESSION['others[]'] = $_POST['others[]'];


//     }

    //$_SESSION['mainMember'] = $_POST['mainMember'];
    //$_SESSION['numberOfMembers'] = $_POST['numberOfMembers'];

    //$mainMember=$_SESSION['mainMember'];
  
// for($i=0 ; $i<$_SESSION['numberOfMembers'] ; $i++){

//    echo $_SESSION['members'][$i] ."<br>";
//    echo $_SESSION['football'][$i]."<br>";
//    echo $_SESSION['swimming'][$i]."<br>";
//    echo $_SESSION['vollyball'][$i]."<br>";
//    echo  $_SESSION['others'][$i] ."<br>";

print_r($_SESSION['members']);
print_r($_SESSION['football']);
print_r($_SESSION['swimming']);
print_r($_SESSION['vollyball']);
print_r($_SESSION['others']);

 //  $_SESSION['football'][$i]." "$_SESSION['swimming'][$i]." "$_SESSION['vollyball'][$i]." "$_SESSION['others'][$i]
 
    // }
       




?>

<!doctype html>
<html lang="en">

<head>
    <title>Hospital</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5 text-danger">
                Welcome To Our Club
            </div>
            <div class="col-4 offset-4 my-5 text-danger">
                <form method="post">
                <?php if(isset($_SESSION['mainMember'])){  ?>
                                <table class="table caption-top ">

                                    <thead class="text-danger">
                                        <tr>
                                            <th scope="col">Subscriber</th>
                                            <th scope="col"><?= $_SESSION['mainMember'] ?></th>
                    
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php for($i=0 ; $i<$_SESSION['numberOfMembers'] ; $i++){  ?>

                                        <tr>

                                            <td><?=$_SESSION['members'][$i]?>                                     
                                            </td>

                                            <td><?=$_SESSION['football'][$i]."  " .$_SESSION['swimming'][$i]."  ".$_SESSION['vollyball'][$i]."  ".$_SESSION['others'][$i]."  "?>
                                            </td>

                                            <td>                                  
                                            </td>

                                        </tr>

                                        <?php   } } ?>


                                    

                                    </tbody>
                                </table>

                </form>

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