<?php
include_once "header.php";
include_once "connect.php";
?>

<div class="container colorbox">
    <div class="row">

        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead class="font-btn">
                <tr>
                    <th> نام و نام خانوادگی</th>
                    <th>کد ملی </th>
                    <th>شماره تلفن</th>
                    <th> استان</th>
                    <th> وضعیت تاهل </th>
                    <th> مهارت</th>
                    <th>توضیحات</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
               $pdo= connect_db();
               $query=$pdo->prepare("select * from doc_tbl");
               $query->execute();
               $rez=$query->fetchAll(PDO::FETCH_OBJ);
                foreach ($rez as $bj ): ?>
                    <tr>
                        <td><?php echo $bj->fullname;?></td>
                        <td><?php echo $bj->codmeli;?></td>
                        <td><?php echo $bj->tell;?></td>
                        <td><?php echo $bj->ostan;?></td>
                        <td><?php echo $bj->taahol;?></td>
                        <td><?php echo $bj->mahart;?></td>
                        <td><?php echo $bj->description;?></td>
                        <td><a href="edit.php?id=<?php echo $bj->id; ?>" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg></a></td>
                        <td><a href="delete.php?id=<?php echo $bj->id ?>" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                </svg></a></td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
