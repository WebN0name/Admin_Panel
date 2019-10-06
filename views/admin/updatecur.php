<?php
if($_SESSION['arg'] == false){
    echo "not updated";
}else{
    echo "updated";
}
?>

<form action="<?php echo URL;?>admin/updatecur/<?php echo $arg[0]['id'];?>" method="post">
    <input type="hidden" name="id" value="<?php echo $arg[0]['id'] ?>">
    <label >name: </label><input type="text" name="name" value="<?php echo $arg[0]['name'];?>"><br>
    <label >text: </label><textarea name="text"><?php echo $arg[0]['text'];?></textarea><br>
    <input type="submit" name="ok">
</form>

<a href="<?php echo URL;?>admin">В админку</a><br>
<a href="<?php echo URL;?>admin/showarts">Вывести статьи</a>