<div class="body-content">
        <div class="row">
    <?php
    //View Data
        foreach($decoded['data'] as $i) { ?>

            <a target="_blank" href="https://changelly.com/exchange/USD/<?= $i['symbol'] ?>/1">


            <!-- Coin Box Div -->
            <div class="col-lg-2">
                <div class="thumbnail">
                <img src="<?= Yii::$app->params['assetDirApi'] ?><?= $i['id'] ?>.png">
                <p class="coinname"><?= substr($i['name'].' ('.$i['symbol'].')',0,21)?></p>


                <?php if($i['quotes']['IDR']['percent_change_24h'] < 0) { ?>

                    <!--If in 24hours down -->
                    <p class="coinchange24hminus">
                    (<?= $i['quotes']['IDR']['percent_change_24h'] ?>%)<span class="glyphicon glyphicon-triangle-bottom"></span>
                    </p>

              <?php  } else { ?>

                <!--If in 24hours up -->
                <p class="coinchange24h">
                    (<?= $i['quotes']['IDR']['percent_change_24h'] ?>%)<span class="glyphicon glyphicon-triangle-top"></span>
                </p>

                <?php } ?>
                <p class="coinprice">Rp <?= number_format($i['quotes']['IDR']['price'],"0",",",".") ?></p>
                <a target="_blank" href="https://changelly.com/exchange/USD/<?= $i['symbol'] ?>/1" class="btn btn-block btn-success">Buy</a>
            </div>
        </div>
         <!-- End Coin Box Div -->

     </a>

            <?php } ?>
        </div>

    </div>