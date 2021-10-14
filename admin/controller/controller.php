<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent:: __construct();

             //login here
            if (isset($_POST["log"])) 
            {
                $em=$_POST["Email"];
                $pass=$_POST["Password"];
                $chk=$this->userlogin('admin_login',$em,$pass);
                
                if ($chk) {
                    echo"<script>
                    alert('Login Successfull')
                    window.location='./Dashboard';
                    </script>";
                
                }
                else {
                    echo"<script>
                    alert('Error')
                    window.location='./';
                    </script>";
                }
            }


            //admin forget password
            if(isset($_POST["frg"]))
            {
                $em=$_POST["em"];
                $frg=$this->frgpaswsword('register','password','email',$em);

                if($frg)
                {
                    echo "<script>
                    alert('Your password id :'+'$frg')
                    window.location='./';
                    </script>";
                }

                else
                {
                    echo "<script>
                    alert('Your Email does not exist try again')
                    window.location='./';
                    </script>";

                }

            }

            //logout admin here

        if(isset($_GET["lggout"]))
        {
            $chk=$this->logout();
            if($chk)
            {
                echo "<script>
                alert('You are Logout as admin Successfuly')
                window.location='./';
                
                </script>";

            }
        }

       //update admin data
       if(isset($_POST["asubmit"]))
       {
          // $std=$_SESSION["stdid"];
          
           $tmp_name=$_FILES["aimg"]["tmp_name"];
           $type=$_FILES["aimg"]["type"];
           $size=$_FILES["aimg"]["size"]/1024;
           $path="assets/admin_image/".$_FILES["aimg"]["name"];
           move_uploaded_file($tmp_name,$path);
         
           $id=$_SESSION["id"];
           $fn=$_POST["aname"];
           $em=$_POST["aemail"];
           $pass=$_POST["apass"];
         
           $data=array("image"=>$path,"name"=>$fn,"email"=>$em,"password"=>$pass);
           
           $chk=$this->upddata('admin_login',$path,$fn,$em,$pass,$data,$id); 

           if($chk)
           {
               echo "<script>
            
               alert('admin  Data Updated successfuly')
               window.location='./Admin';
               
               </script>";
           }
       }

        //insert maincategory data
        if(isset($_POST["submit"]))
        {


            $fnm=$_POST["firstname"];
            $date=$_POST["date"];
           
            $data=array("mname"=>$fnm,"mdate"=>$date);
            
            $chk=$this->insertalldata('maincategory',$data);

            if($chk)
            {
                echo "<script>
             
                alert('Maincategory Added successfuly')
                window.location='./maincategory';
                
                </script>";
           
            }

            else

            {

                
                echo "<script>
                
                alert('Incorrect')
                window.location='./maincategory';
                
                </script>";

            }    
        }



         //insert category data
         if(isset($_POST["csubmit"]))
        {

            $tmp_name=$_FILES["cimage"]["tmp_name"];
            $type=$_FILES["cimage"]["type"];
            $size=$_FILES["cimage"]["size"]/1024;
            $path="assets/dog_category/".$_FILES["cimage"]["name"];
            move_uploaded_file($tmp_name,$path);

            $mcatnm=$_POST["mcatname"];
             $cname=$_POST["cfname"];
             $cdate=$_POST["cdate"];
            
             $data=array("cimage"=>$path,"mid"=>$mcatnm,"cname"=>$cname,"cdate"=>$cdate);
             
             $chk=$this->insertalldata('category',$data);
 
             if($chk)
             {
                 echo "<script>
              
                 alert('Category Added successfuly')
                 window.location='./category';
                 
                 </script>";
            
             }
 
             else
 
             {
 
                 
                 echo "<script>
                 
                 alert('Incorrect')
                 window.location='./category';
                 
                 </script>";
 
             }    
        }
          //insert product data
          if(isset($_POST["psubmit"]))
        {
            
            $tmp_name=$_FILES["pimg"]["tmp_name"];
            $path="assets/product/".$_FILES["pimg"]["name"];
            $size=$_FILES["pimg"]["size"]/1024;
            $type=$_FILES["pimg"]["type"]; 
            move_uploaded_file($tmp_name,$path);

             $mcatnm=$_POST["maincategory"];
              $cid=$_POST["category"];
              $pname=$_POST["pname"];
              $price=$_POST["price"];
              $sprice=$_POST["sprice"];
              $pdate=$_POST["pdate"];
             
            
             
              $data=array("pimage"=>$path,"mid"=>$mcatnm,"cid"=>$cid,"pname"=>$pname,"pprice"=>$price,"psprice"=>$sprice,"pdate"=>$pdate);
              
            $chk=$this->insertalldata('product',$data); 
  
              if($chk)
              {
                  echo "<script>
               
                  alert('product Added successfuly')
                  window.location='./product';
                  
                  </script>";
             
              }
  
              else
  
              {
  
                  
                  echo "<script>
                  
                  alert('Incorrect')
                  window.location='./product';
                  
                  </script>";
  
              }    
        }

          //display  user product
          if(isset($_GET["user_product"]))
          {
          $id=$_GET["user_product"];
        
    
          $wishlist=$this->selproductuserid('cart','product','cart.pid=product.pid','id',$id);

          }

          
        
        //display user doctor data 
        if(isset($_GET["user_doctor"]))
        {
        $id=$_GET["user_doctor"];
                                                 
        $doctorcartbill=$this->seldoctorbookcart  ('bill','doctor','register','bill.d_id=doctor.d_id','register.id=bill.id',$id);
        // ('bill','doctor','register','bill.bill_id=register.id','bill.bill_id=doctor.d_id','bill_id',$id);

        }

          //insert Doctor data
          //register 
       if(isset($_POST['dsubmit']))
        {
            $tmp_name=$_FILES["img"]["tmp_name"];
            $path="assets/doctor_image/".$_FILES["img"]["name"];
            $size=$_FILES["img"]["size"]/1024;
            $type=$_FILES["img"]["type"]; 
            move_uploaded_file($tmp_name,$path);



                $dname=$_POST["dname"];
                $dinfo=$_POST["dinfo"];
                $dadd=$_POST["dadd"];
                $dmob=$_POST["dmob"];
                $ddate=$_POST["ddate"];
                $dfee=$_POST["dfee"];
                

       
            $data=array("d_image"=>$path,"d_name"=>$dname,"d_info"=>$dinfo,"d_add"=>$dadd,"d_mob"=>$dmob,"d_date"=>$ddate,"d_fee"=>$dfee);    
            $chk=$this->insertalldata('doctor',$data); 
        
            if ($chk) {
                echo "<script>
            alert('Doctor added Successfully')
            
            window.location='./adddoctor';

            </script>";
                }
        
            else
            {

            echo "<script>
            alert('error please try again')
            
            window.location='./adddoctor';

            </script>";
        

            }
        }
 

        //select admin data
        if(isset($_SESSION["id"]))
        {

            $id=$_SESSION["id"];
      
       
         $adminprofile=$this->seladmindata('admin_login',$id); 

        }

        //update user doctor booking status
       if(isset($_GET["bill_id"]))
       {
            $billid=$_GET["billid"];
            $suc=$_GET["success"];
          
         
           $data=array("status"=>$suc);
           
           $chk=$this->updatedoctorstatus('bill',$data,$billid); 

           if($chk)
           {
               echo "<script>
            
               alert('Doctor Request Approved')
               window.location='./manageuserdoctor';
               
               </script>";
           }
       }
       
         $shwmaincat=$this->selalldata('maincategory');
         $shwcat=$this->selalldata('category');
         $shwprdt=$this->selalldata('product');
         $shwreg=$this->selalldata('register');
         $shwdoc=$this->selalldata('doctor');
         $product=$this->selalldata('product');
       


        //load view
        if ($_SERVER["PATH_INFO"]) {
            switch ($_SERVER["PATH_INFO"]) {

                case '/':
                    require_once('index.php');
                 
                     require_once('login.php');
                  
                
                    break;
                
                
                case '/Admin':
                    require_once('index.php');
                    require_once('header.php');
                     require_once('sliderbar.php');
                     require_once('adminprofile.php');
                     require_once('footer.php');
                
                    break;
                
                case '/Dashboard':
                    require_once('index.php');
                    require_once('header.php');
                     require_once('sliderbar.php');
                     require_once('content.php');
                     require_once('footer.php');
                
                    break;

                    case '/maincategory':
                        require_once('index.php');
                        require_once('header.php');
                         require_once('sliderbar.php');
                         require_once('maincategory.php');
                         require_once('footer.php');
                    
                    
                        break;
                        
                    case '/managemaincat':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('managemaincat.php');
                        require_once('footer.php');
                    
                    
                        break;
                    case '/category':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('category.php');
                        require_once('footer.php');
                    
                    
                        break;
                    case '/managecategory':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('managecategory.php');
                        require_once('footer.php');
                    
                    
                        break;
                    case '/product':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('product.php');
                        require_once('footer.php');
                    
                    
                        break;
                    case '/manageproduct':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('manageproduct.php');
                        require_once('footer.php');
                    
                    
                        break;

                    case '/manageclient':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('manageclient.php');
                        require_once('footer.php');
                    
                    
                        break;

                   

                    case '/adddoctor':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('adddoctor.php');
                        require_once('footer.php');
                    
                    
                        break;

                    case '/adddoctor':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('adddoctor.php');
                        require_once('footer.php');
                    
                    
                        break;

                            
                    case '/manageuserproduct':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('userproduct.php');
                        require_once('footer.php');
                    
                    
                        break;

                    case '/AdminUserCart':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('userviewcart.php');
                        require_once('footer.php');
                    
                    
                        break;

                    case '/manageuserdoctor':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('userdoctor.php');
                        require_once('footer.php');
                    
                    
                        break;

                    case '/admindoctorcart':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('sliderbar.php');
                        require_once('userdoctorcart.php');
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