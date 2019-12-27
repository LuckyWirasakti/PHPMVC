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
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    <?=$data['title']?>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="post"
                          action="<?=BASE_URL?>/admincomment/<?=$data['title']=='Reply Comment'?'update':'store'?>"
                          enctype="multipart/form-data">
                          <div class="row">
                          <div class="col-md-6">
                        <input type="hidden" name="id" id="Name" placeholder="Name" class="form-control"
                               value="<?=isset($data['id'])? $data['id']:NULL;?>">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" id="name" name="name" placeholder="name" value="<?=isset($data['comment']['name'])?$data['comment']['name']:NULL;?>" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="control-label">Email</label>
                            <input type="email" id="Email" name="email" placeholder="Email" value="<?=isset($data['comment']['email'])?$data['comment']['email']:NULL;?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Gender" class="control-label">Comment</label>
                            <textarea class="form-control" name="comment" id="" cols="30" rows="10"><?=isset($data['comment']['comment'])?$data['comment']['comment']:NULL;?></textarea>
                        </div></div> <div class="col-md-6">
                        <div class="form-group">
                            <label for="Gender" class="control-label">Reply Comment</label>
                            <textarea class="form-control" name="reply_comment" id="" cols="30" rows="10"><?=isset($data['comment']['reply_comment'])?$data['comment']['reply_comment']:NULL;?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Mom" class="control-label">Reply By</label>
                            <input type="text"  id="Mom" name="reply_by" placeholder="Reply By" value="<?=isset($data['comment']['reply_by'])?$data['comment']['reply_by']:NULL;?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"><?=$data['title']?></button>
                        </div>
                        </div></div>
                    </form> <!-- /form -->
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
        <div class="col-md-6">
        </div>

    </div>
</div>