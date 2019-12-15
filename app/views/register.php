<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Register New Account</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?=BASE_URL?>/member/">Member<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?=BASE_URL?>/member/create">Register</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="login_form_inner mb-3">
                    <h3>New to our website?</h3>
                    <form class="row login_form" action="<?=BASE_URL?>/member/store" method="POST">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                        </div>
                        <div class="col-md-12 form-group">
                            <select name="gender" id="gender" class="form-select">
                                <option value="L">Man</option>
                                <option value="P">Woman</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="food" name="food" placeholder="Favorite Food" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Favorite Food'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="mom" name="mom" placeholder="Mother Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mother Name'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Retype Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Retype Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Register Account</button>
                            <a href="<?=BASE_URL?>/member" class="mb-3">Back to Login!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>