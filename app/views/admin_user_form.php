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
                          action="<?=BASE_URL?>/adminuser/<?=$data['title']=='User Registration'?'store':'update'?>"
                          enctype="multipart/form-data">
                        <input type="hidden" name="id" id="Name" placeholder="Name" class="form-control"
                               value="<?=isset($data['id'])? $data['id']:NULL;?>">
                        <div class="form-group">
                            <label for="Username" class="control-label">Username</label>
                            <input type="text" id="Username" name="username" placeholder="Username" value="<?=isset($data['user']['username'])?$data['user']['username']:NULL;?>" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="control-label">Email</label>
                            <input type="email" id="Email" name="email" placeholder="Email" value="<?=isset($data['user']['email'])?$data['user']['email']:NULL;?>" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="Password" class="control-label">Password</label>
                            <input type="password" id="Password" name="password" placeholder="Password" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="CPassword" class="control-label">Ulangi Password</label>
                            <input type="password" id="CPassword" name="cpassword" placeholder="Ulangi Password" class="form-control" autofocus>
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