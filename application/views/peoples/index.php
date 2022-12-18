<div class="container">
    <h3 class="mt-3">List of Poeples</h3>

    <div class="row">
        <div class="col-md-5">
        <form action="<?= base_url('peoples'); ?>" method="post">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search keyword" name="keyword" autocomplete="off" autofocus>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="submit">Button</button>
        </div>
        </div>
        </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $people) : ?>
                    <tr>
                        <th><?= ++$start; ?></th>
                        <td><?= $people['name'];?></td>
                        <td><?= $people['email']; ?></td>
                        <td>
                            <a href="" class="badge badge-warning">detail</a>
                            <a href="" class="badge badge-success">ubah</a>
                            <a href="" class="badge badge-danger">hapus</a>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>