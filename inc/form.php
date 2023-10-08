
<?php

   $firstname =   $_POST['firstname']??null;
   $lastname  =    $_POST['lastname']??null;
   $email     =    $_POST['email']??null;



$errors = [
    'firstnameError' => '',
    'lastnameError' => '',
    'emailError' => '',
];


if(isset($_POST['submit'])){
  $sql = "INSERT INTO users (firstname, lastname, email) 
  VALUES('$firstname','$lastname','$email')";
  
//تحقق الاسم الاول
      if(empty($firstname)){
        $errors['firstnameError'] = 'الاسم الاول مطلوب';
        }
        //تحقق الاسم الاخير
      if(empty($lastname)){
        $errors['lastnameError'] ='الاسم الاخير مطلوب';
        }
        //تحقق البريد الالكتروني
        if(empty($email)){
            $errors['emailError'] ='الايميل فارغ';
        }     
       elseif(!filter_var($email, FILTER_VALIDATE_EMAIL )){
            $errors['emailError'] = 'الايميل خاطأ';
        } 
        //تحقق لايوجد اخطاء
        if(!array_filter($errors)){
            $firstname =       mysqli_real_escape_string($conn, $_POST['firstname']);
            $lastname =        mysqli_real_escape_string($conn, $_POST['lastname']);
            $email =           mysqli_real_escape_string($conn, $_POST['email']);
  
            $sql = "INSERT INTO users(firstname, lastname, email) 
            VALUES('$firstname','$lastname','$email')";
          
          if (mysqli_query($conn,$sql)){
            header('Location:' . $_SERVER['PHP_SELF']);
        }
        else{
            echo 'Error: ' . mysqli_error($conn);
        }
        }
    }

        
 
