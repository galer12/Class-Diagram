<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galih</title>
</head>
<body>
    <form class="btn" method="POST" action="">
        <input type="submit" name="image" value="ImageButton" style="float: left;width:100px;height:50px; border-radius:10px; box-shadow: 3px 3px 5px #333; margin-bottom:30px">
        <input type="submit" name="shape" value="ShapeButton" style=" float:right;width:150px;height:75px; border-radius:10px; box-shadow: 3px 3px 5px #333;">
    </form>
    <?php
    class button{
        public $x;
        public $y;
        public $width;
        public $height;
    }
    class ImageButton extends button{
        public $Lebar;
        public function cekUkuran(){
            echo "<center>";
            echo "Lebarnya Adalah ".$this->lebar;
            echo "<br>";
            echo "Tingginya Adalah ".$this->tinggi;
            echo "<br>";
            echo "Posisinya di ".$this->posisi;
            echo "</center>";
        }
    }
    class ShapeButton extends button{
        public $clicked;
        public function cekKlicked(){
            echo "<center>";
            echo "Lebarnya Adalah ".$this->lebar;
            echo "<br>";
            echo "Tingginya Adalah ".$this->tinggi;
            echo "<br>";
            echo "Posisinya di ".$this->posisi;
            echo "</center>";
        }
    }

function satu(){
    $button = new ImageButton();
    $lebar = $button ->lebar = 100.0;
    $tinggi = $button ->tinggi = 50.0;
    $posisi = $button ->posisi = "Kiri";
    
    echo $button->cekUkuran();
    }
function dua(){
    $button = new ShapeButton();
    $lebar = $button ->lebar = 150.0;
    $tinggi = $button ->tinggi = 75.0;
    $posisi = $button ->posisi = "Kanan";
    
    echo $button->cekKlicked();
}

    if(isset($_POST['image'])){
        echo satu();
    }else if(isset($_POST['shape'])){
        echo dua();
    }
    ?>
</body>
</html>