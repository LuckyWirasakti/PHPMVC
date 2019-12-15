<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?=BASE_URL?>/member/">Member<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?=BASE_URL?>/member">Login</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="<?=BASE_URL?>/frontend/img/login.jpg" alt="">
                        <div class="hover">
                            <h4>New to our website?</h4>
                            <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                            <a class="primary-btn" href="<?=BASE_URL?>/member/create">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                        <form class="row login_form" action="<?=BASE_URL?>/member/attempt" method="POST">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Log In</button>
                                <a href="<?=BASE_URL?>/member/edit">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</section>