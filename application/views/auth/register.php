<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /*Start Global Style*/
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #e9ebee;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: sans-serif;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            height: 100%
        }

        .login,
        .register {
            width: 50%
        }

        /*Start Login Style*/
        .login {
            float: left;
            background-color: #fafafa;
            height: 100%;
            border-radius: 10px 0 0 10px;
            text-align: center;
            padding-top: 20px;
        }

        .login h1 {
            margin-bottom: 40px;
            font-size: 2.5em;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 30px;
            border: none;
            background-color: #eeeeef;
        }

        .login span {
            float: left
        }

        .login a {
            float: right;
            text-decoration: none;
            color: #000;
            transition: 0.3s all ease-in-out;
        }

        .login a:hover {
            color: #9526a9;
            font-weight: bold
        }

        .login button {
            width: 100%;
            margin: 30px 0;
            padding: 10px;
            border: none;
            background-color: #9526a9;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s all ease-in-out;
        }

        .login button:hover {
            width: 97%;
            font-size: 22px;
            border-radius: 5px;

        }

        .login hr {
            width: 30%;
            display: inline-block
        }

        .login p {
            display: inline-block;
            margin: 0px 10px 30px;
        }

        .login ul {
            list-style: none;
            margin-bottom: 40px;
        }

        .login ul li {
            display: inline-block;
            margin-right: 30px;
            cursor: pointer;
        }

        .login ul li:hover {
            opacity: 0.6
        }

        .login ul li:last-child {
            margin-right: 0
        }

        .login .copyright {
            display: inline-block;
            float: none;
        }

        /*Start Register Style*/
        .register {
            float: right;
            background-image: linear-gradient(135deg, #23212f 5%, #9526a9 95%);
            height: 100%;
            color: #fff;
            border-radius: 0 10px 10px 0;
            text-align: center;
            padding: 100px 0;
        }

        .register h2 {
            margin: 30px 0;
            font-size: 50px;
            letter-spacing: 3px
        }

        .register p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .register a {
            background-color: transparent;
            border: 1px solid #FFF;
            border-radius: 20px;
            padding: 10px 20px;
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            transition: 0.2s all ease-in-out;
        }

        .register a:hover {
            color: #9526a9;
            background-color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="login">
            <div class="container">
                <h1>Sign in</h1>
                <form action="" method="post">
                    <input id="username" name="username" type="text" placeholder="Username">
                    <input id="nama_depan" name="nama_depan" type="text" placeholder="Nama Depan"><br>
                    <input id="nama_belakang" name="nama_belakang" type="text" placeholder="Nama Belakang"><br>
                    <input id="email" name="email" type="email" placeholder="Email">
                    <input id="password" name="password" type="password" placeholder="Password"><br>
                    <select id="role" name="role">
                        <option value="karyawan">Karyawan</option>
                        <option value="admin">Admin</option>
                    </select>
                    <button type="submit">Sign In</button>
                </form>
            </div>
        </div>
        <div class="register">
            <div class="container">
                <i class="fa-solid fa-user-pen"></i>
                <h2>Halo,Kak!</h2>
                <p>Jika Kakak Sudah Punya Akun Langsung Login Aja Kak</p>
                <a type="button" href="">Login <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</body>

</html>