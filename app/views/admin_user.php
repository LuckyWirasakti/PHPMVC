<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2"> <?=$data['title']?></i>
        <button class="btn btn-primary btn-sm ml-auto">Tambah</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['user'] as $value) :?>
                    <tr>
                        <td><?=$value['id']?></td>
                        <td><?=$value['username']?></td>
                        <td><?=$value['email']?></td>
                        <td>
                            <a href="mailto:<?=$value['email']?>" class="btn btn-primary btn-sm">Ubah</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>