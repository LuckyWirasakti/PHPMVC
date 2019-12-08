<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?=$data['title']?></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    <?=$data['title']?>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="post" action="<?=BASE_URL?>/adminhome/<?=$data['title']=='Tambah Banner'?'store_banner':'update_banner'?>" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id" placeholder="id" class="form-control" value="<?=isset($data['id'])? $data['id']:NULL;?>">
                        <div class="form-group">
                            <label for="Name" class="control-label">Name</label>
                            <input type="text" id="Name" name="name" placeholder="Name" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="Description" class="control-label">Description</label>
                            <textarea type="text" name="description" id="Description" placeholder="Description" class="form-control" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Image" class="control-label">Image</label>
                            <input type="file" id="Image" name="image" placeholder="Image" class="form-control-file" accept="image/*">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"><?=$data['title']?></button>
                        </div>
                    </form> <!-- /form -->
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
        <div class="col-md-6">
        </div>

    </div>
</div>