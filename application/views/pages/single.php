<h1><b><?= $title; ?></b></h1>
<hr>
<p><?= $body; ?></p>
<br>
<p>Date Published: <?= $date; ?></p>
<?php if($this->session->logged_in == true && $this->session->access == 1){ ?>
<div class="p-2">
    <a href="edit/<?= $id;?>" class="btn btn-info">Edit</a>
    <a href="delete/<?= $id;?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
</div>
<?php } ?>