<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div {
            background-color: #f2f2f2;
            width: 50%;
            margin: auto;
            
        }

        
    </style>

    
</head>

<body>
    <div>

        <?php

            $isim = $_POST["ad"];

            echo $isim ."<br>";

        if ($_POST) {

            echo $_POST["ad"] . "<br>" . $_POST["il"] . "<br>" . $_POST["ilce"] . "<br>";

            echo "<style>
            b{
                color:red;
                font-family:sans-serif;
                letter-spacing:10px;
            }
            
            </style> <b class='betiket' style='background:#232323; border-radius:20px; padding:20px; margin:20px; display:block; '>isminiz doğrulandı ürünler adresinize gönderilecektir. 

            <form action='onay.php' method='post'>
            <input  required='required' type='checkbox' name='tamam' style='padding:20px; width:20px; height:20px; color:black;'>
            <input type='submit' value='Gonder'>
    
            </form></b> ";
        } else {
            echo "lütfen işlemlerinizi gözden geçirip Tekrar deneyiniz.";
        }


        ?>

    </div>




</body>

</html>