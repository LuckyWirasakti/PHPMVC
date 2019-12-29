<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active"><?=$data['title']?></li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        <?=$data['title']?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['company'] as $value) :?>
                <tr>
                    <td><?=$value['id']?></td>
                    <td><img src="<?=BASE_URL?>/uploads/company/<?=$value['image']?>" width="200px"></td>
                    <td><?=$value['title']?></td>
                    <td><?=$value['description']?></td>
                    <td>
                        <a href="admincompany/edit/<?=$value['id']?>" class="btn btn-primary btn-sm">Update</a>
                        <!-- <a href="admincompany/delete/<?=$value['id']?>" class="btn btn-danger btn-sm">Delete</a> -->
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<p class="small text-center text-muted my-5">
    <em>More table examples coming soon...</em>
</p