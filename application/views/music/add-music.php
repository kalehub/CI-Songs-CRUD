<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Add Music
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="songname">Song Name</label>
                            <input type="text" class="form-control" id="songname" name="songname">
                        </div>
                        <div class="form-group">
                            <label for="singer">Singer</label>
                            <input type="text" class="form-control" id="singer" name="singer">
                        </div>
                        <div class="form-group">
                            <label for="songauthor">Author</label>
                            <input type="text" class="form-control" id="songauthor" name="songauthor">
                        </div>
                        <div class="form-group">
                            <label for="songlisten">Listen Count</label>
                            <input type="text" class="form-control" id="songlisten" name="songlisten">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 float-right">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>