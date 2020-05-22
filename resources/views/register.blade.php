<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.min.css')}}"> 
</head>
    <body>
    <div class="login-box">
        <h1>Membuat akun LMu.id</h1>
            <form>
            <p>Nama</p>
            <input type="text" name="Nama">
            <p>TTL</p>
            <input type="text" name="TTL">
            <p>Alamat</p>
            <input type="text" name="Alamat">
            <p>Email</p>
            <input type="text" name="Email">
            <p>Password</p>
            <input type="password" name="Kata Sandi">
             <p>Ulang Password</p>
            <input type="password" name="Ulang Kata Sandi">
            <p>Nomor Rekening</p>
            <input type="text" name="Pilih Pembayaran">
            <input type="submit" name="submit" value="Registrasi">   
            </form>
    <style>
    html, body {
        margin: 0;
        padding: 0;
        background: url(image.jpg);
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
    }
    .login-box{
        width: 700px;
        height: 750px;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }
    .avatar{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }
    h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }
    .login-box p{
        margin: 0;
        padding: 0;
        font-weight: bold;
    }
    .login-box input{
        width: 100%;
        margin-bottom: 20px;
    }
    .login-box input[type="text"], input[type="password"]
    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }
    .login-box input[type="submit"]
    {
        border: none;
        outline: none;
        height: 40px;
        background: #1c8adb;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }
    .login-box input[type="submit"]:hover
    {
        cursor: pointer;
        background: #39dc79;
        color: #000;
    }

    .login-box a{
        text-decoration: none;
        font-size: 20px;
        color: #fff;
    }
    .login-box a:hover
    {
        color: #39dc79;
    }
    </style>
            
        </div>
    
    </body>
</html>