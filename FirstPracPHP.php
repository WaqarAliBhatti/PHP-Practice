<?php
echo"Helo to PHP";
$firstname='Waqar';
$lastname='Ali';
$fulname=$firstname.' '.$lastname;
echo $fulname;

?>
<html>
    <head>
        <title>First PHP Prac</title>
    </head>
    <body>
        <h1>Here We go with PHP</h1>
        <h2>Something Amazing on Head</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quam,<br> repellendus veniam, velit eligendi quaerat voluptatem consequuntur facere <br> distinctio corporis ipsam qui recusandae iusto at voluptate vel <br> architecto modi deleniti nobis inventore ut magnam fugiat rerum? Molestias <br> ab quam et, consequatur nulla nostrum veniam, harum, dignissimos <br> corporis a quidem exercitationem doloribus reprehenderit aperiam saepe?<br> Officiis nostrum animi dicta quo harum libero fugiat vel distinctio nesciunt <br> iste magni nam, assumenda architecto minus nulla possimus et amet <br> voluptate natus qui eaque corrupti non aliquam neque. Inventore, reiciendis <br> itaque repellat repellendus pariatur illo, porro, maiores perspiciatis <br> eos odit iusto voluptatibus atque facilis ex?</p>
    

        <?php
       $a=5;
       $b=6;
       echo "Addition of ${a} and ${b} is ".$a+$b;
       echo "\nSubtraction of ${a} and ${b} is ".$a-$b; 
       echo "\nDivision of ${a} and ${b} is ".$a/$b; 
       echo "\nMultiplication of ${a} and ${b} is ".$a*$b;
       echo "\nPower of ${a} and ${b} is ".$a**$b; 
       $names=array("Waqar","Zorain","Soyal","Abi");
       if($a*$b>100){
        echo "Multiple of A and B is greater than 100";
       }else{
        echo "Multiple of A and B is greater than 100";

       }
       $age=20;
       switch($age){
        case '12':
            echo "Age is 12";
            break;
        case '20':
            echo "Age is 20";
            break;
        case '17':
            echo "Age is 17";
            break;
        case '19':
            echo "Age is 19";
            break;    
            }
    
       echo "\n".$names[0];
       //var_dump($names);
       for($i=0;$i<=10;$i++)
       {
        echo "For Loop is running ${i} times";
       }
    $j = 0;
    while($j<5){
        echo "In a While Loop ${j}";
        $j++;

    }



        ?>
    </body>

</html>