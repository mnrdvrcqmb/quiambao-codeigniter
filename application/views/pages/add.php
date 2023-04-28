<h1><?= $title; ?></h1>
<hr>
<?= validation_errors();?>
<div class="row">

    <div class="col-lg-12">

        <?= form_open('add');?>

        <input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="<?= set_value('title');?>">
    </div>
    
    <br/>

        <div class="form-group">
        <textarea name="body" id="" cols="30" rows="4" class="form-control" placeholder="Enter Post Details" value="<?= set_value('title');?>"></textarea>
    </div>
    
<div class="mt-4">
    <button type="submit" name="submit" class="btn btn-dark">Submit</button>
</div>  