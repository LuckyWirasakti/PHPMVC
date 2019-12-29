<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2"> <?=$data['title']?></i>
        <a href="<?=BASE_URL?>/adminproduct/create" class="btn btn-primary btn-sm ml-auto">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th>No</th>
                    <th>Product Img</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th width="100">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Product Img</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th width="100">Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $id= 1; foreach ($data['product'] as $value) :?>
                    <tr>
                        <td><?=$id++;?></td>
                        
                    <td><img src="<?=BASE_URL?>/frontend/img/product/<?=$value['image']?>" width="200px"></td>
                        <td><?=$value['name']?></td>
                        <td><?='$'.$value['price']?></td>
                        <td><?=$value['description']?></td>
                        <td><?=$value['status_product']?></td>
                        <td>
                            <a href="<?=BASE_URL?>/adminproduct/edit/<?=$value['id']?>" class="btn btn-primary btn-sm">Ubah</a>
                            <a href="<?=BASE_URL?>/adminproduct/destroy/<?=$value['id']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>