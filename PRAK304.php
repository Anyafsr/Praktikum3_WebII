<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak304</title>
    <style>
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
    $jumlah = NULL;
    $picture = "<img src = 'star.png'>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = $_POST["jumlah"];
    }
    if (isset($_POST['tambah'])) {
        $jumlah += 1;
    }
    if (isset($_POST['kurang'])) {
        $jumlah -= 1;
    }
    if (empty($jumlah)) { ?>
    <form action="" method="post">
        <label for="">Jumlah Bintang</label>
        <input type="text" name="jumlah"><br>
        <button  type="submit" name="kirim">Submit</button>
    </form>
    <?php }
    if(!empty($jumlah)){
        echo "Jumlah bintang : $jumlah " ?>
        <br><br>
        <?php
        for($i = 0; $i < $jumlah; $i++){
            echo "$picture";
            }
        ?>
        <form action="" method="post">
            <input type="text" name="jumlah" value="<?= $jumlah ?>" hidden>
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>
    <?php }
    ?>
</body>
</html>