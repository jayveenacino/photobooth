<?php
if(isset($_POST['image'])) {
    $data = $_POST['image'];
    $data = str_replace('data:image/png;base64,', '', $data);
    $data = base64_decode($data);
    
    $filename = "photo_" . time() . rand(1000, 9999) . ".png";
    file_put_contents($filename, $data);

    echo $filename;
}
?>
