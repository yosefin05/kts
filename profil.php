<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>            
    <a href="bismillah.php" class="btn1">KEMBALI</a>
    <div class="container">
        <header>
            <h1>Profil Saya</h1>
        </header>
        <main>
            <img src="photo.jpg" width="200" height="200" alt="Foto Profil">
            <h2><?php echo "Yosefin Kurniawati Tanto"; ?></h2>
            <p><?php echo "Halooo, saya bersekolah di SMK Telkom Sidoarjo kelas X SIJA 1. Dan ini adalah project Uji Kenaikan Level saya ^^"; ?></p>
        </main>
        <div class="social-links">
            <a href="https://www.instagram.com/yosefin_kt" target="_blank" class="social-link instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/yosefin05" target="_blank" class="social-link github"><i class="fab fa-github"></i></a>
            <a href="https://wa.me/+6287856249352" target="_blank" class="social-link whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 | Yosefin KT</p>
    </footer>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #070F2B;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    text-align: center;
    background-color: #1C2238;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 80%;
    max-width: 600px;
    margin-top: 20px;
}

header {
    margin-bottom: 20px;
}

main img {
    border-radius: 50%;
}

p {
    margin: 10px 0 0;
    line-height: 1.6;
}

footer {
    text-align: center;
    font-size: 0.9em;
    margin-bottom: 20px;
}

.social-links {
    margin-top: 20px;
}

.social-link {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
    padding: 10px;
    font-size: 1.5em;
    transition: transform 0.3s;
}

.social-link:hover {
    transform: scale(1.2);
}

.btn1 {
    position: absolute;
    top: 20px;
    left: 20px;
    border: 1px solid white;
    padding: 5px 15px;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
}

.btn1:hover {
    background-color: rgba(173, 173, 173, 0.377);
    color: white;
}
