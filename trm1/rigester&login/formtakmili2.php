<?php

include_once "header.php";
include_once "connect.php";

if (isset($_POST['send'])){

    $datas=$_POST['datas'];
    $items=$_POST['items'];
    $dailyT=$_POST['dailyT'];
    $crosses=$_POST['crosses'];
    $rp=$_POST['rp'];
    $news=$_POST['news'];
    $break=$_POST['break'];
    $positiones=$_POST['positiones'];
    $risk=$_POST['risk'];

    $pdo=connect_db();
    $query=$pdo->prepare("INSERT INTO form_tbl(datas,items,dailyT,crosses,rp,news,break,positiones,risk) values ('$datas','$items','$dailyT','$crosses','$rp','$break','$positiones','$rp')");
    $query->execute();}0
?>
?>

<div class="container colorbox">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">


    <!-- action = ادرس صفحه ای رو میگیره ک میخوای اطلاعات رو بهش ارسال کنی
         method =   اطلاعات رو ارسال میکنه و مقادیر رو هم در نوار بالا نمایش نمیده و محرمانه تره(post)  اطلاعات رو ارسال میکنه ولی در نوار منوی بالا هم نمایش میده (get) دو تا پارامتر داره
-->
    <form method="post">
        <br><br>
        <h4 class="title_box">checklist</h4>
        <br>
        <div class="data ">
               data:   <input type="date" name="datas" class="col-md-5 dt">
             time:   <input type="time" name="time" class="col-md-5 dt">
        </div>
        <hr>
        trade item:<br>
        <select name="items" class="col-md-12">
            <option value="DXY">DXY</option>
            <option value="EURUSD">EURUSD</option>
            <option value="CADCHF">CADCHF</option>
            <option value="GBPJPY">GBPJPY</option>
            <option value="XAUUSD">XAUUSD</option>
            <option value="USDJPY">USDJPY</option>
            <option value="USDCAD">USDCAD</option>
            <option value="US30">US30</option>
            <option value="SPX500USD">SPX500USD</option>
            <option value="DE30">DE30</option>
            <option value="ADBE">ADBE</option>
            <option value="AAPL">AAPL</option>
            <option value="ATVI">ATVI</option>
            <option value="BA">BA</option>
            <option value="BAC">BAC</option>
            <option value="BRKB">BRKB</option>
            <option value="C">C</option>
            <option value="CAT">CAT</option>
            <option value="CSCO">CSCO</option>
            <option value="EBAY">EBAY</option>
            <option value="FB">FB</option>
            <option value="GE">GE</option>
            <option value="EA">EA</option>
            <option value="GM">GM</option>
            <option value="GS">GS</option>
            <option value="IBM">IBM</option>
            <option value="INTC">INTC</option>
            <option value="JNJ">JNJ</option>
            <option value="JPM">JPM</option>
            <option value="KO">KO</option>
            <option value="LLY">LLY</option>
            <option value="MCD">MCD</option>
            <option value="MMM">MMM</option>
            <option value="MSFT">MSFT</option>
            <option value="NEM">NEM</option>
            <option value="NFLX">NFLX</option>
            <option value="NKE">NKE</option>
            <option value="NVDA">NVDA</option>
            <option value="ORCL">ORCL</option>
            <option value="PEP">PEP</option>
            <option value="PFE">PFE</option>
            <option value="PG">PG</option>
            <option value="v">PM</option>
            <option value="PRU">PRU</option>
            <option value="SBUX">SBUX</option>
            <option value="PLJPY">PYPL</option>
            <option value="UPS">UPS</option>
            <option value="V">V</option>
            <option value="WFC">WFC</option>
            <option value="WMT">WMT</option>
            <option value="XOM">XOM</option>
            <option value="BTCUSD">BTCUSD</option>
        </select>
        <br><hr>
        Daily trend:<br>
        <select name="dailyT" class="col-md-12">
            <option value="Strong UP">Strong UP</option>
            <option value="Strong Down">Strong Down</option>
            <option value="Weak UP">Weak UP</option>
            <option value="Weak Down">Weak Down</option>
            <option value="Side ways">Side ways</option>
        </select>
        <hr>

            Price crossing support or Res area:<br>
        <div class="form-check" >
        <input  class="form-check-inline" type="radio" value="yes" name="crosses" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
            yes
        </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="no" name="crosses" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                no
            </label>
        </div><hr>
        Ret to pivote:
        <div class="form-check" >
            <input  class="form-check-inline" type="radio" value="yes" name="rp" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="no" name="rp" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                no
            </label>
        </div><hr>
        Eco calendar closest news:
        <textarea class="form-control" name="news"></textarea><br>

        Is the trigger line break:
        <div class="form-check" >
            <input  class="form-check-inline" type="radio" value="yes" name="break" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="no" name="break" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                no
            </label>
        </div><hr>
        Position type:<br>
        <div class="form-check" >
            <input  class="form-check-inline" type="radio" value="position" name="positiones" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                buy
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="position" name="positiones" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                sell
            </label>
        </div><hr>
        Reward to risk ratio:<br>
        <input type="number" name="risk" class="col-md-8 dt">
        <br>
        <br>
        <input type="submit" name="send" value="send" class="btn btn-primary">
    </form>
        </div>
    </div>
</div>

</body>
</html>
