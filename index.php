<?php

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="css/navbar-fixed-top.css" rel="stylesheet">
<script src="js/ie-emulation-modes-warning.js"></script>
<style>
    body {
        padding-top: 70px;
    }

    .btn-grey {
        background-color: #D8D8D8;
        color: #FFF;
    }

    .rating-block {
        background-color: #FAFAFA;
        border: 1px solid #EFEFEF;
        padding: 15px 15px 20px 15px;
        border-radius: 3px;
    }

    .bold {
        font-weight: 700;
    }

    .padding-bottom-7 {
        padding-bottom: 7px;
    }

    .review-block {
        background-color: #FAFAFA;
        border: 1px solid #EFEFEF;
        padding: 15px;
        border-radius: 3px;
        margin-bottom: 15px;
    }

    .review-block-name {
        font-size: 12px;
        margin: 10px 0;
    }

    .review-block-date {
        font-size: 12px;
    }

    .review-block-rate {
        font-size: 13px;
        margin-bottom: 15px;
    }

    .review-block-title {
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .review-block-description {
        font-size: 13px;
    }
</style>

<div class="container">
    <div class="row">
        <form id="postReview" method="post">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <input type="number" class="form-control" id="note" min="0" max="5">
            </div>
            <div class="form-group">
                <label for="review">Commentaire</label>
                <textarea class="form-control" id="review" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div id="loadreview"></div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
                $('#loadreview').load("loadreview.php");
            });
    $(function() {
        $('#postReview').submit(function(e) {
            e.preventDefault();
            var name = $("#name").val();
            var title = $("#title").val();
            var note = $("#note").val();
            var review = $("#review").val();
            $.ajax({
                url: 'post.php',
                data: {
                    name: name,
                    title: title,
                    note: note,
                    review: review
                },
                type: 'POST',
                success: function(res) {
                    if (res == 'ok') {
                        alert('Commentaire posté avec succès');
                        $('#postReview')[0].reset()
                        $('#loadreview').load("loadreview.php");
                    } else {
                        alert(res);
                    }
                },
                error: function(res) {
                    alert(res);
                }
            });
        });
    });
</script>