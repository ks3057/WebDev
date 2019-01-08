<!DOCTYPE html>
<html>
    <body>
<!--
        <?php echo "It works"; ?>

        <?php 
        $var1 = "KS";
        echo $var1; 
        ?>
        <br>
-->

        <?php 
//        $numbers = array(1,2,3,4);
//        print_r($numbers);
//        array_pop($numbers);
//        array_shift($numbers);
//        echo count($numbers);
//        print_r($numbers);
        
//        foreach($numbers as $number){
//            echo 'number: '.$number.'<br>';
//        }
        
//        $ages = array(
//        'mary'=> 25,
//        'kiru'=> 26
//        );
//            foreach($ages as $name => $age){
//                echo $name.' is '.$age.' years old.<br>';
//            }
        
        ?>
        
        
        <?php 
        function greet($greeting, $name='John'){
            echo $greeting.' '.$name;
        }
        
        
        greet('Good night', 'Kiru');
        ?>
        
<!--
        <?php 
        for ($i = 0; $i <5; $i++){
            echo $i.'<br>';
        }
        ?> 
-->
    </body>
</html>