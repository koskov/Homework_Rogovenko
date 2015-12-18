<?php 
	require_once 'CCurrency.php';
	require_once 'CUsd.php';
	require_once 'CEuro.php';

	$currencyUsd = new CUsd('USD');
	$currencyEur = new CEuro('EUR');

	$arCurrencies = array("USD", "EUR");
	$arActions = array("Buy", "Sell");
?>

<p><h2>Currency Exchange</h2></p>
<p><b>Sell</b></p>
<p>1 USD: <?=$currencyUsd->getRate();;?> UAH</p>
<p>1 EUR: <?=$currencyEur->getRate();;?> UAH</p>
<p><b>Buy</b></p>
<p>1 USD: <?=$currencyUsd->getBuyRate();;?> UAH</p>
<p>1 EUR: <?=$currencyEur->getBuyRate();;?> UAH</p>
<p>
<form method="GET">
	<select name="actions">
		<?php foreach($arActions as $action) :;?>
			<option value="<?=$action;?>" <?=(isset($_REQUEST['actions']) && ($_REQUEST['actions'] == $action)) ? 'selected' : '';?>><?=$action;?></option>
		<?php endforeach;?>
	</select>
	<select name="currencies">
		<?php foreach($arCurrencies as $currency) :;?>
			<option value="<?=$currency;?>" <?=(isset($_REQUEST['currencies']) && ($_REQUEST['currencies'] == $currency)) ? 'selected' : '';?>><?=$currency;?></option>
		<?php endforeach;?>
	</select>
	<input type="text" name="amount" value=<?=(isset($_REQUEST['amount'])) ? $_REQUEST['amount'] : '';?>>
	<p><input type="submit" name="calc" value="Calculate"></p>
</form>
</p>
<p>Result:</p>

<?php 
	if (isset($_REQUEST['calc'])) {
		if ($_REQUEST['currencies'] == "USD") {
			$result  = new CUsd($_REQUEST['currencies']);
			if ($_REQUEST['actions'] == "Sell") {
				echo "You can ".$_REQUEST['actions']." ".$_REQUEST['amount']." ".$result->getName()." for ".$result->calcSum($result->getRate(), $_REQUEST['amount'])." UAH";
			} elseif ($_REQUEST['actions'] == "Buy") {
				echo "You can ".$_REQUEST['actions']." ".$_REQUEST['amount']." ".$result->getName()." for ".$result->calcSum($result->getBuyRate(), $_REQUEST['amount'])." UAH";
			}
			
		} elseif ($_REQUEST['currencies'] == "EUR") {
			$result  = new CEuro($_REQUEST['currencies']);
			if ($_REQUEST['actions'] == "Sell") {
				echo "You can ".$_REQUEST['actions']." ".$_REQUEST['amount']." ".$result->getName()." for ".$result->calcSum($result->getRate(), $_REQUEST['amount'])." UAH";
			} elseif ($_REQUEST['actions'] == "Buy") {
				echo "You can ".$_REQUEST['actions']." ".$_REQUEST['amount']." ".$result->getName()." for ".$result->calcSum($result->getBuyRate(), $_REQUEST['amount'])." UAH";
			}
		}
	}
?>