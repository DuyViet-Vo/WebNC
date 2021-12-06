<section class="section-banner">
    <div class="container">
        <div class="main-slider-one main-slider-two slider-area">
            <div id="wrapper">
                <div class="slider-wrapper">
                    <div id="mainSlider" class="nivoSlider"  autoplay="false">
                        <?php $i=2; foreach ($data_banner as  $value) {  ?>
                        <img src="public/<?=$value['HinhAnh']?>" alt="main slider" title="#htmlcaption"/>
                        <?php } ?>
                    </div>
                    <div id="htmlcaption" class="nivo-html-caption slider-caption">
                        <div class="container">
                            <div class="slider-left slider-right animated zoomInUp" style="background: rgba(0, 0, 0, 0.7); padding: 30px 20px">
                                <div class="slide-text">
                                    <h4 style="color: #ffc702">Phụ Kiện Tập Gym Cao Cấp</h4>
                                    <hr>
                                    <h2  style="line-height:1.4">Được Nhập Khẩu 100% Từ Mỹ và Singapor</h2>
                                </div>
                                <div class="animated slider-btn">
                                    <a class="shop-btn" href="index.php?act=shop">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>							
            </div>
        </div>
    </div>
</div>