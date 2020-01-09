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
                               <input type="hidden" name="category_id" class="form-control"
                               value="<?=isset($data['category_id'])? $data['category_id']:NULL;?>">
                        <div class="form-group">
                            <label for="Username" class="control-label">Product Name</label>
                            <input type="text" id="Username" name="name" placeholder="Product Name" value="<?=isset($data['product']['name'])?$data['product']['name']:NULL;?>" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                        <label for="Gender" class="control-label">Category</label>
                        <select class="form-control" name="category_id" id="">
                        <option value="<?=isset($data['product']['category_id'])?$data['product']['category_id']:NULL;?>"><?=isset($data['product']['category_id'])?$data['product']['category_id']:NULL;?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        </select>
                           
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
                        <select class="form-control" name="status_product" id="">
                        <option value="<?=isset($data['product']['status_product'])?$data['product']['status_product']:NULL;?>"><?=isset($data['product']['status_product'])?$data['product']['status_product']:NULL;?></option>
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                        </select>
                           
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
            </div>
        </div>
        <div class="col-md-6">
        </div>

    </div>
</div>