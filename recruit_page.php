<?php
    require "inc/header.php";
?>




<div class="recruit__container">
    <div class="recruit__container-title">
        <h1 class="recruit__container-title-slogan">
            Trở thành một phần của chúng tôi
        </h1>
        <p class="recruit__container-title-text">
            Bạn chính là người trực tiếp mang đến cho khách hàng thứ mà họ đang cần nhất
        </p>
    </div>

    <form action="" class="recruit__container-form">
        <h2 class="recruit__container-form-title">
            Đăng kí tuyển dụng
        </h2>

        <div class="recruit__container-form-fullname">
            Họ tên: <br>
            <input type="text" class="recruit__container-form-fullname-input">
        </div>

        <div class="recruit__container-form-birth_gender">
            Ngày tháng năm sinh:
            <input type="date" class="recruit__container-form-birth-input">
            <div class="recruit__container-form-gender">
                Giới tính:
                <select name="" id="" class="recruit__container-form-gender-select">
                    <option value="" class="recruit__container-form-gender-option">Nam</option>
                    <option value="" class="recruit__container-form-gender-option">Nữ</option>
                    <option value="" class="recruit__container-form-gender-option">Khác</option>
                </select>
            </div>
        </div>
        <div class="recruit__container-form-hometown">
            Quên quán:<br>
            <input type="text" class="recruit__container-form-hometown-input">
        </div>

        <div class="recruit__container-form-education">
            Bằng cấp:<br>
            <input type="text" class="recruit__container-form-education-input">
        </div>

        <div class="recruit__container-form-detail">
            Mô tả về bản thân:<br>
            <textarea class="recruit__container-form-detail-input" name="" id="" cols="30" rows="10"></textarea>
        </div>

        <button onclick="notify()" class="recruit__container-form-submit">
            Đặt lịch phỏng vấn
        </button>
    </form>
    <div class="notify">
        Cảm ơn bạn! Chúng tôi sẽ liên lạc với bạn sớm nhất có thể trong vòng 7 ngày tới.
    </div>

    
</div>


<script>
    function notify(){
        alert("Cảm ơn bạn! Chúng tôi sẽ liên lạc với bạn sớm nhất có thể trong vòng 7 ngày tới.");
    }

</script>

<?php
    require "inc/footer.php";
?>