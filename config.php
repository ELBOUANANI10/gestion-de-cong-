<?php 

//connect to database
$db=mysqli_connect('localhost','root','','congeeapp2');



$errors=array();
$name="";
$email="";

//Sign user up
if(isset($_POST['register'])){
    $name=htmlspecialchars(ucwords(trim($_POST['name'])));
    $email=htmlspecialchars(trim($_POST['email']));
    $password=md5($_POST['password']);
    $password2=md5($_POST['password2']);

    if(empty($name)){
        array_push($errors, "*Name is required");
    }
    if(empty($email)){
        array_push($errors, "*Email is required");
    }
    if(empty($password)){
        array_push($errors, "*Password is required");
    }
    if($password != $password2){
        array_push($errors, "*The two passwords do not match");
    }    
    if(count($errors)==0){
        $query="Insert Into users (name,email,password) values ('$name','$email','$password')";
        mysqli_query($db,$query);
        header('Location:login.php');
    }
}











//Log user in
if(isset($_POST['login'])){
    $email=htmlspecialchars(trim($_POST['email']));
    $password=md5($_POST['password']);

    if(empty($email)){
        array_push($errors, "*Email is required");
    }
    if(empty($password)){
        array_push($errors, "*Password is required");
    }  

    if(count($errors)==0){
        $query="Select * from users where email='$email' && password='$password'";
        $result=mysqli_query($db,$query);
        $query2="Select * from users where email='rmaili.me@gmail.com' && password='hardrock'";
        if(mysqli_num_rows($result)==1){
            $_SESSION['name']=$name;
            $_SESSION['success']="You're now logged in";
            header('location:home.php');
            
        }elseif(mysqli_num_rows($db,$query2)==1){
            header('Location:admin.php');

        }
        else{
            array_push($errors, "*Wrong username/password combination, try again");
        }
    }
    
}



?>



