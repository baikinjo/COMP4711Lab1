<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php'); //recalls method from Student.php class

        $students = array(); //declare an array
        
        //first entry of the array provided by instructor
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //second entry of the array provided by instructor
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //third entry of the array custom-created
        $third = new Student();
        $third->surname = "Stark";
        $third->first_name = "Tony";
        $third->add_email('work', 'tstark@starkindustry.com');
        $third->add_grade(98);
        $third->add_grade(96);
        $third->add_grade(100);
        $students['t123'] = $third;
        
        //fourth entry of the array custom-created
        $fourth = new Student();
        $fourth->surname = "Baik";
        $fourth->first_name = "Injo";
        $fourth->add_email('work', 'ibaik@my.bcit.ca');
        $fourth->add_grade(60);
        $fourth->add_grade(70);
        $fourth->add_grade(80);
        $students['i123'] = $fourth;
        
        ksort($students); //sort by name
        
        //to call out all the list from the array
        foreach ($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
