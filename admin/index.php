        <?php 
    ob_start();
        	include "../admin/header.php"; 
            include "../model/pdo.php";
            include "../model/admin.php";
            include "../model/type.php"; 
            include "../model/catalog.php"; 
            include "../model/product.php"; 
            include "../model/comment.php"; 

            // include "../admin/home.php"; 
            // include "../admin/footer.php"; 

        	 if(isset($_GET['act'])){
            $act=$_GET['act'];

            switch($act){
                case 'qlproduct':
                   $showpro=showallpro();
                    
                    include "../admin/qlproduct.php";
                break;
                case 'qlcomment':

                   $showpro=showallcmt();
                     
                    include "../admin/qlcomment.php";
                break;
                case 'qlorder':

                   $showall= showallorder();
                    
                    include "../admin/qlorder.php";
                break;
                case 'logout':
                    session_destroy();
                    header('location: login.php');
                    
                break;
                case 'mail':
                    if(isset($_POST['mailer'])){
                         $email = $_REQUEST['email'] ;
                    $message = $_REQUEST['message'] ;

                    // When we unzipped PHPMailer, it unzipped to
                    // public_html/PHPMailer_5.2.0
                    include("../view/PHPMailer_5.2.0/class.PHPMailer.php");

                    $mail = new PHPMailer();

                    // set mailer to use SMTP
                    $mail->IsSMTP();

                    // As this email.php script lives on the same server as our email server
                    // we are setting the HOST to localhost
                    $mail->Host = "localhost";  // specify main and backup server

                    $mail->SMTPAuth = true;     // turn on SMTP authentication

                    // When sending email using PHPMailer, you need to send from a valid email address
                    // In this case, we setup a test email account with the following credentials:
                    // email: contact@domain.com
                    // pass: password
                    $mail->Username = "justtuntun@domain.com";  // SMTP username
                    $mail->Password = "01256756299"; // SMTP password

                    // $email is the user’s email address the specified
                    // on our contact us page. We set this variable at
                    // the top of this page with:
                    // $email = $_REQUEST[’email’] ;
                    $mail->From = $email;

                    // below we want to set the email address we will be sending our email to.
                    // $mail->AddAddress("webmaster-abcd@gmail.com", "Brad Markle");

                    // set word wrap to 50 characters
                    $mail->WordWrap = 50;
                    // set email format to HTML
                    $mail->IsHTML(true);

                    $mail->Subject = "You have received feedback from your website!";

                    // $message is the user’s message they typed in
                    // on our contact us page. We set this variable at
                    // the top of this page with:
                    // $message = $_REQUEST[‘message’] ;
                    $mail->Body    = $message;
                    $mail->AltBody = $message;

                    if(!$mail->Send())
                    {
                    echo "Message could not be sent. <p>";
                    echo "Mailer Error: " . $mail->ErrorInfo;
                    exit;
                    }

                    echo "Message has been sent";
                    }
                    
                    include "../admin/mail.php";
                break;
                case 'qlcatalog':
                    $show_cat=loadcat();
                    include "../admin/qlcatalog.php";
                break;
                case 'edit_cat':
                    if(isset($_GET['id_cat'])&& $_GET['id_cat']){
                    
                    // $id_pro=$idpro;
                   //  $id_pro=$pro['id'];
                    
                        $id_cat=$_GET['id_cat'];
                    // var_dump($id_cat);
                        $edit_cat=showcat_by_id_cat($id_cat);

                       }
                    if(isset($_POST['updated'])&& $_POST['updated']){
                         
     
                        // $id_pro=$pro['id'];
                        // $edit=showpro_by_id_pro($id_pro);  
                        $id=$_POST['id_cat'];              
                        $name=$_POST['name'];
                        $slug=$_POST['slug'];
                        // $price_pro=$_POST['price_pro'];
                        // $content=$_POST['content'];
                        
                        //
                       
                        // echo $name;
                        $kq=update_cat($name,$slug,$id);
                        // $kq=update_pro(5,'ss','111','11','sssss');
                         
                        header('location: index.php?act=qlcatalog');  
                     // var_dump($kq);   
                    }
                    
                    include "../admin/edit_cat.php";
                break;
                case 'del_cat':

                    
                    if(isset($_GET['id_cat'])&& $_GET['id_cat']){
                        $id_del=$_GET['id_cat'];
                        // var_dump($id_del);

                        del_cat($id_del);
                         header('location: index.php?act=qlcatalog');  
                    }
                    
                break;
                case 'add_cat':
                    if(isset($_POST['add_cat'])&& $_POST['add_cat']){
                        $name=$_POST['name'];
                        $slug=$_POST['slug'];
                        
                          
                        

                        // var_export($ss);
                        

                        $kq=add_cat($name,$slug);
                        header('location: index.php?act=qlcatalog');  
                    }

                    // $show_cat=loadcat();
                     include "../admin/add_cat.php";
                break;
                case 'del_pro':

                    if(isset($_GET['id_pro'])&& $_GET['id_pro']){
                        $id_del=$_GET['id_pro'];
                        // var_dump($id_del);

                        del_pro($id_del);
                         header('location: index.php?act=qlproduct');  
                    }
                    // include "../admin/qlcatalog.php";
                break;
                case 'add':
                    
                    if(isset($_POST['add_pro'])&& $_POST['add_pro']){
                        $name=$_POST['name'];
                        $slug=$_POST['slug'];
                        // $image=$_POST['image'];
                        $price_unit=$_POST['price_unit'];
                        $price_pro=$_POST['price_pro'];
                        $content=$_POST['content'];
                          // $image=rand(1000,10000)."-".$_FILES["file"]["name"];
                        $image=$_FILES["file"]["name"];
                        $tname=$_FILES["file"]["tmp_name"];
                        $upload_dir="C:/xampp/htdocs/ww/DuAnMau1/view/upload";
                        $ss=move_uploaded_file($tname, $upload_dir.'/'. $image);

                        // var_export($ss);
                        

                        $kq=add_pro($name,$slug,$image,$price_unit,$price_pro,$content);
                        header('location: index.php?act=qlproduct');  
                    }




                    include "../admin/add.php";
                break;

                case 'edit':

                 // $pro=showallpro();
                 // var_dump($pro);
                if(isset($_GET['id_pro'])&& $_GET['id_pro']){
                    
                    // $id_pro=$idpro;
                   //  $id_pro=$pro['id'];
                    
                        $id_pro=$_GET['id_pro'];
                        $edit=showpro_by_id_pro($id_pro);

                       }
                    if(isset($_POST['updated'])&& $_POST['updated']){
                         
     
                        // $id_pro=$pro['id'];
                        // $edit=showpro_by_id_pro($id_pro);  
                        $id=$_POST['id'];              
                        $name=$_POST['name'];
                        $price_unit=$_POST['price_unit'];
                        $price_pro=$_POST['price_pro'];
                        $content=$_POST['content'];
                        
                        //
                       
                        // echo $name;
                        $kq=update_pro($name,$price_unit,$price_pro,$content,$id);
                        // $kq=update_pro(5,'ss','111','11','sssss');
                         
                        header('location: index.php?act=qlproduct');  
                        // var_dump($kq);   
                    }
                
                    include "../admin/edit.php";
                
                break;
                default:
                include "../admin/home.php"; 
                break;
            }
            }else{
                include "../admin/home.php"; 
            }
           
            include "../view/footer.php";
            ob_end_flush();
    ?>