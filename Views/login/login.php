<!-- pages-title-start -->
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Đăng ký - Đăng Nhập</h2>
                    <ul class="text-left">
                        <li><a href="?act=home">Trang chủ</a></li>
                        <li><span> // </span>Đăng ký - Đăng nhập</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
    <div class="container">
        <div class="row" style="display:flex;flex-wrap:wrap;">
            <div class="col-sm-6" style="padding-right:0;">
                <div class="main-input padding60" id="dangnhap">
                    <div class="log-title text-center">
                        <h3><strong>Đăng Nhập</strong></h3>
                    </div>
                    <div class="login-text">
                        <div class="custom-input">
                            <p>Nếu bạn đã có tài khoản, vui lòng đăng nhập!</p>
                            <?php if (isset($_COOKIE['msg1'])) { ?>
                            <div class="alert alert-danger">
                                <strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
                            </div>
                            <?php } ?>
                            <form action="?act=taikhoan&xuli=dangnhap" method="post" id="form1">
                                <label for="taikhoan">TÀI KHOẢN</label>
                                <input id="taikhoan" type="text" name="taikhoan" placeholder="Nhập username" />
                                <label for="matkhau">MẬT KHẨU</label>
                                <input id="matkhau" type="password" name="matkhau" placeholder="Nhập password" />
                                <a class="forget" href="#">Quên mật khẩu?</a>
                                <div class="submit-text ">
                                    <button name="submit" type="submit" form="form1">Đăng nhập</button>
                                    <button name="submit" type="submit" form="form1">Đăng nhập với Facebook</button>
                                    <button name="submit" type="submit" form="form1">Đăng nhập với Gmail</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="padding-left:0">
                <img src="public/img/login1-bg.jpg" alt="" style="height:699px; object-fit:cover;">
            </div>
            <div class="col-sm-6" style="margin-top: 30px; padding-right:0">
                <img src="public/img/signup1-bg.jpg" alt="" style="height:715px; object-fit:cover;">
            </div>
            <div class="col-sm-6" style="margin-top: 30px; padding-left:0">
                <div class="main-input padding60 new-customer" id="dangky">
                    <div class="log-title text-center">
                        <h3><strong>Đăng ký</strong></h3>
                    </div>
                    <?php if (isset($_COOKIE['msg'])) { ?>
                    <div class="alert alert-success">
                        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
                    </div>
                    <?php } ?>
                    <div class="custom-input">
                        <form action="?act=taikhoan&xuli=dangky" method="post" id="form2">
                            <input type="text" name="Ho" placeholder="Họ.." required />
                            <input type="text" name="Ten" placeholder="Tên.." required />
                            <input type="text" name="TaiKhoan" placeholder="Tên tài khoản đăng nhập.." required
                                minlength="6" />
                            <input type="email" name="Email" placeholder="Địa chỉ Email.." required />
                            <input type="text" name="SĐT" placeholder="Số điện thoại.." required pattern="[0-9]+"
                                minlength="10" />
                            <input type="password" name="MatKhau" placeholder="Mật khẩu" minlength="6" required />
                            <input type="password" name="check_password" placeholder="Xác nhận mật khẩu" minlength="6"
                                required />
                            <div class="submit-text coupon">
                                <button type="submit" form="form2">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login content section end -->