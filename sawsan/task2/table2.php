
<?php

// #####################################3333
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female

$users = [
    (object)[
        'id' => 1,
        'id2' => 2,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'm'
        ],
        'activities' => [
            "school" => 'm',
            'home' => 'painting'
        ], 
        
        
    ],
    (object)[
        'id' => 1,
        'id2' => 2,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ], 
        
        
    ],
    (object)[
        'id' => 2,
        'id2' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 3,
        'id2' => 2,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],  
        (object)[
        'id' => null,
        'id2' => 9,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ], 
    (object)[
        'id' => null,
        'id2' => 5,
        'name' => 'sawsan',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    
    
    
];


$numOfRows=count($users);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body >



    <div class="contianer">
        <div class="row m-auto">

        <table class="table table-striped">
        <thead>
            <tr>

            <tr>

                <?php foreach($users[0] as $propertyOfUserss => $propertyOfUsersInner) { ?>
                <th><?= $propertyOfUserss ?></td>

                <?php } ?>   
            </tr>س

            </tr>
            </thead>


        <tbody>


                <?php for($i=0;$i<$numOfRows;$i++) { ?>
            <tr>

                <?php foreach($users[$i] as $propertyOfUsers => $valueInEachproperty) { 


                $ttype=gettype($valueInEachproperty);
                if($ttype== 'object' || $ttype=='array') 
                {
                foreach( $valueInEachproperty as $propertyOfValueInEachproperty => $innerInnerValue){

                if($propertyOfUsers=='gender'&&$innerInnerValue=='m') 
                $finall = 'male';

                elseif($propertyOfUsers=='gender'&&$innerInnerValue=='f')
                $finall = 'female';

                elseif($propertyOfUsers!='gender' ){
                $finall .= $innerInnerValue .=' ';
                                                                    }
                                                                }
                }

                else{
                $finall=$valueInEachproperty;
                }

                    ?>

      <td><?=$finall ?></td>

    <?php  $finall=''; }} ?>
     
            </tr>

    <?php  ?>
  
            </tbody>
            </table>

          
        </div>

    </div>

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>