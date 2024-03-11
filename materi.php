<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Adat</title>
</head>
<body>
     <div class="rumah-adat">
        <h1>Rumah Adat di Indonesia</h1>
        <div class="box-kiri">
            <img src="aceh.jpg">
            <p><h3>Rumah Adat Sumatera</h3></p>
            <p>Salah satu rumah adat di Sumatera adalah "Rumoh Aceh" yang berasal dari Aceh</p>
        </div>
        <div class="box-tengah">
         <img src="kalimantan.jpg">
            <p><h3>Rumah Adat Kalimantan</h3></p>
            <p>Salah satu rumah adat di Kalimantan adalah "Rumah Lamin" yang berasal dari Kalimantan Timur</p>
        </div>
        <div class="box-kanan">
            <img src="sulawesi.jpg">
            <p><h3>Rumah Adat Sulawesi</h3></p>
            <p>Salah satu rumah adat di Sulawesi adalah "Rumh Tongkonan" yang berasal dari Sulawesi Selatan</p>
        </div>
        <div class="box-jawa">
            <img src="jawa.png">
            <p><h3>Rumah Adat Jawa</h3></p>
            <p>Salah satu rumah adat di Jawa adalah "Rumah Joglo" yang berasal dari beberapa provinsi di Pulau Jawa</p>
        </div>
        <div class="box-papua">
            <img src="papua.jpg">
            <p><h3>Rumah Adat Papua</h3></p>
            <p>Salah satu rumah adat di Papua adalah "Rumah Honai" yang berasal dari daerah pegunungan di Papua</p>
     </div>
     <div class="button">
        <a href="bismillah.php" class="btn1">BACK</a>
    </div> 
</body>
</html>
<style>
.rumah-adat {
    text-align: center;
    color: rgb(0, 0, 0);
    margin-top: 30px;
    align-content: center;
    background-color: aliceblue;
}


.box-kiri, .box-tengah, .box-kanan, .box-jawa, .box-papua, .box-nusa {
    width: 320px;
    height: 450px;
    background-color:paleturquoise;
    text-align: center;
    padding: 20px 100px;
    margin: 70px 20px 20px 40px;
    border-radius: 20px;
    float: left;
}
.button{
    position:absolute;
    top: 6%;
    left: 5%;
    transform: translate(-50%-50%);
}
.btn1{
    border: 1px solid black;
    padding: 10px 30px;
    color: black;
    text-decoration: none;
    transition: 0.6s ease;
    border-radius: 5px;
    margin: 10px;
}
.btn1:hover{
    background-color: rgba(173, 173, 173, 0.377);
    color: black;
}
</style>