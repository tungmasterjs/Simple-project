<?php
    session_start();

    include '../model/pdo.php';
    include '../model/admin.php';


    if(isset($_POST['logad']) && $_POST['logad']){

        $user=$_POST['user'];
        $pass=$_POST['pass'];
        echo $user.",".$pass;
        $ktdn=checklog($user,$pass);
       // echo var_dump($ktdn);
        // $dsadmin=checkadmin($user,$pass);
        // echo "kết quả:".var_dump($dsadmin);
         
       //  echo $kiemtra;

        // $kiemtra=count($ktdn);
        if($ktdn!=null){
                    // echo "login successfull!";
                    // echo '<p style="color:red;">login successfull!</p>';
                    $_SESSION['id']=$ktdn['id'];
                    $_SESSION['name']=$ktdn['name'];
                    $_SESSION['user']=$ktdn['username'];
                     header('location: index.php');
                }else{
                    header('location: login.php?act=log&err');
                    
                }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../admin/assets/styles/log.css">
</head>
<body>
<form id="msform" action="login.php" method="post">
 <!-- progressbar -->
  <!-- <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul> -->
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Login Admin</h2>
    <input type="text" name="user" placeholder="UserName" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="submit" name="logad" class="submit action-button" value="login" />
   
  </fieldset>
<?php
            if(isset($_GET['err'])){
                echo '<p style="color:red;">user pass not correct!!!</p>';
            }
?>
</form>
</div>
</body>
</html> 
