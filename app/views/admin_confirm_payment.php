<div class="card mb-3">
    <div class="card-header d-flex">
        <i class="fas fa-table mt-2"> <?=$data['title']?></i>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th width="50">No</th>
                    <th>Payment Referal</th>
                    <th width="200">Payment Method</th>
                    <th>Status</th>
                    <th width="100">Time</th>
                    <th>Image</th>
                    <th width="100">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th width="50">No</th>
                    <th>Payment Referal</th>
                    <th width="200">Payment Method</th>
                    <th>Status</th>
                    <th width="100">Time</th>
                    <th>Image</th>
                    <th width="100">Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['payment_confirm'] as $value) :?>
                    <tr>
                        <td><?=$value['id']?></td>
                        <td><?=$value['kode_payment']?></td>
                        <td><?=$value['payment_method']?></td>
                        <td><?=($value['status'])==0?'Unconfirmed':'Confirmed'?></td>
                        <td><?=date( "d/m/Y", strtotime($value['updated_at']))?></td>
                        <td><img height="300" src="<?=BASE_URL?>/uploads/payement/<?=$value['image']?>" alt=""></td>
                        <td>

                            <button type="submit" <?=($value['status'])==0?'data-toggle="modal"':''?> data-target="#updateModal<?=$value['id']?>" class="btn btn-primary btn-sm <?=($value['status'])==0?'':'disabled'?>">
                                Confirm Payment
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>

<!--Update modal-->
<?php foreach ($data['payment_confirm'] as $value) :?>
    <div class="modal fade" id="updateModal<?=$value['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?=BASE_URL?>/adminpaymentconfirmation/update" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Question?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Sure to confirm this payment?</p>
                        <input type="hidden" name="id" value="<?=$value['id']?>">
                        <select class="custom-select" name="status">
                            <option value="0">Unconfirmed</option>
                            <option value="1">Confirmed</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-sm" >Save Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>