<?php include "ayar.php"; ?>


<style>
    .ehe {
        background-color: #34522f;
        color: white;
        padding: 200px;
    }

    .il {
        padding: 20px;
        display: inline-block;
        text-decoration: none;
        border: none;

    }

    .il,
    .ilce:active {
        border: none;
        outline: none;
    }

    .il,
    .ilce:focus {
        outline: 0;
    }

    .il::after {
        padding: 18px;

    }

    label {
        background-color: #f2f2f2;
        color: black;
        padding: 20px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
</style>

<div class="ehe">
    <label>il seçiniz :</label>
    <select name="il" class="il">
        <option value="-1">Seçiniz</option>
        <?php $iller = $db->query("SELECT * FROM il ORDER BY sira ASC")->fetchAll(PDO::FETCH_ASSOC); ?>
        <?php
        foreach ($iller as $il) {
        ?>
            <option value="<?= $il["sira"] ?>"><?= $il["il_adi"] ?></option>

        <?php } ?>
    </select>

    <label>ilçe seçiniz :</label>
    <select name="ilce" class="ilce"></select>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>
        $("select[name=il]").change(function() {
            var secim = $("select[name=il]").val();
            var veriler = "il=" + secim;
            if (secim == -1) {
                $("select[name=ilce]").html("");

            } else {
                $.ajax({

                    type: "POST",
                    url: "islem.php",
                    data: veriler,
                    success: function(cevap) {
                        $("select[name=ilce]").html(cevap).css("padding", "40px").css("transition", ".5s ease-in-out").css("border-radius", "20px").css("background", "#34526f").css("color", "#ffffff").css("box-shadow", "20px 20px 10px black");

                        $("select[name=il]").css("transition", "1.2s").css("background", "#34526f").css("border-radius", "20px").css("color", "#ffffff").css("paddin", "20px");


                    }

                });

            }
        });
    </script>


</div>