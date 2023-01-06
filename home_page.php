
<?php
    require "inc/header.php";
?>
        <div class="header__search">
            <label for="" class="header__search-title">
                Tìm kiếm địa điểm mà bạn yêu thích
            </label>
            <div class="header__search-block">
                <input type="text" class="header__search-block-input">
                <div name="" id="" class="header__search-block-select">
                    <span> Thành phố</span>
                    <i class="fa-solid fa-caret-down"></i>
                    <ul class="header__search-block-select-list">
                        <li onclick="getCityTPHCM()" value="" class="header__search-block-select-option city_tphcm">TP.HCM</li>
                        <li onclick="getCityDANANG()" value="" class="header__search-block-select-option city_danang">Đà Nẵng</li>
                        <li onclick="getCityHANOI()" value="" class="header__search-block-select-option city_hanoi">Hà Nội</li>
                    </ul>
                </div>
                <button onclick="searchData()" class="header__search-block-btn btn">Search</button>
                
                <ul class="header__search-block-icon-list">
                    <li class="header__search-block-icon-list-item">
                        <a href="./product_page.php#market">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Siêu thị

                        </a>
                    </li>
                    <li class="header__search-block-icon-list-item">
                        <a href="./product_page.php#restaurant">
                            <i class="fa-solid fa-utensils"></i>
                            Nhà hàng

                        </a>
                    </li>
                    <li class="header__search-block-icon-list-item">
                        <a href="./product_page.php#river">
                            <i class="fa-solid fa-water"></i>
                            Gần sông

                        </a>
                    </li>
                    <li class="header__search-block-icon-list-item">
                        <a href="./product_page.php#road">
                            <i class="fa-solid fa-road"></i>
                            Mặt đường

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="categories" class="container__house">
            <div class="container__house-header">
                <div class="container__house-header-title">
                    <i class="container__house-header-title-icon fa-solid fa-circle"></i>
                    Nhà của chúng tôi
                </div>
                <div class="container__house-header-categories">
                    <ul class="container__house-header-categories-list">
                        <li class="container__house-header-categories-list-item">
                            <button onclick="alltype()" id="alltype" class="container__house-header-categories-list-item-btn btn active">Tất cả</button>
                        </li>
                        <li class="container__house-header-categories-list-item">
                            <button onclick="sell()" id="sell" class="container__house-header-categories-list-item-btn btn ">Nhà bán</button>
                        </li>
                        <li class="container__house-header-categories-list-item">
                            <button onclick="rent()" id="rent" class="container__house-header-categories-list-item-btn btn ">Nhà thuê</button>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="container__house-list">
                <div class="container__house-list-row row">
                <div class="container__house-list-column col l-4" style=" margin-bottom:8px;">
                        <div class="container__house-list-column-header" style="background-image: ;">
                            <div class="container__house-list-column-header-category">
                            </div>

                            <div class="container__house-list-column-header-near">
                            </div>

                            <div class="container__house-list-column-header-price">
                            </div>
                        </div>
                        <div class="container__house-list-column-content">
                            <h2 class="container__house-list-column-content-title">
                            </h2>

                            <p class="container__house-list-column-content-place">
                                <i class="container__house-list-column-content-place-icon fa-solid fa-location-dot"></i>
                            </p>

                            <ul class="container__house-list-column-content-list">
                                <li class="container__house-list-column-content-list-item"></li>
                                <li class="container__house-list-column-content-list-item"></li>
                            </ul>
                            <button class="container__house-list-column-content-list-buy-btn btn">
                                Thông tin
                            </button>
                            
                            <button class="container__house-list-column-content-list-favorite-btn btn">
                                Yêu thích
                            </button>
                        </div>
                    </div>
                    <div class="container__house-list-column col l-4" style=" margin-bottom:8px;">
                        <div class="container__house-list-column-header" style="background-image: ;">
                            <div class="container__house-list-column-header-category">
                            </div>

                            <div class="container__house-list-column-header-near">
                            </div>

                            <div class="container__house-list-column-header-price">
                            </div>
                        </div>
                        <div class="container__house-list-column-content">
                            <h2 class="container__house-list-column-content-title">
                            </h2>

                            <p class="container__house-list-column-content-place">
                                <i class="container__house-list-column-content-place-icon fa-solid fa-location-dot"></i>
                            </p>

                            <ul class="container__house-list-column-content-list">
                                <li class="container__house-list-column-content-list-item"></li>
                                <li class="container__house-list-column-content-list-item"></li>
                            </ul>
                            <button class="container__house-list-column-content-list-buy-btn btn">
                                Thông tin
                            </button>
                            
                            <button class="container__house-list-column-content-list-favorite-btn btn">
                                Yêu thích
                            </button>
                        </div>
                    </div>
                    <div class="container__house-list-column col l-4" style=" margin-bottom:8px;">
                        <div class="container__house-list-column-header" style="background-image: ;">
                            <div class="container__house-list-column-header-category">
                            </div>

                            <div class="container__house-list-column-header-near">
                            </div>

                            <div class="container__house-list-column-header-price">
                            </div>
                        </div>
                        <div class="container__house-list-column-content">
                            <h2 class="container__house-list-column-content-title">
                            </h2>

                            <p class="container__house-list-column-content-place">
                                <i class="container__house-list-column-content-place-icon fa-solid fa-location-dot"></i>
                            </p>

                            <ul class="container__house-list-column-content-list">
                                <li class="container__house-list-column-content-list-item"></li>
                                <li class="container__house-list-column-content-list-item"></li>
                            </ul>
                            <button class="container__house-list-column-content-list-buy-btn btn">
                                Thông tin
                            </button>
                            
                            <button class="container__house-list-column-content-list-favorite-btn btn">
                                Yêu thích
                            </button>
                        </div>
                    </div>
                    <div class="container__house-list-column col l-4" style=" margin-bottom:8px;">
                        <div class="container__house-list-column-header" style="background-image: ;">
                            <div class="container__house-list-column-header-category">
                            </div>

                            <div class="container__house-list-column-header-near">
                            </div>

                            <div class="container__house-list-column-header-price">
                            </div>
                        </div>
                        <div class="container__house-list-column-content">
                            <h2 class="container__house-list-column-content-title">
                            </h2>

                            <p class="container__house-list-column-content-place">
                                <i class="container__house-list-column-content-place-icon fa-solid fa-location-dot"></i>
                            </p>

                            <ul class="container__house-list-column-content-list">
                                <li class="container__house-list-column-content-list-item"></li>
                                <li class="container__house-list-column-content-list-item"></li>
                            </ul>
                            <button class="container__house-list-column-content-list-buy-btn btn">
                                Thông tin
                            </button>
                            
                            <button class="container__house-list-column-content-list-favorite-btn btn">
                                Yêu thích
                            </button>
                        </div>
                    </div>
                    <div class="container__house-list-column col l-4" style=" margin-bottom:8px;">
                        <div class="container__house-list-column-header" style="background-image: ;">
                            <div class="container__house-list-column-header-category">
                            </div>

                            <div class="container__house-list-column-header-near">
                            </div>

                            <div class="container__house-list-column-header-price">
                            </div>
                        </div>
                        <div class="container__house-list-column-content">
                            <h2 class="container__house-list-column-content-title">
                            </h2>

                            <p class="container__house-list-column-content-place">
                                <i class="container__house-list-column-content-place-icon fa-solid fa-location-dot"></i>
                            </p>

                            <ul class="container__house-list-column-content-list">
                                <li class="container__house-list-column-content-list-item"></li>
                                <li class="container__house-list-column-content-list-item"></li>
                            </ul>
                            <button class="container__house-list-column-content-list-buy-btn btn">
                                Thông tin
                            </button>
                            
                            <button class="container__house-list-column-content-list-favorite-btn btn">
                                Yêu thích
                            </button>
                        </div>
                    </div>
                    <div class="container__house-list-column col l-4" style=" margin-bottom:8px;">
                        <div class="container__house-list-column-header" style="background-image: ;">
                            <div class="container__house-list-column-header-category">
                            </div>

                            <div class="container__house-list-column-header-near">
                            </div>

                            <div class="container__house-list-column-header-price">
                            </div>
                        </div>
                        <div class="container__house-list-column-content">
                            <h2 class="container__house-list-column-content-title">
                            </h2>

                            <p class="container__house-list-column-content-place">
                                <i class="container__house-list-column-content-place-icon fa-solid fa-location-dot"></i>
                            </p>

                            <ul class="container__house-list-column-content-list">
                                <li class="container__house-list-column-content-list-item"></li>
                                <li class="container__house-list-column-content-list-item"></li>
                            </ul>
                            <button class="container__house-list-column-content-list-buy-btn btn">
                                Thông tin
                            </button>
                            
                            <button class="container__house-list-column-content-list-favorite-btn btn">
                                Yêu thích
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container__house-more">
                <a href="./product_page.php#categories"><button class="container__house-more-btn btn">Xem thêm</button></a>
            </div>
            
        </div>

        <div id="aboutus" class="container__aboutus">
            <img src="./assets/img/about-us.jpg" alt="" class="container__aboutus-img">
            <div class="container__aboutus-content">
                <div class="container__aboutus-content-question">
                    <i class="container__aboutus-content-question-icon fa-solid fa-circle"></i>
                    Tại sao nên chọn chúng tôi</div>
                <h2 class="container__aboutus-content-title">
                    Chúng tôi có các chuyên gia bất động sản trong nước và quốc tế
                </h2>
                <p class="container__aboutus-content-text">
                    Chúng tôi tự hào điểm mạnh của mình là có thể tư vấn cho khách 
                    hàng những sản phẩm bất động sản không phải là tốt nhất nhưng là 
                    những sản phẩm bất động sản phù hợp với quí khách hàng nhất, về cả 
                    khách hàng an cư lẫn  khách hàng kinh doanh.
                </p>
                <ul class="container__aboutus-content-list wide">
                    <li class="container__aboutus-content-list-item">
                        <i class="fa-solid fa-check"></i>
                        Kiểu dáng hiện đại, đa dạng</li>
                    <li class="container__aboutus-content-list-item">
                        <i class="fa-solid fa-check"></i>
                        Vị trí ở các thành phố lớn</li>
                    <li class="container__aboutus-content-list-item">
                        <i class="fa-solid fa-check"></i>
                        Dịch vụ tiện nghi</li>
                    <li class="container__aboutus-content-list-item">
                        <i class="fa-solid fa-check"></i>
                        Nghiên cứu dẫn đầu thị trường</li>
                    <li class="container__aboutus-content-list-item">
                        <i class="fa-solid fa-check"></i>
                        Trả góp trong 3 năm đầu Thông tin nhà</li>
                </ul>
            </div>
        </div>Y<div class="container__cities">
            <div class="container__cities-title">
                <div>
                    <i class="fa-solid fa-circle"></i>
                    Các thành phố
                </div>
                <h2 class="container__cities-title-text">
                    Tìm kiếm địa điểm yêu thích của bạn
                </h2>
            </div>
            
            <div class="container__cities-list">
                <div class="container__cities-list-item">
                    <div class="container__cities-list-item-img hcm">

                    </div>
                    <div class="container__cities-list-item-content">
                        <div class="container__cities-list-item-content-name">
                            TP.HCM
                        </div>
                        <div class="container__cities-list-item-content-numberhouse">
                        </div>
                        <a href="./product_page.php#tphcm"><i class="container__cities-list-item-content-icon fa-solid fa-circle-arrow-right"></i></a>
                    </div>                    
                </div>
                <div class="container__cities-list-item">
                    <div class="container__cities-list-item-img danang">
                        
                    </div>
                    <div class="container__cities-list-item-content">
                        <div class="container__cities-list-item-content-name">
                            Đà Nẵng
                        </div>
                        <div class="container__cities-list-item-content-numberhouse">
                        </div>
                        <a href="./product_page.php#danang"><i class="container__cities-list-item-content-icon fa-solid fa-circle-arrow-right"></i></a>
                    </div>                    
                </div>
                <div class="container__cities-list-item">
                    <div class="container__cities-list-item-img hanoi">

                    </div>
                    <div class="container__cities-list-item-content">
                        <div class="container__cities-list-item-content-name">
                            Hà Nội
                        </div>
                        <div class="container__cities-list-item-content-numberhouse">
                        </div>
                        <a href="./product_page.php#hanoi"><i class="container__cities-list-item-content-icon fa-solid fa-circle-arrow-right"></i></a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
