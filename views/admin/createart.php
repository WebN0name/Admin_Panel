<?php
if($_SESSION['arg'] == false){
    echo "not inserting";
}else{
    echo "was inserted";
}

?>


<form action="<?php echo URL; ?>admin/createart" method="post">
    <label>name: </label><input type="text" name="name"><br><br>
    <label>text: </label><textarea name="text"></textarea><br>
    <input type="submit" name="ok">

</form>