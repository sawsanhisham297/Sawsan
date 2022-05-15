<?php
// Design this page first , using table in bootstrap with radio butto inbuts in the table
// when click submet , we should store the answers to get accessed in another page using session 
//make the logic for every click and the final calculation 
// and with submit , redirect you to result
session_start();
$answerQ1=0;
$answerQ2=0;
$answerQ3=0;
$answerQ4=0;
$answerQ5=0;
$totalReview=0;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // validation
    $errors = [];

    if(empty($_POST['question1'])){
        $errors['q1-required'] = "<div class='text-danger font-weight-bold'> Answer Q1 is Required </div>";
    }
    if(empty($_POST['question2'])){
        $errors['q2-required'] = "<div class='text-danger font-weight-bold'> Answer Q2 is Required </div>";
    }
    if(empty($_POST['question3'])){
        $errors['q3-required'] = "<div class='text-danger font-weight-bold'> Answer Q3 is Required </div>";
    }
    if(empty($_POST['question4'])){
        $errors['q4-required'] = "<div class='text-danger font-weight-bold'> Answer Q4 is Required </div>";
    }
    if(empty($_POST['question5'])){
        $errors['q5-required'] = "<div class='text-danger font-weight-bold'> Answer Q5 is Required </div>";
    }


    if(empty($errors)){
        // if no validation errors 

        //question1 answers
        if($_POST['question1']=='bad')
        $answerQ1=0;
        elseif($_POST['question1']=='good')
        $answerQ1=3;
        elseif($_POST['question1']=='veryGod')
        $answerQ1=5;
        elseif($_POST['question1']=='excellent')
        $answerQ1=10;


        //question2 answers
        if($_POST['question2']=='bad')
        $answerQ2=0;
        elseif($_POST['question2']=='good')
        $answerQ2=3;
        elseif($_POST['question2']=='veryGod')
        $answerQ2=5;
        elseif($_POST['question2']=='excellent')
        $answerQ2=10;

              //question3 answers
        if($_POST['question3']=='bad')
        $answerQ3=0;
        elseif($_POST['question3']=='good')
        $answerQ3=3;
        elseif($_POST['question3']=='veryGod')
        $answerQ3=5;
        elseif($_POST['question3']=='excellent')
        $answerQ3=10;

        //question4 answers
        if($_POST['question4']=='bad')
        $answerQ4=0;
        elseif($_POST['question4']=='good')
        $answerQ4=3;
        elseif($_POST['question4']=='veryGod')
        $answerQ4=5;
        elseif($_POST['question4']=='excellent')
        $answerQ4=10;


        //question5 answers
        if($_POST['question5']=='bad')
        $answerQ5=0;
        elseif($_POST['question5']=='good')
        $answerQ5=3;
        elseif($_POST['question5']=='veryGod')
        $answerQ5=5;
        elseif($_POST['question5']=='excellent')
        $answerQ5=10;


        $totalReview = $answerQ1 + $answerQ2 + $answerQ3 + $answerQ4 + $answerQ5 ;


        //echo $totalReview;

        $_SESSION['question1'] = $answerQ1;
        $_SESSION['question2'] = $answerQ2;
        $_SESSION['question3'] = $answerQ3;
        $_SESSION['question4'] = $answerQ4;
        $_SESSION['question5'] = $answerQ5;
        $_SESSION['totalReview'] = $totalReview;

        

   
       // $success = "<div class='alert alert-success text-center'> Thank You </div>";
        header('location:result.php');die;
    }
       
}

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
                Welcome To Our Hospital
            </div>
            <div class="col-10 m-auto pt-5 offset-4  text-danger">
                <form method="post">
                 
                    <table class="table caption-top table-striped table-hover ">
                        <caption>Needed Review </caption>
                        <thead class="text-danger ">
                            <tr>
                                <th scope="col">َQuestion</th>
                                <th scope="col">Bad</th>
                                <th scope="col">Good</th>
                                <th scope="col">Very Good</th>
                                <th scope="col">Excellent</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Are you satisfied with the level of cleanliness?</td>
                                <td><input type="radio" name="question1" id="bad" class="form-control" value="bad"></td>
                                <td><input type="radio" name="question1" id="good" class="form-control" value="good"></td>
                                <td><input type="radio" name="question1" id="veryGod" class="form-control" value="veryGod"></td>
                                <td><input type="radio" name="question1" id="excellent" class="form-control" value="excellent"></td>
                            </tr>
                            <?= $errors['q1-required'] ?? "" ?>
                            <tr>
                                <td>Are you satisfied with the service prices?</td>
                                <td><input type="radio" name="question2" id="bad" class="form-control" value="bad"></td>
                                <td><input type="radio" name="question2" id="good" class="form-control" value="good"></td>
                                <td><input type="radio" name="question2" id="veryGod" class="form-control" value="veryGod"></td>
                                <td><input type="radio" name="question2" id="excellent" class="form-control" value="excellent"></td>
                            </tr>
                            <?= $errors['q2-required'] ?? "" ?>
                            <tr>
                                <td>Are you satisfied with the nursing service?</td>
                                <td><input type="radio" name="question3" id="bad" class="form-control" value="bad"></td>
                                <td><input type="radio" name="question3" id="good" class="form-control" value="good"></td>
                                <td><input type="radio" name="question3" id="veryGod" class="form-control" value="veryGod"></td>
                                <td><input type="radio" name="question3" id="excellent" class="form-control" value="excellent"></td>
                            </tr>
                            <?= $errors['q3-required'] ?? "" ?>
                            <tr>
                                <td>Are you satisfied with the level of the doctor?</td>
                                <td><input type="radio" name="question4" id="bad" class="form-control" value="bad"></td>
                                <td><input type="radio" name="question4" id="good" class="form-control" value="good"></td>
                                <td><input type="radio" name="question4" id="veryGod" class="form-control" value="veryGod"></td>
                                <td><input type="radio" name="question4" id="excellent" class="form-control" value="excellent"></td>
                            </tr>
                            <?= $errors['q4-required'] ?? "" ?>
                            <tr>
                                <td>Are you satisfied with the calmness in the hospital?</td>
                                <td><input type="radio" name="question5" id="bad" class="form-control" value="bad"></td>
                                <td><input type="radio" name="question5" id="good" class="form-control" value="good"></td>
                                <td><input type="radio" name="question5" id="veryGod" class="form-control" value="veryGod"></td>
                                <td><input type="radio" name="question5" id="excellent" class="form-control" value="excellent"></td>
                            </tr>
                            <?= $errors['q5-required'] ?? "" ?>
                            <tr>
                                <td class="text-center text-danger font-weight-bold "  colspan="5"><input class="btn btn-outline-danger" type="Submit"
                                        name="result" id="result" class="form-control" value="Result"></td>
                            </tr>
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