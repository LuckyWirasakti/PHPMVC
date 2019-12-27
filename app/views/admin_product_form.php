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
                          action="<?=BASE_URL?>/adminproduct/<?=$data['title']=='Product Input'?'store':'update'?>"
                          enctype="multipart/form-data">
                        <input type="hidden" name="id" id="Name" placeholder="Name" class="form-control"
                               value="<?=isset($data['id'])? $data['id']:NULL;?>">
                               <input type="hidden" name="id_category" class="form-control"
                               value="1">
                               <input type="hidden" name="id_users" class="form-control"
                               value="1">
                        <div class="form-group">
                            <label for="Username" class="control-label">Product Name</label>
                            <input type="text" id="Username" name="name" placeholder="Product Name" value="<?=isset($data['product']['name'])?$data['product']['name']:NULL;?>" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="control-label">Price</label>
                            <input type="text" id="Email" name="price" placeholder="Price" value="<?=isset($data['product']['price'])?$data['product']['price']:NULL;?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Gender" class="control-label">Product Description</label>
                           <textarea class="form-control" name="description" id="" cols="30" rows="10"><?=isset($data['product']['description'])?$data['product']['description']:NULL;?></textarea>
                        </div>
                        <div class="form-group">
                        <label for="Gender" class="control-label">Product Status</label>
                            <input type="text" id="Food" name="status_product" placeholder="Product Status" value="<?=isset($data['product']['status_product'])?$data['product']['status_product']:NULL;?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Mom" class="control-label">Product Image</label>
                            <input type="file" id="Mom" name="productimage" value="<?=isset($data['product']['image'])?$data['product']['image']:NULL;?>" class="form-control">
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