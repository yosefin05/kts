<!DOCTYPE html>
<html>
<head>
        <title>Input Kategori</title>
        
</head>
<body>
    <div class="container">
        <h1>Input Kategori</h1><br>
            <div class="input-box">
            <form action="kategori_proses.php" method="post">
            <select name="pulau" id="pulau"required>
                <option disabled selected> Pulau </option>
                <option value="Sumatera">Sumatera</option>
                <option value="Jawa">Jawa</option>
                <option value="Kalimantan">Kalimantan</option>
                <option value="Sulawesi">Sulawesi</option>
                <option value="Papua">Papua</option>
            </select>
            <select name="kategori" id="pulau"required>
            </div>    
            <button type="submit" class="btn">Submit</button>
            </form>
    </div>
</body>
</html>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "poppins", "sans-serif";
        color: white;
    }
    body { 
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #070F2B;
    }
    .container h1{
        font-size: 36px;
        text-align: center;
    }
    .container{
        background-color: #070F2B;
        border: none;
        border: 2px solid whitesmoke;
    }
    .container select{
        background: #070F2B;
    }
    .btn{
        width: 35%;
        height:auto;
        margin-left: 33%;
        margin-top: 2px;
        background: transparent;
        border: none;
        border: 2px solid whitesmoke;
        outline: none;
        cursor: pointer;
        font-size: 16px;
        color: white;
        font-weight: 600;
    }
    .forgot{
        text-align: center;
    }
</style>