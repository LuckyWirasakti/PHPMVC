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
                    <form class="form-horizontal" role="form" method="post"
                          action="<?=BASE_URL?>/admincategory/<?=$data['title']=='Category Input'?'store':'update'?>"
                          enctype="multipart/form-data">
                        <input type="hidden" name="id" id="Name" placeholder="Name" class="form-control"
                               value="<?=isset($data['id'])? $data['id']:NULL;?>">
                        <div class="form-group">
                            <label for="Username" class="control-label">Category Name</label>
                            <input type="text" id="Username" name="category" placeholder="Category Name" value="<?=isset($data['category']['category'])?$data['category']['category']:NULL;?>" class="form-control" autofocus>
                        </div>                  
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"><?=$data['title']?></button>
                        </div>
                    </form> <!-- /form -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
        </div>

    </div>
</div>