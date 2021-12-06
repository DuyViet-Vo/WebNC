<footer class="footer-two">
    <!-- footer-top area start -->
    <div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Dụng cụ thể thao Tuấn Vũ sport</h4>
                            </div>
                            <div class="footer-text">
                                <!-- <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p>48 Cao Thắng,</p>
                                        <p>Trường Đại Học Sư Phạm Kỹ Thuật</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>(+84) 383425354</p>
                                        <p>(+84) 702076081</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>ute0700@gmail.com</p>
                                        <p>ute@ute.udn.vn</p>
                                    </li>
                                </ul> -->
                                <p style="text-align: justify; line-height:1.5"><strong>Tuấn Vũ Sport</strong> là đơn vị
                                    chuyên
                                    nhập khẩu, phân phối, bán buôn, bán lẻ dụng cụ thể dục, thể thao và thể hình uy tín
                                    nhất tại Việt Nam. Toàn bộ sản phẩm do Tuấn Vũ cung cấp đều đảm bảo chính hãng,
                                    thông tin và giá bán được niêm yết, đảm bảo quyền lợi của Quý khách hàng.
                                </p>
                                <div class="col-network-ser">
                                    <ul>
                                        <li><a href="#"><img src="public/img/footer/in1.png" alt="Instagram" /></a></li>
                                        <li><a href="#"><img src="public/img/footer/in2.png" alt="Instagram" /></a></li>
                                        <li><a href="#"><img src="public/img/footer/in3.png" alt="Instagram" /></a></li>
                                        <li><a href="#"><img src="public/img/footer/in4.png" alt="Instagram" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile" style="padding-left: 125px">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="?act=taikhoan&xuli=account"><i class="mdi mdi-menu-right"></i>Tài
                                            khoản</a></li>
                                    <li><a href="?act=cart"><i class="mdi mdi-menu-right"></i>Giỏ Hàng</a></li>
                                    <li><a href="?act=taikhoan"><i class="mdi mdi-menu-right"></i>Đăng Nhập</a></li>
                                    <li><a href="?act=checkout"><i class="mdi mdi-menu-right"></i>Thanh Toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Danh mục</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php foreach ($data_danhmuc as $row) { ?>
                                    <li><a href="?act=shop&sp=<?=$row['MaDM']?>"><i
                                                class="mdi mdi-menu-right"></i><?=$row['TenDM']?></a></li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 r-margin-top wide-mobile">
                        <!-- <div class="single-text">
                            <div class="footer-title">
                                <h4>Mạng xã hội</h4>
                            </div>
                            <div class="clearfix instagram">
                                <ul>
                                    <li><a href="#"><img src="public/img/footer/in1.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="public/img/footer/in2.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="public/img/footer/in3.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="public/img/footer/in4.png" alt="Instagram" /></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Liên hệ</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p>48 Cao Thắng,</p>
                                        <p>Trường Đại Học Sư Phạm Kỹ Thuật</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>(+84) 383425354</p>
                                        <p>(+84) 702076081</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>ute0700@gmail.com</p>
                                        <p>ute@ute.udn.vn</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>&copy; TuanVu Sport. All Rights Reserved.</p>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <a href="https://www.nganluong.vn/vn/home.html" target="_blank"><img
                            src="public/img/footer/payment.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="social-network">
        <ul>
            <li><a href="#"><img
                        src="https://www.thethaothientruong.vn/public/frontend/images/icons/widget_icon_messenger.svg"
                        alt="Instagram" /></a></li>
            <li><a href="#"><img
                        src="https://www.thethaothientruong.vn/public/frontend/images/icons/widget_icon_zalo.svg"
                        alt="Instagram" /></a></li>
            <li><a href="#"><img
                        src="https://www.thethaothientruong.vn/public/frontend/images/icons/widget_icon_map.svg"
                        alt="Instagram" /></a></li>
        </ul>
    </div>
    <!-- footer-bottom area end -->
</footer>