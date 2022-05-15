<?php
// Design tis page first
// otput the table 
// output spicific message if the feedback is good , 
//else . inform him we will call you back , using number stored in the session
session_start();
$answerQ1=0;
$answerQ2=0;
$answerQ3=0;
$answerQ4=0;
$answerQ5=0;
$totalReview=0;

$phone=0;


//question1 answers
if($_SESSION['question1'] == 0 )
$answerQ1='Bad';
elseif($_SESSION['question1'] ==3)
$answerQ1='Good';
elseif($_SESSION['question1'] ==5)
$answerQ1='veryGood';
elseif($_SESSION['question1'] == 10)
$answerQ1='Excellent';

//question2 answers
if($_SESSION['question2'] == 0 )
$answerQ2='Bad';
elseif($_SESSION['question2'] ==3)
$answerQ2='Good';
elseif($_SESSION['question2'] ==5)
$answerQ2='veryGood';
elseif($_SESSION['question2'] == 10)
$answerQ2='Excellent';


//question3 answers
if($_SESSION['question3'] ==0)
$answerQ3='Bad';
elseif($_SESSION['question3'] ==3)
$answerQ3='Good';
elseif($_SESSION['question3'] ==5)
$answerQ3='veryGood';
elseif($_SESSION['question3'] == 10)
$answerQ3='Excellent';


//question4 answers
if($_SESSION['question4'] ==0)
$answerQ4='Bad';
elseif($_SESSION['question4'] ==3)
$answerQ4='Good';
elseif($_SESSION['question4'] ==5)
$answerQ4='veryGood';
elseif($_SESSION['question4'] == 10)
$answerQ4='Excellent';

//question5 answers
if($_SESSION['question5'] ==0)
$answerQ5='Bad';
elseif($_SESSION['question5'] ==3)
$answerQ5='Good';
elseif($_SESSION['question5'] ==5)
$answerQ5='veryGood';
elseif($_SESSION['question5'] == 10)
$answerQ5='Excellent';

//Total
if($_SESSION['totalReview'] >25)
$totalReview='Good';
else{
    $totalReview='Bad';  
}

//$_SESSION['phone']
$phone=$_SESSION['phone'];

if($_SESSION['totalReview']< 25){

    $actionTaken="<p class=text-danger font-weight-bold'> We will call you later on this phone number  $phone</p>";

}
else{
    
    $actionTaken="<p class='text-danger font-weight-bold'> Thank You for your Trust </p>";

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
                        <caption>Your Feedback </caption>
                        <thead class="text-danger ">
                            <tr>
                                <th scope="col">َQUESTION</th>
                                <th scope="col">REVIEWS</th>
                         

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Are you satisfied with the level of cleanliness?</td>
                                <td><?= $answerQ1 ?></td>
  
                            </tr>
                            <tr>
                                <td>Are you satisfied with the service prices?</td>
                                <td><?= $answerQ2 ?></td>
   
                            </tr>
                            <tr>
                                <td>Are you satisfied with the nursing service?</td>
                                <td><?= $answerQ3 ?></td>
                       
                            </tr>
                            <tr>
                                <td>Are you satisfied with the level of the doctor?</td>
                                <td><?= $answerQ4 ?></td>
                        
                            </tr>
                            <tr>
                                <td>Are you satisfied with the calmness in the hospital?</td>
                                <td><?= $answerQ5 ?></td>
                           
                            </tr>
                            <tr>
                                <td>TOTAL REVIEW</td>
                                <td><?= $totalReview ?></td>
                           
                            </tr>

                            <tr>
                                
                                <td colspan="2" class="text-center font-weight-bold"><?=$actionTaken?></td>
                           
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