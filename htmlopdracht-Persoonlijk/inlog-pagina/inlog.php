<?php

echo  "cool";
?>











<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="inlog.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <div class="top-bar">

            <img src="img/banner.png" alt="banner" class="banner">

        </div>
    </div>

    <div class="box-layout">

        <form id="loginForm" method="POST">
            <div class="user-code">
                <label for="username">Username/mail:</label><br>
                <input type="text" id="username" name="username" required>

                <div>
                    <label for="password">password:</label><br>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="error" id="error-message" style="display: none;"></div>
                <button class="button-layout" name="submit" type="submit">Inloggen</button> <br>
            </div>

            <div class="inlog-logo">
                <a
                    href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmyaccount.google.com%3Futm_source%3Daccount-marketing-page%26utm_medium%3Dgo-to-account-button&service=accountsettings&ifkv=AcMMx-d96M_icU6yqcjdZ7zRBVYgS3vg7RO0CQwRT1E9DLjbmdKPIieqsUoFEWhDS7NWgsJfpqTjVQ&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                    <img src="img/gmail.png" alt="klikbare gif" class="logo">
                </a>
                <a href="https://www.facebook.com/?locale=nl_NL&refsrc=deprecated&_rdr">
                    <img src="img/facebook.png" alt="klikbare gif" class="logo">
                </a>
                <a href="https://x.com/twitt_login">
                    <img src="img/x.png" alt="klikbare gif" class="logo">

                </a>
            </div>




        </form>
        <div class="image-container">
            <img src="img/bannerver.png" alt="Beschrijving van de afbeelding" class="left-image">
        </div>

    </div>

</body>

</html>