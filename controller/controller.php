<?php
error_reporting(0);
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent:: __construct();

           
        //insert data
        if (isset($_POST["reg"])) 
        {
           $fn=$_POST["fn"];
           $ln=$_POST["ln"];
           $em=$_POST["em"];
           $add=$_POST["add"];   
           $pass=$_POST["pass"];
           $mob=$_POST["mob"];
           

            $data=array("firstname"=>$fn,"lastname"=>$ln,"email"=>$em,"address"=>$add,"password"=>$pass,"mobile"=>$mob);
            
            $chk=$this->insertalldata('register',$data);

            if($chk)
            {
                echo "<script>
             
                alert('User Register successfuly')
                window.location='./';
                
                </script>";
           
            }

            else

            {

                
                echo "<script>
                
                alert('Incorrect')
                window.location='./';
                
                </script>";

            }  
        }

        //insert into cart
        if (isset($_POST["reg"])) 
        {
           $fn=$_POST["fn"];
           $ln=$_POST["ln"];
           $em=$_POST["em"];
           $pass=$_POST["pass"];
           $mob=$_POST["mob"];
           

            $data=array("firstname"=>$fn,"lastname"=>$ln,"email"=>$em,"password"=>$pass,"mobile"=>$mob);
            
            $chk=$this->insertalldata('register',$data);

            if($chk)
            {
                echo "<script>
             
                alert('Maincategory Added successfuly')
                window.location='./';
                
                </script>";
           
            }

            else

            {

                
                echo "<script>
                
                alert('Incorrect')
                window.location='./';
                
                </script>";

            }  
        }

        //update user data
        if(isset($_POST["update"]))
        {
            $id=$_SESSION["id"];
            $fnm=$_POST["fn"];
            $lnm=$_POST["ln"];
            $em=$_POST["em"];
            $mob=$_POST["mb"];
            
            $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"mobile"=>$mob);
            
               $chk=$this->upddata('register',$fnm,$lnm,$em,$mob,$data,$id);

            if($chk)
            {
                echo "<script>
             
                alert('User  Data Updated successfuly')
                window.location='./Profile';
                
                </script>";
            }
            else {
                echo "<script>
             
                alert('Error')
                window.location='./Profile';
                
                </script>";
            }
        }

        //update user booking data
        if(isset($_POST["bookdoctor"]))
        {
            $id=$_SESSION["id"];
            $fnm=$_POST["unm"];
            $lnm=$_POST["ulm"];
            $em=$_POST["uem"];
            $mob=$_POST["umb"];
            
            $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"mobile"=>$mob);
            
               $chk=$this->upddata('register',$fnm,$lnm,$em,$mob,$data,$id);

            
        }

        
        //login here
        if (isset($_POST["log"])) 
        {
            $em=$_POST["em"];
            $pass=$_POST["pass"];
            $chk=$this->userlogin('register',$em,$pass);
            
            if ($chk) {
                echo"<script>
                alert('Login Successfull')
                window.location='./';
                </script>";
            
            }
            else {
                echo"<script>
                alert('Error')
                window.location='./';
                </script>";
            }
        }

        //doctor

        if(isset($_GET["doctor_details_id"]))
        {
             $id=$_GET["doctor_details_id"]; 

            $doctordata=$this->seldoctorid('doctor',$id);
           
            
        }

        if(isset($_GET["doctor_id"]))
        {
             $id=$_GET["doctor_id"]; 

            $doctordata2=$this->seldoctorid('doctor',$id);
           
            
        }


        //insert doctor booking data
        if(isset($_POST["bookdoctor"]))
        {
            
              $sid=$_SESSION["id"];
              $did=$_POST["did"];
              $date=$_POST["date2"];
             
            
             
            $data=array("id"=>$sid,"d_id"=>$did,"doctorbook_date"=>$date);
              
            $chk=$this->insertalldata('bill',$data); 
  
              if($chk)
              {
                  echo "<script>
               
                  alert('Bill Added successfuly')
                  window.location='./Bill';
                  
                  </script>";
             
              }
  
              else
  
              {
  
                  
                  echo "<script>
                  
                  alert('Incorrect')
                  window.location='./Booking';
                  
                  </script>";
  
              }    
        }


        //select product
        if(isset($_GET["product_id"]))
        {
             $pid=$_GET["product_id"]; 

            $productdata=$this->selproductid('product',$pid);  
           
            
        }
       
        //add product cart
        if (isset($_POST["addcart"])) 
        {
            $id=$_SESSION["id"];
            $pid=$_POST["pid"];
            $pname=$_POST["pname"];
            $pprice=$_POST["pprice"];
            $qty=$_POST["qty"];
            $subtotal=$pprice*$qty;

            $data=array("id"=>$id,"pid"=>$pid,"productname"=>$pname,"price"=>$pprice,"qty"=>$qty,"subtotal"=>$subtotal);
            $chk=$this->insertalldata('cart',$data); 
            if ($chk) {
                echo"<script>
                alert('Cart Added Successfully') 
                window.location='./Wishlist';
                </script>";
            }
            else {
                echo"<script>
                alert('Error') 
                window.location='./';
                </script>";
                
            }
        }

         //add product cart
         if (isset($_POST["bookdoctor"])) 
         {
             $did=$_POST["d_id"];
             $date=$_POST["date2"];
            
 
             $data=array("id"=>$id,"pid"=>$pid,"productname"=>$pname,"price"=>$pprice,"qty"=>$qty,"subtotal"=>$subtotal);
             $chk=$this->insertalldata('cart',$data); 
             if ($chk) {
                 echo"<script>
                 alert('Cart Added Successfully') 
                 window.location='./Wishlist';
                 </script>";
             }
             else {
                 echo"<script>
                 alert('Error') 
                 window.location='./';
                 </script>";
                 
             }
         }

            //display 
            if(isset($_SESSION["id"]))
            {
            $id=$_SESSION["id"];
          
           
            $wishlist=$this->selproductuserid('cart','product','cart.pid=product.pid','id',$id);

            }
            

            //display doctor cart bill data 
            if(isset($_SESSION["id"]))
            {
            $id=$_SESSION["id"];
                                                     
            $doctorcartbill=$this->seldoctorbookcart('bill','doctor','register','bill.d_id=doctor.d_id','register.id=bill.id',$id);
            // ('bill','doctor','register','bill.bill_id=register.id','bill.bill_id=doctor.d_id','bill_id',$id);

            }

            //display user selected doctor
            if (isset($_SESSION["id"])) {
                $id=$_SESSION["id"];
            }

            //display 
            if(isset($_SESSION["id"]))
            {

                $uid=$_SESSION["id"];
          
           
             $userdata=$this->seluserid('register',$uid); 

            }

            //sumuser
            if(isset($_SESSION["id"]))
            {

            $uid=$_SESSION["id"];
          
            $subtotal=$this->subtotsum('cart','subtotal','id',$uid);

            }

            
             //total of cart added by user 
        if(isset($_SESSION["id"]))
        {
            $uid=$_SESSION["id"];
           
            $crttot=$this->sellalltotcrt('cart','cartid','id',$uid);
        }

        //fetch category with maincategory
        if (isset($_GET["mcatid"])) {
            $mcatid=$_GET["mcatid"];
            $mactdata=$this->selalldata1('category','maincategory','category.mid=maincategory.mid',$mcatid);
        }

        //fetch category with maincategory
        if (isset($_GET["category_pd"])) {
            $cat=$_GET["category_pd"];
            $cproductdata=$this->selalldata1('product','maincategory','product.mid=maincategory.mid',$cat);
        }


        //fetch category data
        // if (isse($_GET[""])) {
        //     $catid=$_GET[""];
        //     $this->selalldata2($table,$table1,$where,$catid);
        // }
       
        
       //logout as user here

       if(isset($_GET["lgout"]))
       {

           $lg=$this->logout(); 
           if($lg)
           {
               echo "<script>
            
               alert('You are Logout Successfuly')
               window.location='./';
               
               </script>";
           }
       }

       //select all category
       $catnm=$this->selalldata('maincategory');

       //user forget password
       if(isset($_POST["frg"]))
        {
            $em=$_POST["em"];
            $frg=$this->frgpaswsword('register','password','email',$em);

            if($frg)
            {
                echo "<script>
                alert('Your password id :'+'$frg')
                window.location='Login1';
                </script>";
            }

            else
            {
                echo "<script>
                alert('Your Email does not exist try again')
                window.location='ForgetPassowrd';
                </script>";

            }

        }


       //delete cart
       if(isset($_GET["Delcart"]))
       {
            $delid=$_GET["Delcart"]; 
            $id=array("cartid"=>$delid);

           $chk=$this->deldata('cart',$id);
           if($chk)
           {
               echo "<script>
               alert('Data Deleted Succefully')
               window.location='Wishlist';
               </script>";

           }  
          
           
       }

       
      
       
       $shwdoc=$this->selalldata('doctor');
       $doctorid=$this->seldoctorid('doctor',$id);
       $product=$this->selalldata('product');
       
      //$productdata=$this->selproductid('product',$id); 
       $wishlist=$this->selproductuserid('cart','product','cart.pid=product.pid','id',$id);
      // $wishlist=$this->selproductuserid('cart','product','cart.pid=product.pid');
       $subtotal=$this->subtotsum('cart','subtotal','id',$uid);
       $crttot=$this->sellalltotcrt('cart','cartid','id',$uid);
    //   $wishlist=$this->selproductuserid('cart',$uid); 
  $abc= $this->seluserdoctorbook('bill',$id);
       

        //load view
        if ($_SERVER["PATH_INFO"]) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('content.php');
                     require_once('footer.php');
                    break;
                    
               

                case '/Login1':
                    require_once('index.php');
                    require_once('login.php');
                        
                    break; 
                    
                case '/ForgetPassowrd':
                    require_once('index.php');
                    require_once('forget_password.php');
                        
                    break; 
                    
                case '/Register':
                    require_once('index.php');
                    require_once('register.php');
                        
                    break; 
                    
                    
                case '/Aboutus':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('about-us.php');
                    require_once('footer.php');
                        
                break;

                case '/Bill':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('doctorbill.php');
                    require_once('footer.php');
                        
                break;

                case '/Dog':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('shop.php');
                    require_once('footer.php');
                        
                break;

                case '/CategoryProduct':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('category-product.php');
                    require_once('footer.php');
                        
                break;
                

                case '/Contact':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('contact.php');
                    require_once('footer.php');
                        
                break;
                
                

                case '/Services':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('service.php');
                    require_once('footer.php');
                        
                break; 

                case '/Faq':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('faq.php');
                    require_once('footer.php');
                        
                break; 

                case '/Cart':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('cart.php');
                    require_once('footer.php');
                        
                break; 

                case '/Checkout':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('checkout.php');
                    require_once('footer.php');
                        
                break; 

                case '/Shop':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('shop.php');
                    require_once('footer.php');
                        
                break; 

                case '/Wishlist':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('wishlist.php');
                    require_once('footer.php');
                        
                break; 

                case '/ProductDetail':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('product-details.php');
                    require_once('footer.php');
                        
                break; 

                case '/Myaccount':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('#.php');
                    require_once('footer.php');
                        
                break; 

                case '/Portfolio':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('portfolio.php');
                    require_once('footer.php');
                        
                break; 

                case '/BookDoctor':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('bookdoctor.php');
                    require_once('footer.php');
                        
                break; 

                case '/DoctorProfile':
                    require_once('index.php');
                  
                    require_once('doctorprofile.php');
                   
                        
                break; 

                case '/Booking':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('booking.php');
                    require_once('footer.php');
                        
                break; 

                case '/DocCheckout':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('doccheckout.php');
                    require_once('footer.php');
                        
                break; 

                case '/ProductBill':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('productbill.php');
                    require_once('footer.php');
                        
                break; 

                case '/Invoice':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('invoice.php');
                    require_once('footer.php');
                        
                break; 

                case '/Profile':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('my-account.php');
                    require_once('footer.php');
                        
                break; 
                
                default:
                require_once('index.php');
                require_once('header.php');
                require_once('404.php');
                require_once('footer.php');
                    break;
            }
        }

    }
}

 
$obj=new controller();
?>