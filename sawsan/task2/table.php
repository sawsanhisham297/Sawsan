
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
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
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
//echo $numOfRows .'<br>';
// $numOfCoulms=count($users[0]);
// echo $numOfCoulms .'<br>';
// $x=0;
// foreach($users[0] as $property2 => $value2) { 
//     $x ++;
// } 


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



    <!-- #####################################################3 -->

      <div class="contianer">
          <div class="row m-auto">

          <table class="table table-striped">
  <thead>
    <tr>

    <!-- #####################3 -->

    
    <!-- </*?php foreach($users[0]as $property => $value){ ?>
    <th scope="col"></*?$property ?></th>
    
   </*?php } ?> -->


       <?php foreach($users[0]as $property => $value) 
      echo $property .'<br>';
    ?>



    <tr>

    <?php foreach($users[0] as $property2 => $value2) { ?>
      <th><?= $property2 ?></td>

      <?php } ?>
     
    </tr>


    
  

<!-- ########################################33 -->
    


    <!-- $users[0]->id -->
    



    </tr>
  </thead>

  <!-- ####################################### -->
  <tbody>


    </tr> 

<?php for($i=0;$i<$numOfRows;$i++) { ?>
    <tr>

    <?php foreach($users[$i] as $property2 => $value2) { 

        // if($property2=='id')
        // $final=$value2;
        //  else if($property2 == 'name')
        // $final=$value2;

        //  else if($property2 == 'gender'){
        //     if(($users[0]-> gender)=='m')
        //     $final=='male';
        //     else {
        //     $final=='female';
        //     }
        // }
        // foreach( $users[$i]->[$propert2] as $property33 => $value33) {
                
        //     $final=$value33;
               
       // foreach($users[$i]$property2  as $propertyyy => $value3)
          $ttype=gettype($value2);
       if($ttype== 'object' || $ttype=='array') 
       {
         foreach( $value2 as $propertyyy => $value333){

           if($value333=='m') 
           $finall = 'male';

           elseif($value333=='f')
           $finall = 'female';

           elseif($value333 !='m' && $value333 !='f' ){
            $finall .= $value333 .=' ';
           }

         

         }
        }

        else{
            $finall=$value2;
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