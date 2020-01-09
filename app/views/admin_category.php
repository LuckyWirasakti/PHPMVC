<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active"><?=$data['title']?></li>
</ol>

<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2">
        <?=$data['title']?>
        </i>

        <a href="<?=BASE_URL?>/admincategory/create" class="btn btn-primary btn-sm ml-auto">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th width="5">No</th>
                    <th width="100">Category</th>
                    <th width="150">Action</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['category'] as $value) :?>
                    <tr>
                        <td><?=$value['id']?></td>
                        <td><?=$value['category']?></td>
                        <td>
                            <a href="<?=BASE_URL?>/admincategory/edit/<?=$value['id']?>" class="btn btn-primary btn-sm">Ubah</a>
                            <a href="<?=BASE_URL?>/admincategory/destroy/<?=$value['id']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div> 
