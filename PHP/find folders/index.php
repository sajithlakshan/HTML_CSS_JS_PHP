<?php 
$dir = new DirectoryIterator('D:\xampp\htdocs');
foreach ($dir as $fileinfo ) {

    if ($fileinfo->isDir() && !$fileinfo->isDot()) {
        echo $fileinfo->getFilename().'<br>';//
    }elseif(!$fileinfo->isDot()){
        echo $fileinfo->getFilename().'-----'.'<br>';
    }
}
echo "++++++++++++++++++++++++++++++++<br>";
$dir = 'D:\xampp\htdocs';

// Sort in ascending order - this is default
$a = scandir($dir);

echo $a[2].'<br>';
print_r($a[2]);
echo "==========================<br>";
foreach($a as $AA){
    echo "$AA <br>";
}
echo "==========================<br>";
foreach($b as $AA){
    echo "$AA <br>";
}

// Sort in descending order
$b = scandir($dir,1);
?>
