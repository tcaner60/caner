<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Uzay ve Astronomi Anketi</title>
    <style>
		
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
        }
        .container {
            width: 65%;
            margin: 0 auto;
            background-color: #F0E4E4;
            padding: 20px;
            border: 1px solid #ccc;
            opacity: 80%;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #000000;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #000000;
            color: #fff;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background-color: #000000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer; 	
			display: block;
    margin: 0 auto;
    margin-top: 30px;
			
        }
        input[type="submit"]:hover {
            background-color: #000000;
        }
    </style>
</head>
<body>
	<style>
    body {
        background-image: url('background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        font-family: Arial, sans-serif; 
        color: #000000; 
    }

</style>

	
    <div class="container">
        <h1>Uzay ve Astronomi Anketi</h1>
        <p> Caner Yılıdırım  211250092</p>
        <p>Kamil Erdem Çimen 221250056</p>
        <p>Afyon Kocatepe Üniversitesi Bilgisayar Programcılığı 2. Sınıf Uzay ve Astronomi Anketi</p>
        <p><strong>Ders: Araştırma Yöntem ve Teknikleri </strong></p>
        <form action="anket_sonuc.php" method="POST">
            <table>
                <tr>
                    <th width="5%">Soru No</th>
                    <th width="59%">Soru</th>
                    <th width="36%">Cevap</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>İsim ve Soyisiminiz nedir ?</td>
                    <td>
                        <input type="text" name="soru4" value=""> 
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kaç yaşındasınız ?</td>
                    <td>
                        <input type="radio" name="soru2" value="<18">  	18 ve altı
                        <input type="radio" name="soru2" value="18-20"> 18-20
                        <input type="radio" name="soru2" value="20-25"> 20-25
                        <input type="radio" name="soru2" value=">25"> >25
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cinsiyetiniz nedir ?</td>
                     <td>
                        <input type="radio" name="soru3" value="Bay"> Erkek 
                        <input type="radio" name="soru3" value="Bayan"> Kadın  
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Eğitim durumunuz nedir ?</td>
                    <td>
                        <input type="radio" name="soru1" value="Lise"> Lise
                        <input type="radio" name="soru1" value="Önlisans"> Önlisans
                        <input type="radio" name="soru1" value="Lisans"> Lisans
                        <input type="radio" name="soru1" value="Yüksek Lisans"> Yüksek Lisans
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sizce Ay'a gerçekten  gidildi mi ?</td>
                    <td>
                        <input type="radio" name="soru5" value="Evet"> Evet
                        <input type="radio" name="soru5" value="Hayır"> Hayır
                        <input type="radio" name="soru5" value="Kararsızım"> Kararsızım
						<input type="radio" name="soru5" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dünyanın düz olduğu teorisine katılıyor musunuz ?</td>
                    <td>
                        <input type="radio" name="soru6" value="Evet"> Evet
                        <input type="radio" name="soru6" value="Hayır"> Hayır
                        <input type="radio" name="soru6" value="Kararsızım"> Kararsızım
						<input type="radio" name="soru6" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Sizce Atmosfer dışına  herhangi bir canlının çıkabilmesi mümkün mü ?</td>
                    <td>
                        <input type="radio" name="soru7" value="Evet"> Evet
                        <input type="radio" name="soru7" value="Hayır"> Hayır
                        <input type="radio" name="soru7" value="Kararsızım"> Kararsızım
						<input type="radio" name="soru7" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Sizce Uzayın bir sınırı  var mıdır ?</td>
                    <td>
                        <input type="radio" name="soru8" value="Evet"> Evet
                        <input type="radio" name="soru8" value="Hayır"> Hayır
                        <input type="radio" name="soru8" value="Kararsızım"> Kararsızım
						<input type="radio" name="soru8" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Uzayın genişleme  teorisini kabul ediyor musunuz ?</td>
                    <td>
                        <input type="radio" name="soru9" value="Evet"> Evet
                        <input type="radio" name="soru9" value="Hayır"> Hayır
                        <input type="radio" name="soru9" value="Kararsızım"> Kararsızım
						<input type="radio" name="soru9" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Sizce ışınlanmak mümkün  olabilir mi ?</td>
                    <td>
                        <input type="radio" name="soru10" value="Evet"> Evet
                        <input type="radio" name="soru10" value="Hayır"> Hayır
                        <input type="radio" name="soru10" value="Kararsızım"> Kararsızım
						<input type="radio" name="soru10" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Zamanda ileriye yolculuk  mümkün mü ?</td>
                    <td>
                        <input type="radio" name="soru11" value="Evet"> Evet
                        <input type="radio" name="soru11" value="Hayır"> Hayır
                        <input type="radio" name="soru11" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru11" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Zamanda geriye yolculuk  mümkün mü ?</td>
                    <td>
                        <input type="radio" name="soru12" value="Evet"> Evet
                        <input type="radio" name="soru12" value="Hayır"> Hayır
                        <input type="radio" name="soru12" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru12" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>NASA verilerine  güveniyor musunuz ?</td>
                    <td>
                        <input type="radio" name="soru13" value="Evet"> Evet
                        <input type="radio" name="soru13" value="Hayır"> Hayır
                        <input type="radio" name="soru13" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru13" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Uzay araştırmalarında  hangi ülkenin öncü olduğunu düşünüyorsunuz ?</td>
                    <td>
                        <input type="radio" name="soru14" value="ABD"> 
                        ABD
                        <input type="radio" name="soru14" value="RUSYA"> 
                        RUSYA
                        <input type="radio" name="soru14" value="ÇİN">       
                        ÇİN
                        <input type="radio" name="soru14" value="TÜRKİYE"> 
                        TÜRKİYE
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Çoklu evren teorisine  inanıyor musunuz ?</td>
                    <td>
                        <input type="radio" name="soru15" value="Evet"> Evet
                        <input type="radio" name="soru15" value="Hayır"> Hayır
                        <input type="radio" name="soru15" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru15" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Sizce insanoğlu başka  bir gezegene uygarlığını taşıyabilir mi ?</td>
                    <td>
                        <input type="radio" name="soru16" value="Evet"> Evet
                        <input type="radio" name="soru16" value="Hayır"> Hayır
                        <input type="radio" name="soru16" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru16" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Dünya dışı varlıklarla  temasa geçildiğine inanıyor musunuz ?</td>
                    <td>
                        <input type="radio" name="soru17" value="Evet"> Evet
                        <input type="radio" name="soru17" value="Hayır"> Hayır
                        <input type="radio" name="soru17" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru17" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Gözlemlenebilir Evrende bizden başka bir canlı türü  olduğuna inanıyor musunuz ?</td>
                    <td>
                        <input type="radio" name="soru18" value="Evet"> Evet
                        <input type="radio" name="soru18" value="Hayır"> Hayır
                        <input type="radio" name="soru18" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru18" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Karadelikler gerçekten  var mı ?</td>
                    <td>
                        <input type="radio" name="soru19" value="Evet"> Evet
                        <input type="radio" name="soru19" value="Hayır"> Hayır
                        <input type="radio" name="soru19" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru19" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Güneş Sisteminde bizden  farklı bir yaşam formu sizce var mı ?</td>
                    <td>
                        <input type="radio" name="soru20" value="Evet"> Evet
                        <input type="radio" name="soru20" value="Hayır"> Hayır
                        <input type="radio" name="soru20" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru20" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Sizce evrenin başlangıcı  Big Bang mi ?</td>
                    <td>
                        <input type="radio" name="soru21" value="Evet"> Evet
                        <input type="radio" name="soru21" value="Hayır"> Hayır
                        <input type="radio" name="soru21" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru21" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Sizce evrende ki herşey  olasılıklar ve rastlantı sonucunda mı oluştu ?</td>
                    <td>
                        <input type="radio" name="soru22" value="Evet"> Evet
                        <input type="radio" name="soru22" value="Hayır"> Hayır
                        <input type="radio" name="soru22" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru22" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Evrenin bir gün yok olacağına inanıyor musunuz ?</p></td>
                    <td>
                        <input type="radio" name="soru23" value="Evet"> Evet
                        <input type="radio" name="soru23" value="Hayır"> Hayır
                        <input type="radio" name="soru23" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru23" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Görecelik kavramı sizce  gerçek mi ?</td>
                    <td>
                        <input type="radio" name="soru24" value="Evet"> Evet
                        <input type="radio" name="soru24" value="Hayır"> Hayır
                        <input type="radio" name="soru24" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru24" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Sizce zaman farklı dünya  ve galaksilerde farklı mı işliyor ?</td>
                    <td>
                        <input type="radio" name="soru25" value="Evet"> Evet
                        <input type="radio" name="soru25" value="Hayır"> Hayır
                        <input type="radio" name="soru25" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru25" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Güneş sistemimizden hangi gezegenler en çok dikkatinizi çekiyor ?</td>
                    <td>
                        <input type="checkbox" name="soru26s1" value="Mars">
                        Mars
                        <input type="checkbox" name="soru26s2" value="Satürn"> 
                        Satürn
                        <input type="checkbox" name="soru26s3" value="Neptün"> 
                        Neptün 
						<input type="checkbox" name="soru26s4" value="Jüpiter"> 
						Jüpiter</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Bilinen evrenin en büyük 2.Karadeliği TON-618 sizce  Güneşin kaç katıdır ?</p></td>
                    <td>
                        <input type="radio" name="soru27" value="1 milyon"> 
                        1 milyon
                        <input type="radio" name="soru27" value="60 milyar"> 
                        60 milyar
                        <input type="radio" name="soru27" value="60 bin"> 
                        60 bin 
                        <input type="radio" name="soru27" value="10"> 
                        10</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Sizce insan uygarlığı  kendi sonunu kendisi mi getirecek ?</td>
                    <td>
                        <input type="radio" name="soru28" value="Evet"> Evet
                        <input type="radio" name="soru28" value="Hayır"> Hayır
                        <input type="radio" name="soru28" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru28" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Astronot olmak  ister miydiniz ?</td>
                    <td>
                        <input type="radio" name="soru29" value="Evet"> Evet
                        <input type="radio" name="soru29" value="Hayır"> Hayır
                        <input type="radio" name="soru29" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru29" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Son olarak Astronominin  önemli bir bilim dalı olduğunu düşünüyor musunuz ?</td>
                    <td>
                        <input type="radio" name="soru30" value="Evet"> Evet
                        <input type="radio" name="soru30" value="Hayır"> Hayır
                        <input type="radio" name="soru30" value="Kararsızım"> Kararsızım 
						<input type="radio" name="soru30" value="Bilmiyorum"> Bilmiyorum
                    </td>
                </tr>
          </table>
            <input type="submit" value="Anketi Gönder">


      </form>
</div>
</body>
</body>
</html>
