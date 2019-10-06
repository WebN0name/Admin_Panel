<?php
if($arg == false){
    echo "no data" . "<br>";
}else{
    foreach($arg['notes'] as $d){
        echo $d['name'] . "<br>";
        echo $d['text'] . "<br><hr>";
    }
}

for($p = 1; $p <= $arg['total_pages']; $p++){
?>
<a href="<?php echo URL;?>admin/showarts/<?php echo $p;?>"><?php echo $p;?></a>

<?php
}
?>
<br>
<a href="<?php echo URL;?>admin">Назад</a>