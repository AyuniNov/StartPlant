<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/paymen.css">
    <link href="<?php echo base_url()?>assets/img/logo.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Payment</title>
</head>
<body>
    <div class="card shadow-sm p-3 mb-5 bg-body rounded tengah" style="width: 50%">
        <div class="pertama ">
            <h2>Payament</h2>
            
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                choose payment method 
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Pembayaran Via Dana, gojek, dana ovo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <p> 
                            <h3 class=" harga">jumlah Rp 5000 </h3>
                            <br>Order IDf89c9200-55a8-11ec-aefd-d1d0e2719e7b <br>

                            Cara Pembayaran
                        
                            <ol>
                                <li>Buka aplikasi Dana, gojek, dan ovo Anda </li>
                                <li>Pindai kode QR yang ada pada monitor Anda.atau pilih menu kirim </li>
                                <li>kemudian kirim ke nomor 085774654720</li>
                                <li>Periksa detail transaksi Anda pada aplikasi, lalu tap tombol Bayar </li>
                                <li>Masukkan PIN Anda. </li>
                                <li>Transaksi Anda telah selesai.</li>   
                            </ol>

                        </p> 
                        syarat dan ketentuan berlaku 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="<?php echo base_url().'user/download'?>" class="btn btn-primary">Confirm Payment </a>
                    </div>
                </div>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>