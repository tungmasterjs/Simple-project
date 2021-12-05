<?php
ob_start();
    session_start();
    include "../model/pdo.php";

    include "../model/type.php"; 
    include "../model/catalog.php"; 
    include "../model/product.php"; 
    include "../model/comment.php";
    include "../model/user.php"; 
    $cat=loadcat();
    // $cat2=loadcat();
    // include "../model/product.php";
    // $ct=type_select_by_id();

    // var_dump($c;
    // var_dump($cat);
    // include "../model/product.php";
    $bestsell=pro_bestsell();
    include "../view/header.php";
    //  $id_pro=$_GET['id_pro'];
    // $pros=showpro_by_id_pro($id_pro);
    $pro=showallpro();
    //add-cart
    if(isset($_POST['addcart'])&& $_POST['addcart']){
        
                $all_qua = 1;
                $all_price = 0;
                $id_pro=$_POST['idpro'];
                $pr=showpro_by_id_pro($id_pro);
                // $idpro .=$id_pro;

                

                // $all_qua += $item["qua"];
                // $all_price += ($item["price"]*$item["qua"]);
            }
//end add-cart

    if(isset($_GET['act'])){
    $act=$_GET['act'];

    switch($act){
        case 'product':
             $id_pro=$_GET['id_pro'];
             $pros=showpro_by_id_pro($id_pro);
            $id_cat=$_GET['id_cat'];
            $type=loai_select_by_id($id_cat);
            $listpro=showpro_by_idcat($id_cat);
            $cat=loadcat();
            // $cat=
            $id_pro=showpro_by_id_pro($id_pro);
            include "../view/product.php";
        break;
         case 'add_cart':
           

          
         if(isset($_POST['addtocart']))
            {
                if(isset($_SESSION['cart'])){
                $item_array_id= array_column($_SESSION['cart'], "item_id");
                if(!in_array($_GET['id'], $item_array_id)){
                    $count=count($_SESSION['cart']);
                        $item_array= array(
                    'item_id'=>$_GET['id'],
                    'item_name'=>$_POST['name'],
                    'item_price'=>$_POST['price'],
                    'item_quality'=>$_POST['quality'],
                    'item_image'=>$_POST['image'],
                    'total'=>($_POST['price']*$_POST['quality'])
                        );
                     
                     $_SESSION['cart'][$count]=$item_array;
                
                }else{
                    // echo '<script>alert("item added!")</script>';
                }
            }else{
                if(isset($_GET['id'])){
                    $item_array= array(
                    'item_id'=>$_GET['id'],
                    'item_name'=>$_POST['name'],
                    'item_price'=>$_POST['price'],
                    'item_quality'=>$_POST['quality'],
                    'item_image'=>$_POST['image'],
                    'total'=>($_POST['price']*$_POST['quality'])
                );  
                    
                }
                
                $_SESSION['cart'][0]=$item_array;
            }
                
            }
            


            include "../view/add_cart.php";
        break;

        case 'del_cart':
            
            
            foreach ($_SESSION['cart'] as $key => $value) {
               if($value['item_id']==$_GET['id']) {
                    unset($_SESSION['cart'][$key]);
               }
            }
            header('location: index.php?act=add_cart');
           
        break; 
        case 'order':
            
            if(isset($_POST['order'])){
                if(isset($_SESSION['id'])){
                    $id=$_SESSION['id'];
                     $user=userinfo($id); 
                     var_dump($user);
                }
                else{
                   header('location: index.php?act=add_cart&error');  
                }
                $image=$_POST['image'];
                $price=$_POST['price'];
                $total=$_POST['total'];
                $qua=$_POST['qua'];
                $name=$_POST['name'];
                
                
            }else{
                
               
                        
            }

            
            
           include "../view/order.php";
        break; 

        case 'single':
        $id_pro=$_GET['id_pro'];
        $pros=showpro_by_id_pro($id_pro);
        $ss=showpro_by_id_pro($id_pro);
        //  $idpro=$_GET['id_pro'];
        // $comment=showcmt($idpro);
            include "../view/single.php";
        break;

        case 'del_allcart':
            
            unset($_SESSION['cart']);
            header('location: index.php');
        break;

        case 'buy':
            
           
            header('location: index.php');
        break; 

        case 'cart':
            
            
            header('location: index.php');
        break;
        case 'contact':
        $cata=loadcat();
            include "../view/contact.php";
        break;

        case 'userinfo':
             include('../model/mail/smtp.php');
    include "../model/mail/phpmailer.php"; 
    
   // include('class.smtp.php');
   //  include "class.phpmailer.php"; 
    include "../model/mail.php"; 
    
   
            if(isset($_SESSION['id'])){
                $id=$_SESSION['id'];
                $userinfo=userinfo($id);

            }
            if(isset($_POST['update'])&& $_POST['update']){
                $id=$_POST['id'];
                $user=$_POST['user'];
                $email=$_POST['email'];
                $name=$_POST['name'];
                $pass=$_POST['pass'];
                $phone=$_POST['phone'];
                $address=$_POST['address'];


                // update_user($user, $email,$name,$pass,$phone,$address,$id);
                update_user($id,$user, $email,$name,$pass,$phone,$address);
                 $title = 'Reset Password for your account';
                    $content = 'Mật khẩu của bạn đã được reset .';
                    $nTo = 'tuntun';
                    $mTo = $email;
                    $diachicc = 'xcc@gmail.com';
                    //test gui mail
                    $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
                    if($mail==1)
                    echo 'mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả. ';
                    else echo 'Co loi!';
                header('location: index.php');     
            }
            include "../view/userinfo.php";
        break;
        case 'reg':
            if(isset($_POST['reg'])&& $_POST['reg']){
                $user=$_POST['user'];
                $email=$_POST['email'];
                $name=$_POST['name'];
                $pass=$_POST['pass'];
                $phone=$_POST['phone'];
                $address=$_POST['address'];
                user_insert($user,$email,$name,$pass,$phone,$address);
                header('location: index.php');     
            }
            include "../view/reg.php";
        break;
       
        
        case 'logout':
            session_destroy();
            header('location: index.php');
        break;
        case 'log':
            if(isset($_POST['log'])&& $_POST['log']){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $loged=checklog($user,$pass);
                
                if($loged!=null){
                    // echo "login successfull!";
                    // echo '<p style="color:red;">login successfull!</p>';
                    $_SESSION['id']=$loged['id'];
                    $_SESSION['name']=$loged['name'];
                    $_SESSION['user']=$loged['username'];
                     header('location: index.php');
                }else{
                    header('location: index.php?act=log&err');
                    
                }
            }
            include "../view/log.php";
        break;
        case 'blog':
            include "../view/blog.php";
        break;
        
        default:
        include "../view/home.php";
        break;
    }
    }else{
        include "../view/home.php";
        //  include "../view/reg.php";
    }   
    include "../view/footer.php";
ob_end_flush();
?>