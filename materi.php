<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulau</title>
</head>
<body>
     <div class="rumah-adat">
        <h1>Pulau di Indonesia</h1></div>
        <div class="box-kiri">
            <a href="sumatera.php"><img src="sumatera.jpg" width="200" height="200">
            <p><h3>Sumatera</h3></p></a>
            <p>Sumatra adalah pulau keenam terbesar di dunia yang terletak di Indonesia, dengan luas 473.481 km². Penduduk yang tinggal di pulau ini sekitar 57.940.351 jiwa. Pulau ini dikenal pula dengan nama lain yaitu Pulau Percha, Andalas, atau Suwarnadwipa.</p>
        </div>
        <div class="box-tengah">
            <a href="kalimantan.php"><img src="kalimantan.png" width="200" height="200">
            <p><h3>Kalimantan</h3></p></a>
            <p>Kalimantan, atau juga disebut Borneo oleh dunia internasional, adalah pulau terbesar ketiga di dunia yang terletak di sebelah utara Pulau Jawa dan di sebelah barat Pulau Sulawesi. Pulau Kalimantan dibagi menjadi wilayah Indonesia, Malaysia, dan Brunei.</p>        
        </div>
        <div class="box-kanan">
            <a href="sulawesi.php"><img src="sulawesi.png" width="200" height="200">
            <p><h3>Sulawesi</h3></p>
            <p>Sulawesi, dahulu pernah dikenal sebagai Celebes adalah sebuah pulau di Indonesia. Sulawesi merupakan salah satu dari empat Kepulauan Sunda Besar dan merupakan pulau terbesar kesebelas di dunia.</p>
        </div>
        <div class="box-jawa">
            <a href="jawa.php"><img src="jawa.jpg" width="200" height="200">
            <p><h3>Jawa</h3></p></a>
            <p>Jawa adalah sebuah pulau di Indonesia yang terletak di kepulauan Sunda Besar dan merupakan pulau terluas ke-13 di dunia. Jumlah penduduk di Pulau Jawa sekitar 150 juta. Pulau Jawa dihuni oleh 60% total populasi Indonesia.</p>
        </div>
        <div class="box-papua">
            <a href="papua.php"><img src="papua.png" width="200" height="200">
            <p><h3>Papua</h3></p></a>
            <p>Papua, adalah provinsi yang terletak di pesisir utara Papua, Indonesia. Provinsi Papua sebelumnya bernama Irian Barat dan Irian Jaya yang mencakup seluruh Tanah Papua bekas Keresidenan Nugini Barat. Ibu kota Papua berada di Kota Jayapura, yang berbatasan langsung dengan negara Papua Nugini.</p>
        </div>
     <div class="button">
        <a href="user.php" class="btn1">BACK</a>
    </div> 
</body>
</html>
<style>

.rumah-adat {
    text-align: center;
    color: white;
    margin-top: 28px;
    align-content: center;
    background-color: #070F2B;
}
a{
    color: white;
}
.box-kiri, .box-tengah, .box-kanan, .box-jawa, .box-papua {
    width: 235px;
    height: 450px;
    background-color:#070F2B;
    text-align: center;
    color: white;
    padding: 20px 70px;
    margin: 70px 15px 15px 40px;
    border-radius: 20px;
    float: left;
}
.box-jawa, .box-papua {
    width: 235px;
    height: 450px;
    background-color:#070F2B;
    text-align: center;
    color: white;
    padding: 20px 70px;
    border-radius: 20px;
    align-items: center;
}
.button{
    position:absolute;
    top: 9%;
    left: 5%;
    transform: translate(-50%-50%);
}
.btn1{
    border: 1px solid white;
    padding: 5px 15px;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
    margin top: 20px;
}
.btn1:hover{
    background-color: rgba(173, 173, 173, 0.377);
    color: white;
}
</style>