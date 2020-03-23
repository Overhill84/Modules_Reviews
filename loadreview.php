<?php
include('conn.php');

$query = "SELECT * FROM review ORDER BY date DESC LIMIT 10";
$req = $bdd->query($query);
$datas = $req->fetchAll();

$query = "SELECT ROUND(AVG(note), 1) FROM review";
$req = $bdd->query($query);
$avg = $req->fetch();

$query = "SELECT ROUND(AVG(note), 0) FROM review";
$req = $bdd->query($query);
$avgStar = $req->fetch();
?>

<div class="container">

    <div class="row">
        <div class="col-sm-3">
            <div class="rating-block">
                <h4>Moyenne des avis</h4>
                <h2 class="bold padding-bottom-7"><?= $avg[0] ?>/ 5</small></h2>
                <?php
                $hold = 5 - $avgStar[0];

                for ($i = 0; $i < $avgStar[0]; $i++) { ?>
                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                <?php }
                for ($i = 0; $i < $hold; $i++) { ?>
                    <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                    <?php 
                        $query = "SELECT COUNT(note) FROM review WHERE note = 5";
                        $req = $bdd->query($query);
                        $nbNote = $req->fetch();

                        $query = "SELECT ROUND((COUNT(note)* 100 / (SELECT COUNT(*) FROM review)), 0) FROM review WHERE note = 5";
                        $req = $bdd->query($query);
                        $prct = $req->fetch();
                    ?>
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?= $prct[0] ?>%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;"><?= $nbNote[0] ?></div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                    <?php 
                        $query = "SELECT COUNT(note) FROM review WHERE note = 4";
                        $req = $bdd->query($query);
                        $nbNote = $req->fetch();

                        $query = "SELECT ROUND((COUNT(note)* 100 / (SELECT COUNT(*) FROM review)), 0) FROM review WHERE note = 4";
                        $req = $bdd->query($query);
                        $prct = $req->fetch();
                    ?>
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?= $prct[0] ?>%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;"><?= $nbNote[0] ?></div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                    <?php 
                        $query = "SELECT COUNT(note) FROM review WHERE note = 3";
                        $req = $bdd->query($query);
                        $nbNote = $req->fetch();

                        $query = "SELECT ROUND((COUNT(note)* 100 / (SELECT COUNT(*) FROM review)), 0) FROM review WHERE note = 3";
                        $req = $bdd->query($query);
                        $prct = $req->fetch();
                    ?>
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?= $prct[0] ?>%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;"><?= $nbNote[0] ?></div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                    <?php 
                        $query = "SELECT COUNT(note) FROM review WHERE note = 2";
                        $req = $bdd->query($query);
                        $nbNote = $req->fetch();

                        $query = "SELECT ROUND((COUNT(note)* 100 / (SELECT COUNT(*) FROM review)), 0) FROM review WHERE note = 2";
                        $req = $bdd->query($query);
                        $prct = $req->fetch();
                    ?>
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?= $prct[0] ?>%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;"><?= $nbNote[0] ?></div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                    <?php 
                        $query = "SELECT COUNT(note) FROM review WHERE note = 1";
                        $req = $bdd->query($query);
                        $nbNote = $req->fetch();

                        $query = "SELECT ROUND((COUNT(note)* 100 / (SELECT COUNT(*) FROM review)), 0) FROM review WHERE note = 1";
                        $req = $bdd->query($query);
                        $prct = $req->fetch();
                    ?>
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?= $prct[0] ?>%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;"><?= $nbNote[0] ?></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <hr />
            <div class="review-block">
                <?php foreach ($datas as $data) { ?>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="review-block-name"><b><?= $data['name'] ?></b></div>
                            <div class="review-block-date"><?php $date = date_create($data['date']);
                                                            echo (date_format($date, 'd/m/Y H:i')) ?></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <?php
                                $note = $data['note'];
                                $hold = 5 - $note;

                                for ($i = 0; $i < $note; $i++) { ?>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                <?php }
                                for ($i = 0; $i < $hold; $i++) { ?>
                                    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                <?php } ?>
                            </div>
                            <div class="review-block-title"><?= $data['title'] ?></div>
                            <div class="review-block-description"><?= $data['review'] ?></div>
                        </div>
                    </div>
                <?php } ?>
                <hr />
            </div>
        </div>
    </div>
</div>