<?php    
    $arr = [];
    $arr_tphcm = [];
    $arr_danang = [];
    $arr_hanoi = [];
    $sql = "SELECT * FROM `house`";
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){
        $arr[] = $row;
        if(strpos($row["address"], "TP.HCM")!==FALSE){
            $arr_tphcm[] = $row;
        }
        if(strpos($row["address"], "Đà Nẵng")!==FALSE){
            $arr_danang[] = $row;
        }
        if(strpos($row["address"], "Hà Nội")!==FALSE){
            $arr_hanoi[] = $row;
        }
        
    }
    
?>

<script>
    var arr_tphcm = <?php echo json_encode($arr_tphcm);?>;
    var arr_danang = <?php echo json_encode($arr_danang);?>;
    var arr_hanoi = <?php echo json_encode($arr_hanoi);?>;
    function loadData() {
        var arr = <?php echo json_encode($arr);?>;
        if(document.querySelector(".container__house-header-categories-list-item-btn.active").innerText == "Tất cả"){
            for (var j = 1; j <= 6; j++) {
                var product = document.querySelector(`.container__house-list-column:nth-child(${j})`);
                product.querySelector(".container__house-list-column-header-category").innerText = arr[j-1].type;
                product.querySelector(".container__house-list-column-header-near").innerText = arr[j-1].choose;
                product.querySelector(".container__house-list-column-header-price").innerText = arr[j-1].gia + " VNĐ";
                product.querySelector(".container__house-list-column-content-title").innerText = arr[j-1].ten;
                product.querySelector(".container__house-list-column-content-place").innerText = arr[j-1].address;
                product.querySelector(".container__house-list-column-content-list-item:nth-child(1)").innerText = "Số phòng ngủ: " + arr[j-1].phongngu;
                product.querySelector(".container__house-list-column-content-list-item:nth-child(2)").innerText = "Số phòng tắm: " + arr[j-1].phongtam;
                product.querySelector(".container__house-list-column-header").setAttribute("style", "background-image: url(./house_data/img/" + arr[j-1].img + ");");
            }  
        } else if (document.querySelector(".container__house-header-categories-list-item-btn.active").innerText == "Nhà bán"){
            var i = 0;
            var j = 1;
            while(j<=6) {
                if(arr[i].type == "Bán"){
                    var product = document.querySelector(`.container__house-list-column:nth-child(${j})`);
                    product.querySelector(".container__house-list-column-header-category").innerText = arr[i].type;
                    product.querySelector(".container__house-list-column-header-near").innerText = arr[i].choose;
                    product.querySelector(".container__house-list-column-header-price").innerText = arr[i].gia + " VNĐ";
                    product.querySelector(".container__house-list-column-content-title").innerText = arr[i].ten;
                    product.querySelector(".container__house-list-column-content-place").innerText = arr[i].address;
                    product.querySelector(".container__house-list-column-content-list-item:nth-child(1)").innerText = "Số phòng ngủ: " + arr[i].phongngu;
                    product.querySelector(".container__house-list-column-content-list-item:nth-child(2)").innerText = "Số phòng tắm: " + arr[i].phongtam;
                    product.querySelector(".container__house-list-column-header").setAttribute("style", "background-image: url(./house_data/img/" + arr[i].img + ");");
                    i++;
                    j++;
                } else {
                    i++;
                    continue;
                }
            }
        } else {
            var i = 0;
            var j = 1;
            while(j<=6) {
                if(arr[i].type == "Thuê"){
                    var product = document.querySelector(`.container__house-list-column:nth-child(${j})`);
                    product.querySelector(".container__house-list-column-header-category").innerText = arr[i].type;
                    product.querySelector(".container__house-list-column-header-near").innerText = arr[i].choose;
                    product.querySelector(".container__house-list-column-header-price").innerText = arr[i].gia + " VNĐ";
                    product.querySelector(".container__house-list-column-content-title").innerText = arr[i].ten;
                    product.querySelector(".container__house-list-column-content-place").innerText = arr[i].address;
                    product.querySelector(".container__house-list-column-content-list-item:nth-child(1)").innerText = "Số phòng ngủ: " + arr[i].phongngu;
                    product.querySelector(".container__house-list-column-content-list-item:nth-child(2)").innerText = "Số phòng tắm: " + arr[i].phongtam;
                    product.querySelector(".container__house-list-column-header").setAttribute("style", "background-image: url(./house_data/img/" + arr[i].img + ");");
                    i++;
                    j++;
                } else {
                    i++;
                    continue;
                }
            }
        }
    }
    loadData()
    
    function alltype(){
        document.querySelector(".container__house-header-categories-list-item-btn.active").classList.remove("active");
        document.querySelector("#alltype").classList.add("active");
        loadData();
    }
    function sell(){
        document.querySelector(".container__house-header-categories-list-item-btn.active").classList.remove("active");
        document.querySelector("#sell").classList.add("active");
        loadData();
    }
    function rent(){
        document.querySelector(".container__house-header-categories-list-item-btn.active").classList.remove("active");
        document.querySelector("#rent").classList.add("active");
        loadData();
    }

    document.querySelector(".container__cities-list-item:nth-child(1) .container__cities-list-item-content-numberhouse").innerText = arr_tphcm.length + " căn hộ";
    document.querySelector(".container__cities-list-item:nth-child(2) .container__cities-list-item-content-numberhouse").innerText = arr_danang.length + " căn hộ" ;
    document.querySelector(".container__cities-list-item:nth-child(3) .container__cities-list-item-content-numberhouse").innerText = arr_hanoi.length + " căn hộ" ;

    

    function getCityTPHCM(){
        cityData = document.querySelector(".city_tphcm").innerText;
        document.querySelector(".header__search-block-select span").innerText = "TP.HCM";
    }

    function getCityDANANG(){
        cityData = document.querySelector(".city_danang").innerText;
        document.querySelector(".header__search-block-select span").innerText = "Đà Nẵng";
    }
    function getCityHANOI(){
        cityData = document.querySelector(".city_hanoi").innerText;
        document.querySelector(".header__search-block-select span").innerText = "Hà Nội";
    }

    function searchData(){
        searchData = document.querySelector(".header__search-block-input").innerText;
        location.replace("./product_page.php#"+searchData);
    }

</script>

<?php
    require "inc/footer.php";
?>