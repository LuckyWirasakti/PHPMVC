<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2"> <?=$data['title']?></i>
        <a href="<?=BASE_URL?>/adminmember/create" class="btn btn-primary btn-sm ml-auto">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Food</th>
                    <th>Mother Name</th>
                    <th>Create At</th>
                    <th width="100">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Food</th>
                    <th>Mother Name</th>
                    <th>Create At</th>
                    <th width="100">Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $id= 1; foreach ($data['member'] as $value) :?>
                    <tr>
                        <td><?=$id++;?></td>
                        <td><?=$value['username']?></td>
                        <td><?=$value['email']?></td>
                        <td><?=$value['gender']=='L'?'Man':'Woman'?></td>
                        <td><?=$value['food']?></td>
                        <td><?=$value['mom']?></td>
                        <td><?=$value['create_at']?></td>
                        <td>
                            <a href="<?=BASE_URL?>/adminmember/edit/<?=$value['id']?>" class="btn btn-primary btn-sm">Ubah</a>
                            <a href="<?=BASE_URL?>/adminmember/destroy/<?=$value['id']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>