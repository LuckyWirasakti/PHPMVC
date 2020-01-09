<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>My Profile</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Profile</a>
                </nav>
            </div>
        </div>
    </div>
</section><br/><br/>
<!-- End Banner Area -->
    <div class="container">
        <div class="row">
        <?php foreach($data['myProfile'] as $key=>$value) : ?>
        <form class="row contact_form" action="profile/updateprofile" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$value['id']?>">
            <div class="col-md-5">
            <?php if($value['imageprofile']==""){?>
                <img class="img-fluid" src="<?=BASE_URL;?>/uploads/user-profile/noimage.png" width="80%" alt=""><br/><br/>
            <?php }else{ ?>
            <img class="img-fluid" src="<?=BASE_URL;?>/uploads/user-profile/<?=$value['imageprofile']?>" width="80%" alt=""><br/><br/>
            <?php } ?>
            
                <input type="file" name="profileimage"><br/>
            </div>
            <div class="col-md-7"><br/>
                        <h3>Account Details</h3><br/>
                        
                        <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="username" name="username" value="<?=$value['username']?>">
                                
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="fullname" name="fullname" value="<?=$value['fullname']?>">
                              
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="hp" name="phone" value="<?=$value['phone']?>">
                                
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email" value="<?=$value['email']?>">
                              
                            </div>
                            <div class="col-md-12 form-group p_star">
                            <textarea class="form-control" name="alamat" id="address" rows="1" ><?=$value['alamat']?></textarea>
                            </div>
                            
                    </div>
                    <div class="row col-md-3 offset-md-9">
                    <button style="float:right" name="submit" class="btn-md primary-btn pull-right" type="submit">Update Profile</button>
                    </div>
                </form>
                        <?php endforeach; ?>
            </div>
        </div>
    </div><br/><br/>