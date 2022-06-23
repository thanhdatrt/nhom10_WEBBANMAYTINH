
<!-- Hero Section Begin -->
<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh Mục Sản Phẩm</span>
                        </div>

                        <ul>
                            <?php
                                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                while($row = mysqli_fetch_array($query_danhmuc))
                            {                
                            ?>
                                <li>
                                    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <span>Danh Mục Bài Viết</span>
                        </div>
                        <ul>
                            <?php
        
                                $sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                                $query_danhmuc_bv = mysqli_query($mysqli,$sql_danhmuc_bv);
                                while($row = mysqli_fetch_array($query_danhmuc_bv)){
                                            
                            ?>
                            <li>
                                <a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row['id_baiviet'] ?>"><?php echo $row['tendanhmuc_baiviet'] ?></a>
                            </li>
                            <?php
                            } ?>
                        </ul>
                    </div>
                </div>
                            
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="index.php?quanly=timkiem" method="POST">
                                <div class="hero__search__categories">
                                    tất cả
                                </div>
                                <input type="text" name="tukhoa" placeholder="Nhập từ khóa cần tìm...">
                                <button type="submit" name="timkiem" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 375.388.916</h5>
                                <span> Hổ trợ 24/7 </span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="Asset/img/bannermain.jpg">
                        <div class="hero__text">
                            <span>PC SHOP</span>
                            <h2>SẢN PHẨM CHÍNH HÃNG</h2>
                            <p>MIỄN PHÍ SHIP TOÀN QUỐC</p>
                            <a href="#" class="primary-btn">CỬA HÀNG</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Hero Section End -->