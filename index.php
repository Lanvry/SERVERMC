<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "call_packages.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Userbox_creeper.svg/2048px-Userbox_creeper.svg.png" type="image/x-icon">
    <title>XIRPL Server</title>
</head>
<body>
    <div id="port-page">
        <center><div class="navigation" onclick="creeperclose()"></div></center>
        <iframe src="131742" frameborder="0"></iframe>
    </div>
    <nav class="navigation">
        <h3><b>Survival<text>CORE</text></b></h3>
        <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Userbox_creeper.svg/2048px-Userbox_creeper.svg.png" class="logo" onclick="creeper()" alt=""></div>
    </nav>

    <div class="card">
        <h2><b>SurvivalCORE</b></h2>
        <div id="status" class="status"><ion-icon name="time"></ion-icon></div>
        <div class="row">
            <div class="col-auto"><div id="pingResults"><ion-icon name='cellular'></ion-icon> <text id="ping">Connecting</text></div></div>
            <div class="col"><h1><ion-icon style="color:lightblue; position:relative; left:-20px;" onclick="alert('Ping ini adalah ping yang diberikan dari koneksi server')" name="alert-circle-outline"></ion-icon></h1></div>
        </div>
        <hr>
        <h5><b>About</b></h5>
        <pre>
            IP      : tcp.0.ap.ngrok.io
            Host    : NGROK
            PORT    : <text id="port"></text> (Required)
            ISP     : PT. Telekomunikasi Indonesia
            
        </pre>
    </div>
    <div class="card">
        <h5><b>Minecraft Java 1.20.1</b></h5>
        <text>Forge Server</text>
        <div class="status"><b>Version</b></div>
    </div>
    <div class="card">
        <h5><b>Download Mods</b></h5>
        <p>Taruh mods ini di folder Minecraft anda jika ingin main di server ini dikarenakan server ini adalah server mods, dan server ini hanya support Minecraft Forge di versi <b>1.20.1</b> saja</p>
        <button class="download">Download</button>
        <div class="status"><b>Mods</b></div>
    </div>


    <script src="js/script.js"></script>
</body>
</html>