<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick" />
  <input type="hidden" name="business" value="ram.praximo@gmail.com" />
  <input type="hidden" name="undefined_quantity" value="1" />
  <input type="hidden" name="item_name" value="Order #1111111 for So-and-So" />
  <input type="hidden" name="item_number" value="order_1111111" />
  <input type="hidden" name="amount" value="5.00" />
  <input type="hidden" name="shipping" value="0.00" />
  <input type="hidden" name="no_shipping" value="1" />
  <input type="hidden" name="cn" value="Comments" />
  <input type="hidden" name="currency_code" value="USD" />
  <input type='hidden' name='rm' value='2'>
  <input type="hidden" name="lc" value="US" />
  <input type="hidden" name="bn" value="PP-BuyNowBF" />
  <input type="hidden" name="return" value="http://abrasivesworld.com/alpha/test.php" />
  <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
  <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
</form>
<?php
var_dump($_POST);
?>