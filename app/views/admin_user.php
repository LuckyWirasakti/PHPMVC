<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2"> <?=$data['title']?></i>
        <a href="<?=BASE_URL?>/adminuser/create" class="btn btn-primary btn-sm ml-auto">Add</a>
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
                    <th width="200">Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $id= 1; foreach ($data['user'] as $value) :?>
                    <tr>
                        <td><?=$id++;?></td>
                        <td><?=$value['username']?></td>
                        <td><?=$value['email']?></td>
                        <td>
                            <a href="<?=BASE_URL?>/adminuser/edit/<?=$value['id']?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?=BASE_URL?>/adminuser/destroy/<?=$value['id']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>