<?php
if($arg == false){
    echo "no data" . "<br>";
}else{
    foreach($arg['notes'] as $d){
        echo $d['name'] . "<br>";
        echo $d['text'] . "<br>";?>
        <a href="<?php echo URL;?>admin/deletecur/<?php echo $d['id'];?>/<?php echo $arg['cur_page'];?>">Удалить</a><br><hr><?php
    }
}

for($p = 1; $p <= $arg['total_pages']; $p++){
?>
<a href="<?php echo URL;?>admin/deleteart/<?php echo $p;?>"><?php echo $p;?></a>

<?php
}
?>
<br>
<a href="<?php echo URL;?>admin">Назад</a>