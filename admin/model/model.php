<?php
error_reporting(0);
class model
{
    public $connection = "";
    public function __construct()
    {
        session_start();
        try {
            $this->connection = new mysqli("localhost", "root", "", "pethouse");
        } catch (Exception $e) {
            die(mysqli_error($this->connection));
        }
    }

    //Admin login
    public function userlogin($table, $em, $pass)
    {
        $select = "select * from $table where email='$em' and password='$pass'";

        $query = mysqli_query($this->connection, $select);
        $result = mysqli_fetch_array($query);
        $no = mysqli_num_rows($query);
        if ($no == 1) {

            $_SESSION["id"] = $result["admin_id"];
            $_SESSION["em"] = $result["email"];
            return true;
        } else {
            return false;
        }
    }

    //create function for insertalldata
    public function insertalldata($table, $data)
    {
        $k = array_keys($data);
        $kk = implode(",", $k);
        $v = array_values($data);
        $vv = implode("','", $v);

        $insert = "insert into $table($kk) values ('$vv')";
        $query = mysqli_query($this->connection, $insert);
        return $query;
    }

    //select alldata
    public function selalldata($table)
    {
        $select = "select * from $table";
        $query = mysqli_query($this->connection, $select);
        while ($result = mysqli_fetch_array($query)) {
            $arr[] = $result;
        }
        return $arr;
    }

    //forget password
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


    //select one admin data
    public function seladmindata($table, $id)
    {
        $select = "select * from $table where admin_id = '" . $id . "'";
        $query = mysqli_query($this->connection, $select);
        while ($result = mysqli_fetch_array($query)) {
            $arr[] = $result;
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
    
     //update admin data create a meber function 
     public function upddata($table,$path,$fn,$em,$pass,$data,$id)
     {
       //  $upd=" update $table SET firstname='$fn',lastname='$ln',email='$em',mobile='$mob' where id='$userid'";//
      
       $upd="update $table set image='$path', name='$fn',email='$em',password='$pass' where admin_id='$id'"; 
         $query=mysqli_query($this->connection,$upd);
         return $query;
         

     }

     //update user book doctor status 
     public function updatedoctorstatus($table,$suc,$billid)
     {
       //  $upd=" update $table SET firstname='$fn',lastname='$ln',email='$em',mobile='$mob' where id='$userid'";//
      
       $upd="update $table set status='$suc' where bill_id='$billid'"; 
         $query=mysqli_query($this->connection,$upd);
         return $query;
         

     }


    //create  a member function logout gere
    public function logout()

    {

        unset($_SESSION["id"]);
        unset($_SESSION["em"]);

        session_destroy();
        return true;
    }
}
