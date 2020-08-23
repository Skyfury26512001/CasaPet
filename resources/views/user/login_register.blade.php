<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('assets/user/css/login_register.css')}}"/>
    <link href={{asset('assets/user/fonts/flaticon/flaticon.css')}} rel="stylesheet" type="text/css">
    <title>Sign in & Sign up Form</title>
</head>
<body>
<div class="container">
    <div class="bg_cover"></div>
    <div class="forms-container">
        <div class="signin-signup">
            <form action="#" class="sign-in-form">
                <h2 class="title">ĐĂNG NHẬP</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password"/>
                </div>
                <input type="submit" value="Gửi" class="btn solid"/>
                <p class="social-text">Đăng nhập bằng: </p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>
            <form action="#" class="sign-up-form">
                <h2 class="title" style="background-color: coral; border: 1px solid #F9575C">ĐĂNG KÝ</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-phone"></i>
                    <input type="text" placeholder="Phone Number"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-birthday-cake"></i>
                    <input type="text" placeholder="dd/mm/yy"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password"/>
                </div>
                <input type="submit" class="btn" value="Gửi" style="background-color: coral"/>
                <p class="social-text">Đăng ký với: </p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Chưa có tài khoản?</h3>
                <p>Trở thành 1 thành viên của &nbsp;<i class="flaticon-dog-20">PetsCasa</i>&nbsp; ngay thôi nào!!</p>
                <button class="btn transparent" id="sign-up-btn">
                    Đăng ký
                </button>
            </div>
            <img
                src="https://res.cloudinary.com/dwarrion/image/upload/v1597853775/PetCasa/Login_Signup_Page/cat_slv9kc.png"
                class="image" alt="">
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Đã có tài khoản?</h3>
                <p>Trải nghiệm dịch vụ của &nbsp;<i class="flaticon-dog-20" style="color: #F9BE4F">PetsCasa</i>&nbsp;
                    ngay
                    thôi nào!!</p>
                <button class="btn transparent" id="sign-in-btn">
                    Đăng nhập
                </button>
            </div>
            <img
                src="https://res.cloudinary.com/dwarrion/image/upload/v1597855372/PetCasa/Login_Signup_Page/dog_gdewko.png"
                class="image" alt=""/>
        </div>
    </div>
</div>

<script src="{{asset("assets/user/js/login_register.js")}}"></script>
</body>
</html>
