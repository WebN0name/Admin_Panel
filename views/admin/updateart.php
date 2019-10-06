<?php
if($arg == false){
    echo "no data" . "<br>";
}else{
    foreach($arg['notes'] as $d){
        ?>
        <a href="<?php echo URL;?>admin/updatecur/<?php echo $d['id'];?>"><?php
        echo $d['name'] . "<br>";?></a><?php
        echo $d['text'] . "<br><hr>";
    }
}

for($p = 1; $p <= $arg['total_pages']; $p++){
?>
<a href="<?php echo URL;?>admin/updateart/<?php echo $p;?>"><?php echo $p;?></a>

<?php
}
?>
<br>
<a href="<?php echo URL;?>admin">Назад</a>