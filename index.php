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
        include('Student.php'); // Create Student.php file
        
        // Create first student. This shows first name, last name, place of work, email and average grade
        $students = array();
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // Create second student. This shows first name, last name, place of work, email and average grade
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // Create third student. This shows first name, last name, place of work, email and average grade
        $third = new Student();
        $third->surname = "Choi"; 
        $third->first_name = "Hanuk";
        $third->add_email('work','12fdamb@gmail.com');
        $third->add_grade(100);
        $third->add_grade(100);
        $third->add_grade(100);
        $students['h789'] = $third;
        
        // It diplays student name, average grade, place of work, email address. It displays students by aphabetical order of first name.
        ksort($students); // one of the many sort functions

        // This is the array of students
        foreach($students as $student)
            echo $student->toString();     
        ?>
    </body>
</html>
