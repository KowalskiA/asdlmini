<?php
include '..\config\confi.php';
$conn = OpenCon();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
           Login
        </title>
    </head>
    <style>
        h1{
    text-align: center;
    letter-spacing: 10px;
    margin: 100px 0;
}
.form
{
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
input
{
    display: block;
    margin: 20px 0;
    width: 300px;
    padding: 10px;   
}
label
{
    font-size: 20px;
}
button
{
    font-size: 20px;
    background: crimson;
    color: white;
    border: none;
    width: 100%;
    margin-top: 20px;
    padding: 10px 20px;
}
    </style>
    <body>
        <h1>CASEGGIATO</h1>
        <div class="form">
            <form action="verify.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username">
                <label for="password">Password</label>
                <input type="password" name="password">
                <button type="submit">LOGIN</button>
            </form>
        </div>
       
    </body>
</html>