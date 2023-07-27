<html>
    <head>
        <style>
            .all{border-radius: 20px;
                text-align: center;
                margin-top: 70px;
                margin-left: 500px;
                width:400px; height: 400px;
            background-color: cornsilk;}
            .a{text-align: center;
                margin-bottom: 10px;}
            .b{    margin-left: 35px;
                margin-bottom: 10px;
            margin-top: 10px;}
            .c{    margin-left: 35px;
                margin-bottom: 10px;}
            .d{    margin-left: 35px;
                margin-bottom: 10px;}
            .e{    margin-left: 35px;
                margin-bottom: 10px;}
            .f{    margin-left: 35px;}
            .judul{text-align: center;
                border-bottom:3px solid rgb(219, 57, 57);}
            .penjelasan{text-align: center;}
            .rum{text-align: center;}

        </style>
        <div class="all">
        <title>Tukar Mata Uang</title>
    </head>
 <body>
        <h1 class="judul">Tukar Mata Uang</h1>
        <h2 class="penjelasan">November 16, 2022</h2>
        <table>
        <form method ="POST">
        <div class="a">
            <label>USD.</label>
                    <input type="number" name="USD">
                    </div<br>
                        <div class="b">
          <input type="submit" name="nt" value="RP">
          </div><div class="c">
          <input type="submit" name="nt" value="EUR">
          </div><div class="d">
          <input type="submit" name="nt" value="JPY">
          </div><div class="e">
          <input type="submit" name="nt" value="KRW">
          </div><div class="f">
          <input type="submit" name="nt" value="GBP">
          </div><br>
          </div>
</form>
</body>
</html>
<?php
if(isset($_POST['nt'])){
	$USD=$_POST['USD'];
	$nt=$_POST['nt'];
	if($nt=="RP")
		$hasil=$USD*15000;
        else if($nt=="EUR")
		$hasil=$USD*0.97;
        else if($nt=="JPY")
		$hasil=$USD*139.21;
        else if($nt=="KRW")
		$hasil=$USD*1338.30;
        else if($nt=="GBP")
		$hasil=$USD*0.84;
}?>
<html>
<br>Result: <input type='text' value="<?php error_reporting(0); echo $hasil; ?>"><br>
</html>