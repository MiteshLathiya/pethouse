    <?php
class model 
{
    public $connection ="";
    public function __construct()
    {
        session_start();
        try {
            $this->connection=new mysqli("localhost","root","","pethouse");
            
            
        } catch (Exception $e) {
            die(mysqli_error($this->connection));
        }
    }

    //insert alldata here
    public function insertalldata($table,$data)
    {
        $k=array_keys($data);
        $kk=implode(",",$k);
        $v=array_values($data);
        $vv=implode("','",$v);

        $insert="insert into $table($kk) values('$vv')";
        $query=mysqli_query($this->connection,$insert); 
            return $query;
      
    }

     //select alldata
     public function selalldata($table)
     {
         $select="select * from $table";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
         {
             $arr[]=$result;
         }
                 return $arr;
     }

      //select dogproductdata
      public function selalldata1($table,$table1,$where,$mcatid)
      {
          $select="select * from $table join $table1 on $where where $table.mid='$mcatid'";
          $query=mysqli_query($this->connection,$select);
          while($result=mysqli_fetch_array($query))
          {
              $arr[]=$result;
          }
                  return $arr;
      }

      public function selalldata2($table,$table1,$where,$columnname)
      {
          $select="select * from $table join $table1 on $where where $table.mid='$columnname'";
          $query=mysqli_query($this->connection,$select);
          while($result=mysqli_fetch_array($query))
          {
              $arr[]=$result;
          }
                  return $arr;
      }

       //select dogproductdata
    //    public function selalldata1($table,$table1,$where,$mcatid)
    //    {
    //        $select="select * from $table join $table1 on $where where $table.mid='$mcatid'";
    //        $query=mysqli_query($this->connection,$select);
    //        while($result=mysqli_fetch_array($query))
    //        {
    //            $arr[]=$result;
    //        }
    //                return $arr;
    //    }

     // doctor id select
     public function seldoctorid($table,$id)
     {
         
         $select="select * from $table where d_id = '".$id."' ";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
         {
             $arr[]=$result;
         }
                 return $arr;
     }

      // doctor id select
      public function seluserid($table,$id)
      {
          
          $select="select * from $table where id = '".$id."' ";
          $query=mysqli_query($this->connection,$select);
          while($result=mysqli_fetch_array($query))
          {
              $arr[]=$result;
          }
                  return $arr;
      }

        //update data create a meber function 
        public function upddata($table,$fn,$ln,$em,$mob,$data,$id)
        {
          //  $upd=" update $table SET firstname='$fn',lastname='$ln',email='$em',mobile='$mob' where id='$userid'";//
         
          $upd="update $table set firstname='$fn',lastname='$ln',email='$em',mobile='$mob' where id='$id'";
            $query=mysqli_query($this->connection,$upd);
            return $query;
            

        }

     // product id select
     public function selproductid($table,$pid)
     {
         
         $select="select * from $table where pid = '".$pid."' ";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
         {
             $arr[]=$result;
         }
                 return $arr;
     }
     
     

    //product user id
     public function selproductuserid($table,$table1,$where,$clmname,$id)
     {
         
         $select="select * from $table join $table1 on $where where $clmname='$id'";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
         {
             $arr[]=$result;
         }
                 return $arr;
     }

     //doctorbook cart data join
     public function seldoctorbookcart($table,$table1,$table2,$where,$where1,$id)
     {
        // select * from $tab join $tab1 on $where join $tab2 on  $where1 where $tab.stdid='$stdid'"
         $select="select * from $table join $table1 on $where join $table2 on $where1 where $table.id='$id'";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
         {
             $arr[]=$result;
         }
                 return $arr;
     }

     //select user book doctor data
     public function seluserdoctorbook($table,$id)
     {
         $select="select * from $table where id='$id'";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
         {
             $arr[]=$result;
         }
                 return $arr;
     }

     //subtotal of product
     public function subtotsum($table,$clnm,$clnm1,$id)
     {
        $select="select sum($clnm) as total from $table where $clnm1='$id'"; 
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))
        {
            $arr[]=$result;
        }
        return $arr;
     }  
 
     //total product
     public function sellalltotcrt($table,$clnm,$clnm1,$id)
     {
        $select="select count($clnm) as total from $table where $clnm1='$id'"; 
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))
        {
            $arr[]=$result;
        }
        return $arr;
     }


    public function userlogin($table,$em,$pass)
    {
        $select="select * from $table where email='$em' and password='$pass'";
  
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);
        if($no==1)
        {
           
            $_SESSION["id"]=$result["id"];
            $_SESSION["em"]=$result["email"];
            
            
            return true;
        }

        else
        {
            return false;
        }
        
    }

    //create a  member function for fogetpassword of admin
    public function frgpaswsword($table,$password,$columnname,$em)
    {
        $select="select $password from $table where $columnname='$em'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);
        if($no>0)
        {
            $p=($result["password"]);
            
            return $p;
        }

        else
        {
            return false;
        }
    }

    //create a member function for delete data
    public function deldata($table,$id)
    {
        $k=array_keys($id);
        $fielid=implode(",",$k);
        $v=array_values($id);
        $id=implode("','",$v);
        $delete="delete from $table where $fielid='$id'";
        $query=mysqli_query($this->connection,$delete);
        return $query;
    }
     public function logout()
    {
        unset($_SESSION["id"]);
        unset($_SESSION["em"]);
      
        session_destroy();
        return true;
    }
}
?>