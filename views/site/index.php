<!-- Refresh Page with Jquery -->
<script>
 $(document).ready(function() {
 	 $("#responsecontainer").load("http://localhost/tokocrypto/site/crypto");
   var refreshId = setInterval(function() {
      $("#responsecontainer").load('http://localhost/tokocrypto/site/crypto');
   }, 300000);
   $.ajaxSetup({ cache: false });
});
</script>

<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name ;
?>
<div id="responsecontainer"  class="site-index">

</div>

<!-- Pop Up Promo -->

    <div id="close">
        <div class="container-popup">
            <form action="#" method="post" class="popup-form">
			<a href="<?= Yii::$app->request->baseUrl ?>/site/login">
                <img src="<?= Yii::$app->request->baseUrl ?>/public/img/promo10jt.png" alt="">
				</a>
            </form>
            <a class="close" href="#close">X</a>
        </div>
    </div>

<!-- End Pop Up Promo -->
