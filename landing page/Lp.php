<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kidulan room | lp</title>
    <link rel="stylesheet" type="text/css" href="Lp.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <label class="ttl">kidulan room</label>
            <ul>
                <li><a href="../home.php">admin</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1>selamat datang</h1>
        </div>
        <div class="form-customer">
            <form method="post" action="input_aksi_kamar.php">
                <table class="booking">
                    <tr>
                        <td>nama</td>
                        <td>nik</td>
                        <td>check-in</td>
                        <td>check-out</td>
                        <td>room type</td>
                    </tr>
                    <tr>
                        <td><input type="text" name=""></td>
                        <td><input type="number" name=""></td>
                        <td><input type="date" name=""></td>
                        <td><input type="date" name=""></td>
                        <td><select id="tipe_kamar" name="tipe_kamar" required>
                                <option value="single_bed">single bed</option>
                                <option value="dual_bed">dual bed</option>
                                <option value="`VIP">VIP</option>
                            </select>
                        </td>
                        <td><button input type="submit">book now!</button></td>
                </table>
            </form>
        </div>
    </div>
    <div class="sample">
        <table>
            <tr class="gbr">
                <td><img class="jbeg" src="depan.jpg" alt=""></td>
                <td><img class="jbeg" src="single_bed.jpg" alt=""></td>
                <td><img class="jbeg" src="dual_bed.jpg" alt=""></td>
                <td><img class="jbeg" src="vip.jpg" alt=""></td>
            </tr>
            <tr class="text">
                <td>halaman depan</td>
                <td>single bed room</td>
                <td>dual bed room</td>
                <td>VIP room</td>
            </tr>
            <tr class="gbr">
                <td><img class="jbeg" src="kolam-renang.jpeg" alt=""></td>
                <td><img class="jbeg" src="Resepsionis.jpg" alt=""></td>
                <td><img class="jbeg" src="parkir.jpg" alt=""></td>
                <td><img class="jbeg" src="resepsionis-hotel.jpg" alt=""></td>
            </tr>
            <tr class="text">
                <td>kolam renang</td>
                <td>resepsionis</td>
                <td>tempat parkir luas</td>
                <td>pelayanan ramah</td>
            </tr>
            <tr class="gbr">
                <td><img class="jbeg" src="restaurant.jpeg" alt=""></td>
                <td><img class="jbeg" src="balkon.jpg" alt=""></td>
                <td><img class="jbeg" src="bathroom.jpg" alt=""></td>
            </tr>
            <tr class="text">
                <td>restaurant</td>
                <td>pemandangan di balkon</td>
                <td>clean bathroom</td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <label class="text-footer">Made with coffe by Kurniawan_Firdaus @SMKN1BANTUL.</label>
        <div class="social-media">
            <a href="https://www.facebook.com/XORSE4R" target="tab">
                <img src="Facebook_logo.png" alt="facebook">
            </a>
            <a href="https://www.instagram.com/kurniawanfird/" target="tab">
                <img src="instagram_logo.png" alt="instagram">
            </a>
            <a href="https://www.tiktok.com/@emvesatu" target="tab">
                <img src="tiktok_logo.png" alt="tiktok">
            </a>
        </div>
    </div>
</body>

</html>