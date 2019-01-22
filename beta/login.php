<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login</title>
        <link href="css/login.css" rel="stylesheet" type="text/css">
        
    </head>
    <body class="align">
        <?php session_start(); ?>
        <div class="login-page">
            
            <div class="form">
                <h2 style="color:#ff9933">Login To Your Account</h2>
                <form class="login-form">
                    <input type="text" placeholder="userName"/>
                    <input type="text" placeholder="userEmail"/>
                    <button>login</button>
                </form>
            </div>
        </div>
    </body>

    <?php
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    ?>
</html>
