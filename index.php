<!DOCTYPE html>

<head>
    <title>Gezi Rehberiniz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./pictures/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/840f5528a9.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <div id="container">
        <div id="container-main" style="background-color: brown;">
            <img src="./pictures/indir.jpg" style="width: 100px; height: 100px;">
            <ul type="none" id="liste">
                <li>
                    <a href="#" onmouseover="on_mouse('fr')" onmouseout="out_mouse('fr')">
                        <i class="fa-solid fa-hotel"></i> Rezervasyon</a>
                    <div class="middle" id="fr"></div>
                </li>
                <li>
                    <a href="#" onmouseover="on_mouse('sr')" onmouseout="out_mouse('sr')">
                        <i class="fa-solid fa-credit-card"></i> Ödeme Seçenekleri</a>
                    <div class="middle" id="sr"></div>
                </li>
                <li>
                    <a href="#" onmouseover="on_mouse('tr')" onmouseout="out_mouse('tr')">
                        <i class="fa-solid fa-map-location-dot"></i> Rotalar</a>
                    <div class="middle" id="tr"></div>
                </li>
                <li>
                    <a href="#" onmouseover="on_mouse('nt')" onmouseout="out_mouse('nt')">
                        <i class="fa-solid fa-square-poll-horizontal"></i> Acente</a>
                    <div class="middle" id="nt"></div>
                </li>
            </ul>
            <span class="dancing-script-uniquifier">Seyahat Etmek Özgürlüktür</span>
        </div>
        <div id="mnst">
            <span id="mbd">Tüm İadelerde Kesinti Yok!</span>
        </div>
        <div id="bltn">
            <span id="bltn1">E-posta bültenimize kayıt olun</span>
            <form id="form" method="post" enctype="multipart/form-data">
                <input type="text" id="enter" name="text">
                <button type="submit" name="post" id="bltnbtn">Abone Ol!</button>
            </form>
        </div>
    </div>
    <div id="popup">
        <div id="close" onclick="closer()">x</div>
        <div id="note">Bu yıl için tüm kontenjanlarımız dolmuştur.</div>
    </div>
    <script src="app.js"></script>
</body>

</html>
<?php
$conn = new PDO('mysql:host=localhost;dbname=e_mail_bulten', 'root', '');
if (isset($_POST['post'])) {
    $info_user = $_POST['text'];
    $var_mi = $conn->query("SELECT * FROM duyuru_uyeler WHERE uye_liste = '$info_user'");
    $var_mi_result = $var_mi->fetch();
    $sorgu_sonuc = $var_mi->rowCount();
    if ($sorgu_sonuc <= 0){
        $conn->query("insert into duyuru_uyeler (uye_liste) values ('$info_user')");
    }
}

?>