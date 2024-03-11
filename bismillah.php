<!DOCTYPE html>
<html>
    <head>
        <title>RUMAH ADAT</title>
    </head>
    <body>
        <header>
            <div class="main">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="profil.php">Profile</a></li>
                </ul>
                </div>
                <div class="button">
                    <a href="materi.php" class="btn1">TELUSURI</a>
                </div> 
                <div class="title">
                    <h1>RUMAH ADAT INDONESIA</h1>
                </div>
            </div>
        </header>
    </body>
</html>

<style>
*{
    margin:0;
    padding:0;
    font-family: sans-serif;
}
header{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bg.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
ul{
    float:right;
    list-style-type: none;
    margin-top: 25px;
}
ul li{
    display: inline-block;
}
ul li a{
    text-decoration: none;
    color: white;
    padding: 15px 20px;
    border: 1px solid;
    transition: 0.6s;
    margin: 10px;
}
ul li a:hover{
    background-color:rgba(173, 173, 173, 0.377);
    color: white;
}
.main{
    max-width: 1200px;
    margin: auto; 
}
.title {
position: absolute;
text-alignalign: center;
top: 40%;
left:30%;
transform: translate(-50%-50%);
}
.title h1{
    font-family: poppins;
    color: white;
    font-size: 50px;
}
.button{
    position: absolute;
    top: 55%;
    left: 47%;
    transform: translate(-50%-50%);
}
.btn1{
    border: 1px solid white;
    padding: 10px 30px;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
    border-radius: 5px;
    margin: 10px;
}
.btn1:hover{
    background-color: rgba(173, 173, 173, 0.377);
    color: white;
}
</style>
