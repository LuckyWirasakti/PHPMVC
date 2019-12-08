<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active"><?=$data['title']?></li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2">
             <?=("Banner")?>
        </i>

        <a href="<?=BASE_URL?>/adminhome/create_banner" class="btn btn-success btn-sm ml-auto">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th width="5">No</th>
                    <th width="25">Name</th>
                    <th >Description</th>
                    <th width="100">Image</th>
                    <th width="150">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th width="5">No</th>
                    <th width="25">Name</th>
                    <th >Description</th>
                    <th width="100">Image</th>
                    <th width="150">Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['banner'] as $value) :?>
                    <tr>
                        <td><?=$value['id']?></td>
                        <td><?=$value['name']?></td>
                        <td><?=$value['description']?></td>
                        <td><img src="frontend/img/banner/<?=$value['image']?>" width="200" alt=""></td>
                        <td>
                            <a href="adminhome/update_banner/<?=$value['id']?>" class="btn btn-primary btn-sm">Update</a>
                            <a href="adminhome/delete_banner/<?=$value['id']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2">
            <?=("Brand")?>
        </i>

        <a href="<?=BASE_URL?>/adminhome/create_brand" class="btn btn-success btn-sm ml-auto">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th width="5">No</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th width="200">Image</th>
                    <th width="160">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th width="5">No</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th width="200">Image</th>
                    <th width="160">Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['brand'] as $value) :?>
                    <tr>
                        <td><?=$value['id']?></td>
                        <td><?=$value['name']?></td>
                        <td><?=$value['url']?></td>
                        <td><img src="frontend/img/brand/<?=$value['image']?>" alt=""></td>
                        <td>
                            <a href="adminhome/update_brand/<?=$value['id']?>" class="btn btn-primary btn-sm">Update</a>
                            <a href="adminhome/delete_brand/<?=$value['id']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2">
            <?=("Feature")?>
        </i>

        <a href="<?=BASE_URL?>/adminhome/create_feature" class="btn btn-success btn-sm ml-auto">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th width="5">No</th>
                    <th width="200">Name</th>
                    <th>Description</th>
                    <th width="100">Icon</th>
                    <th width="160">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th width="5">No</th>
                    <th width="200">Name</th>
                    <th>Description</th>
                    <th width="100">Icon</th>
                    <th width="160">Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['feature'] as $value) :?>
                    <tr>
                        <td><?=$value['id']?></td>
                        <td><?=$value['name']?></td>
                        <td><?=$value['description']?></td>
                        <td><img src="frontend/img/features/<?=$value['icon']?>" alt=""></td>
                        <td>
                            <a href="adminhome/update_feature/<?=$value['id']?>" class="btn btn-primary btn-sm">Update</a>
                            <a href="adminhome/delete_feature/<?=$value['id']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
