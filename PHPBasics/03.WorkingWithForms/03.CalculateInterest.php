<!DOCTYPE html>
<head>
    <title>Calculate Interest</title>
</head>
<body>
    <form method="get" action="">
        <?php
        $result = "";
        if (isset($_GET['amount'])) {
            $amount = $_GET['amount'];
            $currency = $_GET['currency'];
            $interest = $_GET['interest'];
            $period = $_GET['period'];
            $monthInterest = $interest / doubleval(12) / 100;
            $returnAmount = $amount;


            for ($i = 0; $i < $period; $i++) {
                $monthAmount = $returnAmount * $monthInterest;
                $returnAmount += $monthAmount;
            }

            switch ($currency) {
                case 'USD':
                    $result = "\$ " . number_format($returnAmount, 2, '.', '');
                    break;

                case 'EUR':
                    $result = "&euro; " . number_format($returnAmount, 2, '.', '');
                    break;

                case 'BGN':
                    $result = number_format($returnAmount, 2, '.', '') . " LV";
                    break;

                default:

                    break;
            }
        }
        echo htmlspecialchars($result)."<br />\n\r";
?>
        Enter amount: <input type="number" name="amount" /><br />
        <input type="radio" name="currency" value="USD" />USD 
        <input type="radio" name="currency" value="EUR" />EUR 
        <input type="radio" name="currency" value="BGN" />BGN<br /> 
        Compound Interest Amount <input type="number" name="interest" /><br />
        <select name="period">
            <option value="6">6 Months</option>
            <option value="12">1 Year</option>
            <option value="24">2 Years</option>
            <option value="60">5 Years</option>
        </select>
        <input type="submit" value="Calculate" />
    </form>
</body>