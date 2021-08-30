<?php
include_once'connect.php';
include_once'header.php';
$id=$_GET['id'];
$pdo=connect_db();
$query=$pdo->prepare("select * from doc_tbl where id='$id'");
$query->execute();
$rez=$query->fetchAll(PDO::FETCH_OBJ);
foreach ($rez as $val):
?>


<div class="container colorbox">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <br><br>
                <?php
                        if (isset($_POST['update'])){
                            $fullname=$_POST['fullname'];
                            $codmeli=$_POST['codmeli'];
                                    $tell=$_POST['tell'];
                                    $ostan=$_POST['ostan'];
                                    $taahol=$_POST['taahol'];
                                    $mahart=$_POST['mahart'];
                                    $description=$_POST['description'];

                                    $mahart_s=implode(',',$mahart);
                                    $query=$pdo->prepare("UPDATE doc_tbl SET fullname='$fullname',codmeli='$codmeli',tell='$tell',ostan='$ostan',taahol='$taahol',mahart='$mahart_s',description='$description' where id='$id'");
                                    $query->execute();
                                    header("location:edit.php?id=$val->id");
                        }
                ?>
                <h4 class="title_box">فرم تکمیلی</h4>
                نام و نام خانوادگی : <br>
                <input type="text" name="fullname" class="form-control"  required value="<?php echo $val->fullname ?>"> <hr>
                کدملی : <br>
                <input type="text" name="codmeli" class="form-control " value="<?php echo $val->codmeli ?>" required maxlength="10"> <hr>
                تلفن : <br>
                <input type="text" name="tell" class="form-control" value="<?php echo $val->tell ?>" required maxlength="11"> <hr>

                استان :<br>
                <select name="ostan" class="col-md-12">
                    <option value="تهران" <?php if ($val->ostan=='تهران'){ echo 'selected';} ?> >تهران</option>
                    <option value="گیلان" <?php if ($val->ostan=='گیلان'){ echo 'selected';} ?> >گیلان</option>
                    <option value="خراسان" <?php if ($val->ostan=='خراسان'){ echo 'selected';} ?> >خراسان</option>
                    <option value="اصفهان" <?php if ($val->ostan=='اصفهان'){ echo 'selected';} ?> >اصفهان</option>
                </select><hr>
                وضعیت تاهل: <br>
                <div class="form-check" >
                    <input  class="form-check-inline" type="radio" value="متاهل" name="taahol" id="flexRadioDefault1" <?php if ($val->taahol=='متاهل'){ echo 'checked';} ?> >
                    <label class="form-check-label" for="flexRadioDefault1">
                        متاهل
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-inline" type="radio" value="مجرد" name="taahol" id="flexRadioDefault2" <?php if ($val->taahol=='مجرد'){ echo 'checked';} ?>  >
                    <label class="form-check-label" for="flexRadioDefault2">
                        مجرد
                    </label>
                </div><hr>
                مهارت: <br><br>
                <div class="form-check-inline">
                    <input class="form-check-inline" type="checkbox" name="mahart[]" value="php" id="flexCheckDefault"
                    <?php if (strpos($val->mahart,'php')!==false){echo "checked";} ?>  >
                    <label class="form-check-label" for="php">
                        php
                    </label>
                </div>
                <div class="form-check-inline ">
                    <input class="form-check-inline" type="checkbox" name="mahart[]" value="html" id="flexCheckDefault"
                        <?php if (strpos($val->mahart,'html')!==false){echo "checked";} ?>>
                    <label class="form-check-label" for="html">
                        html
                    </label>
                </div>
                <div class="form-check-inline ">
                    <input class="form-check-inline" type="checkbox" name="mahart[]" value="css" id="flexCheckDefault"
                        <?php if (strpos($val->mahart,'css')!==false){echo "checked";} ?>>
                    <label class="form-check-label" for="css">
                        css
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-inline" type="checkbox" name="mahart[]" value="wordpress" id="flexCheckDefault"
                        <?php if (strpos($val->mahart,'wordpress')!==false){echo "checked";} ?>>
                    <label class="form-check-label" for="wordpress">
                        wordpress
                    </label>
                </div><hr>

                توضیحات : <br>
                <textarea class="form-control" name="description"><?php echo $val->description ?></textarea>
                <br>
                <input type="submit" name="update" value="ذخیره" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
</body>
</html>


