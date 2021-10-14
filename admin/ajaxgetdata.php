<?php
$con = mysqli_connect("localhost", "root", "", "pethouse");
//load state while select country

if (isset($_POST["cn"])) {
    $cn = $_POST["cn"];
    $sel = "select * from category where mid='$cn'";
    $query = mysqli_query($con, $sel);
    while ($result = mysqli_fetch_array($query)) {

?>

        <option value="<?php echo $result["cid"]; ?>"><?php echo $result["cname"]; ?></option>

    <?php
    }
}


//load city while select state using ajax



?>