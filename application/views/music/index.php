<div class="container">
    <div class="row mt-2">
        <div class="col-md-6">
            <h3>List musik yang tersedia</h3>
            <hr>
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Music is <strong><?= $this->session->flashdata('flash') ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif ?>
            <ul class="list-group">
                <?php foreach ($music as $msc) : ?>
                    <li class="list-group-item"><?= $msc['song_name'] ?>
                        <a href="<?php base_url() ?>Music/deleteMusic/<?= $msc['id'] ?>" class="btn btn-danger float-right" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                        <a href="<?php base_url() ?>Music/updateMusic/<?= $msc['id'] ?>" class="btn btn-warning float-right mr-2">Update</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <a href="<?= base_url() ?>Music/addMusic" class="btn btn-primary">Add music</a>
        </div>
    </div>
</div>