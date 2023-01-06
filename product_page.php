<?php
    require "inc/header.php";
?>

<h1 class="product-title grid wide"></h1>

<div class="product-container grid wide">
    <div class="product-container__categories">
        <div class="product-container__categories-type">
            <button onclick="alltype()" id="alltype" class="product-container__categories-item active">Tất cả</button>
            <button onclick="sell()" id="sell" class="product-container__categories-item">Nhà bán</button>
            <button onclick="rent()" id="rent" class="product-container__categories-item">Nhà thuê</button>
        </div>
        <div class="product-container__categories-location">
            <button onclick="river()" id="river" class="product-container__categories-item">Gần sông</button>
            <button onclick="market()" id="market" class="product-container__categories-item">Gần siêu thị</button>
            <button onclick="restaurant()" id="restaurant" class="product-container__categories-item">Gần nhà hàng</button>
            <button onclick="road()" id="road" class="product-container__categories-item">Gần mặt đường</button>
        </div>
        <div class="product-container__categories-cities">
            <button onclick="tphcm()" id="tphcm" class="product-container__categories-item">TP.HCM</button>
            <button onclick="danang()" id="danang" class="product-container__categories-item">Đà Nẵng</button>
            <button onclick="hanoi()" id="hanoi" class="product-container__categories-item">Hà Nội</button>
        </div>
    </div>
    <div class="product-container__houses">
        <div class="product-container__houses-row row">
            <?php
                while($row = mysqli_fetch_array($query)){

            ?>
            <div class="container__house-list-column col l-4" style=" margin-bottom:8px;">
                <div class="container__house-list-column-header" style="background-image: url(./house_data/img/<?= $row["img"] ?>);">
                    <div class="container__house-list-column-header-category">
                    <?= $row["type"] ?>
                    </div>

                    <div class="container__house-list-column-header-near">
                    <?= $row["choose"] ?>
                    </div>

                    <div class="container__house-list-column-header-price">
                    <?= $row["gia"] ?>&nbsp; VNĐ
                    </div>
                </div>
                <div class="container__house-list-column-content">
                    <h2 class="container__house-list-column-content-title">
                    <?= $row["ten"] ?>
                    </h2>

                    <p class="container__house-list-column-content-place">
                        <i class="container__house-list-column-content-place-icon fa-solid fa-location-dot"></i>
                        <?= $row["address"] ?>
                    </p>

                    <ul class="container__house-list-column-content-list">
                        <li class="container__house-list-column-content-list-item">Số phòng ngủ: <?= $row["phongngu"] ?></li>
                        <li class="container__house-list-column-content-list-item">Số phòng tắm: <?= $row["phongtam"] ?></li>
                    </ul>
                    <button class="container__house-list-column-content-list-buy-btn btn">
                        Thông tin
                    </button>
                            
                    <button class="container__house-list-column-content-list-favorite-btn btn">
                        Yêu thích
                    </button>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>

<?php    
    $arr_all = [];
    $arr_sell = [];
    $arr_rent = [];
    $arr_near_river = [];
    $arr_near_market = [];
    $arr_near_restaurant = [];
    $arr_near_road = [];
    $arr_tphcm = [];
    $arr_danang = [];
    $arr_hanoi = [];
    $i = 0;
    $sql = "SELECT * FROM `house`";
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){
        $arr_all[] = $row;
        if($row["type"]=="Bán"){
            $arr_sell[] = $row;
        }
        if($row["type"]=="Thuê"){
            $arr_rent[] = $row;
        }
        if($row["choose"]=="Gần sông"){
            $arr_near_river[] = $row;
        }
        if($row["choose"]=="Gần siêu thị"){
            $arr_near_market[] = $row;
        }
        if($row["choose"]=="Gần nhà hàng"){
            $arr_near_restaurant[] = $row;
        }
        if($row["choose"]=="Gần mặt đường"){
            $arr_near_road[] = $row;
        }
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
    var arr_all = <?php echo json_encode($arr_all);?>;
    var arr_sell = <?php echo json_encode($arr_sell);?>;
    var arr_rent = <?php echo json_encode($arr_rent);?>;
    var arr_near_river = <?php echo json_encode($arr_near_river);?>;
    var arr_near_market = <?php echo json_encode($arr_near_market);?>;
    var arr_near_restaurant = <?php echo json_encode($arr_near_restaurant);?>;
    var arr_near_road = <?php echo json_encode($arr_near_road);?>;
    var arr_tphcm = <?php echo json_encode($arr_tphcm);?>;
    var arr_danang = <?php echo json_encode($arr_danang);?>;
    var arr_hanoi = <?php echo json_encode($arr_hanoi);?>;
    document.querySelector(".product-title").innerText = "Tất cả căn hộ";
    loadData(arr_all, arr_all);
    function loadData(data_arr, arr_all) {
        for (var i = 1; i <= data_arr.length; i++) {
            var product = document.querySelector(`.container__house-list-column:nth-child(${i})`);
            product.setAttribute("style","display:block;");
            product.querySelector(".container__house-list-column-header-category").innerText = data_arr[i-1].type;
            product.querySelector(".container__house-list-column-header-near").innerText = data_arr[i-1].choose;
            product.querySelector(".container__house-list-column-header-price").innerText = data_arr[i-1].gia + " VNĐ";
            product.querySelector(".container__house-list-column-content-title").innerText = data_arr[i-1].ten;
            product.querySelector(".container__house-list-column-content-place").innerText = data_arr[i-1].address;
            product.querySelector(".container__house-list-column-content-list-item:nth-child(1)").innerText = "Số phòng ngủ: " + data_arr[i-1].phongngu;
            product.querySelector(".container__house-list-column-content-list-item:nth-child(2)").innerText = "Số phòng tắm: " + data_arr[i-1].phongtam;
            product.querySelector(".container__house-list-column-header").setAttribute("style", "background-image: url(./house_data/img/" + data_arr[i-1].img + ");");
        }
        for (var i = data_arr.length+1; i <= arr_all.length; i++){
            var product = document.querySelector(`.container__house-list-column:nth-child(${i})`);
            product.setAttribute("style","display:none;");
        }
    }

    function alltype(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#alltype").classList.add("active");
        document.querySelector(".product-title").innerText = "Tất cả căn hộ";
        loadData(arr_all, arr_all);
    }
    function sell(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#sell").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ đang bán";
        loadData(arr_sell, arr_all);
    }
    function rent(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#rent").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ đang cho thuê";
        loadData(arr_rent, arr_all);
    }
    function river(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#river").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ gần khu vực sông";
        loadData(arr_near_river, arr_all);
    }function market(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#market").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ gần khu vực siêu thị";
        loadData(arr_near_market, arr_all);
    }function restaurant(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#restaurant").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ gần khu vực nhà hàng";
        loadData(arr_near_restaurant, arr_all);
    }function road(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#road").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ gần khu vực mặt đường";
        loadData(arr_near_road, arr_all);
    }function tphcm(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#tphcm").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ trong khu vực TP.HCM";
        loadData(arr_tphcm, arr_all);
    }function danang(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#danang").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ trong khu vực Đà Nẵng";
        loadData(arr_danang, arr_all);
    }function hanoi(){
        document.querySelector(".product-container__categories-item.active").classList.remove("active");
        document.querySelector("#hanoi").classList.add("active");
        document.querySelector(".product-title").innerText = "Căn hộ trong khu vực Hà Nội";
        loadData(arr_hanoi, arr_all);
    }

    var url_web = location.href;
    if(url_web.includes("#tphcm")) {
        tphcm();
    } else if(url_web.includes("#danang")) {
        danang();
    } else if(url_web.includes("#hanoi")) {
        hanoi();
    } else if(url_web.includes("#sell")) {
        sell();
    } else if(url_web.includes("#rent")) {
        rent();
    } else if(url_web.includes("#river")){
        river();
    } else if(url_web.includes("#market")){
        market();
    } else if(url_web.includes("#restaurant")){
        restaurant();
    } else if(url_web.includes("#road")){
        road();
    }
</script>
<?php
    require "inc/footer.php";
?>