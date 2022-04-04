<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<style>
    .card{
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>

<body>

    <?php
            class kalkulator{
                
            
                // public function __construct()
                // {
                //     // $this->dayabatterai = 0;
                //     $this->dayabatterai = $this->isidaya();
                // }
                public $dayabatterai = 100;
                public function __construct()
                {
                    // $this->dayabatterai = $this->getdaya();
                }
                function getdaya()
                {
                    return $this->dayabatterai;
                }
                public function isidaya()
                {
                    // this->getdaya() += 100;
                    // $this->getdaya() += 100;
                }
                public function kurangdaya()
                {
                    $tempdaya = $this->dayabatterai;
                    $hasil = $tempdaya - 10;
                    echo "hasilnya adalah kurang " .$hasil;
                    return $hasil;
                }
                public function tambah($bilangan1, $bilangan2)
                {
                    if($this->dayabatterai > 0){
                        $hasil = $bilangan1 + $bilangan2;
                        return $hasil;
                    }
                    else{
                        return "Baterai Anda Habis". PHP_EOL;
                    }
                    
                }
                public function kurang($bilangan1, $bilangan2)
                {
                    if($this->dayabatterai > 0){
                        $hasil = $bilangan1 - $bilangan2;
                    
                        return $hasil;
                    }
                    else{
                        return "Baterai Anda Habis". PHP_EOL;
                    }
                }
                public function kali($bilangan1, $bilangan2)
                {
                    if($this->dayabatterai > 0){
                        $hasil = $bilangan1 * $bilangan2;
                
                        return $hasil;
             
                    }
                    else{
                        return "Baterai Anda Habis". PHP_EOL;
                    }
                }
                public function bagi($bilangan1, $bilangan2)
                {
                    if($this->dayabatterai > 0){
                        $hasil = $bilangan1 / $bilangan2;
                        
                        return $hasil;
                 
                    }
                    else{
                        return "Baterai Anda Habis". PHP_EOL;
                    }
                }
                public function pangkat($bilangan1, $bilangan2)
                {
                    if($this->dayabatterai > 0){
                        $hasil = $bilangan1;
                        for($i=0;$i<($bilangan2-1);$i++)
                        {
                            $hasil = $hasil * $bilangan1;
                        }
                
                        if($hasil > 1000000){
                            return "Nilai diluar Batas yang Ditentukan";
                        }
                        else{
                            return $hasil;
                            
                        }
                    }
                    else{
                        return "Baterai Anda Habis". PHP_EOL;
                    }
                }
            }
            class kalkulatorhemat extends kalkulator {
                public function kurangdayahemat()
                {
                    $tempdaya = $this->dayabatterai;
                    $hasil = $tempdaya - 5;
                    return $hasil;
                }
            } 

            
            $kalkulatorhemat = new kalkulatorhemat();
            $kalkulator = new kalkulator();
            $daya = $kalkulator->getdaya();

            if(isset($_GET['hasil'])){
                $bil1 = $_GET['bilangan1'];
                $bil2 = $_GET['bilangan2'];
                
                if(isset($_GET['radio'])){
                   
                    if($_GET['operasi'] == 'tambah'){
                        $daya =  $kalkulatorhemat->kurangdayahemat();
                        $hasil =  $kalkulator->tambah($bil1,$bil2);
                    }
                    else if($_GET['operasi'] == 'kurang'){
                        $daya =  $kalkulatorhemat->kurangdayahemat();
                        $hasil =  $kalkulator->kurang($bil1,$bil2);
                      
                    }
                    else if($_GET['operasi'] == 'kali'){
                        $daya =  $kalkulatorhemat->kurangdayahemat();
                        $hasil = $kalkulator->kali($bil1,$bil2);
                      
                    }
                    else if($_GET['operasi'] == 'bagi'){
                        $daya =  $kalkulatorhemat->kurangdayahemat();
                        $hasil =  $kalkulator->bagi($bil1,$bil2);
                    }
                    else if($_GET['operasi'] == 'pangkat'){
                        $daya =  $kalkulatorhemat->kurangdayahemat();
                        $hasil =  $kalkulator->pangkat($bil1,$bil2);
                    }
                }

                else{
                   
                    if($_GET['operasi'] == 'tambah'){
                        $daya =  $kalkulator->kurangdaya();
                        $hasil =  $kalkulator->tambah($bil1,$bil2);
        
                    }
                    else if($_GET['operasi'] == 'kurang'){
                        $daya =  $kalkulator->kurangdaya();
                        $hasil =  $kalkulator->kurang($bil1,$bil2);
                      
                    }
                    else if($_GET['operasi'] == 'kali'){
                        $daya =  $kalkulator->kurangdaya();
                        $hasil = $kalkulator->kali($bil1,$bil2);
                      
                    }
                    else if($_GET['operasi'] == 'bagi'){
                        $daya =  $kalkulator->kurangdaya();
                        $hasil =  $kalkulator->bagi($bil1,$bil2);
                    }
                    else if($_GET['operasi'] == 'pangkat'){
                        $daya =  $kalkulator->kurangdaya();
                        $hasil =  $kalkulator->pangkat($bil1,$bil2);
                    }
                }

                if(isset($_GET['isi'])){
                    $kalkulator->isidaya();
                }

            }

            // echo $kalkulator->battery;
        ?>

    <div class="container ">
       <form method="GET" action="index.php">
        <div class="card">
                <div class="card-header">
                    <h1>Kalkulator</h1>
                </div>
                <div class="card-body ">

                        <div class="mb-3">
                            <label for="quantity">Daya:</label>
                            <input type="number" disabled value="<?php echo $daya; ?>" class="form-control" id="daya" name="daya" min="1" max="100"> 
                        </div>
                    <div class="mb-3">
                        <label class="form-label">Bilangan Pertama</label>
                        <input type="text" class="form-control" name="bilangan1" id="bilangan1">
                        <label class="form-label">Bilangan Kedua</label>
                        <input type="text" class="form-control" name="bilangan2" id="bilangan2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Operasi</label>
                        <select class="opt form-control" name="operasi" id="operasi">
                            <option value="tambah">+</option>
                            <option value="kurang">-</option>
                            <option value="kali">x</option>
                            <option value="bagi">/</option>
                            <option value="pangkat">^</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="hasil" value="hasil" class="btn btn-primary form-control">Hitung</button>
                    </div>

                    
                <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" value="radio" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Kalkulator Hemat
                    </label>
                </div>
                </div>

                <div class="mb-3">
                    <?php if(isset($_GET['hasil'])){ ?>
                      <label class="form-label">Hasil</label>
                      <input type="text" value="<?php echo $hasil; ?>" class="form-control" name="hasil">
                    <?php } else{?>
                        <label class="form-label">Hasil</label>
                        <input type="text" class="form-control" name="hasil">
                    <?php } ?>
                </div>

 
            </div>        
            
        </div>
    </form>
        
    </div>
    <!-- <script>
        var daya=0;
        function tambahdaya()
        {
            var daya1 = document.getElementById("daya").value;
            if(daya1 > 0 && daya1 <= 100){
                document.getElementById("textdaya").innerHTML = "Daya Baterai: " + daya1 +"%";
                alert("pengisian daya berhasil");
                return daya = daya1;
            }
            else{
                alert("pengisian daya Minimal 0% dan Maksimal 100%");
            }
        }

        function hasil(){   
            if(daya == 0){
                alert("Anda Belum Melakukan Pengisian Daya");
            }
            else if(daya >= 1){
                var bil1 = document.getElementById("bilangan1").value;
                var bil2 = document.getElementById("bilangan2").value;
                var operasi = document.getElementById("operasi").value;
            }
        }
    </script> -->

        
        <!-- <script>

            function gethasil () {
                const ajax = new XMLHttpRequest();
                ajax.onload = function () {
                    const response = ajax.responseText;
                }
                ajax.open("POST", "index.php");
                ajax.send;
            }
            
            $(document).ready(function () {
                function hasil(){
                    console.log(gethasil());
                }
            })
            
        </script> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>