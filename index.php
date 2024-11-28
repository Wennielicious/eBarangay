<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../user/Image/logobrgy.png" type="image/x-icon">
    <title>eBarangay - Barangay Nueva Victoria</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,200&icon_names=store" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=store" />
   
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            overflow: hidden; 
            height: 100%;
            background: #1E4460;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        .loading-container {
            position: relative;
            width: 1400px; 
            height: 600px; 
            background: #1E4460;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s;
        }

        .loading-group {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex; 
            justify-content: center;
            align-items: center;
        }

        .loading-bar-outline {
            width: 1300px; 
            height: 53px;
            border: 2px solid #FFFFFF;
            border-radius: 15px;
            position: relative;
            box-sizing: border-box;
        }

        .loading-bar-progress {
            height: 43px;
            background: #FFFFFF;
            border-radius: 15px;
            width: 0; 
            animation: fill-bar 4s linear forwards;
            position: absolute; 
            top: 4px; 
            left: 5px; 
            }

        .icon {
            position: absolute;
            background: unset;
        }

       
        .bank {
            width: 78px;
            height: 80px;
            left: 1260px;
            top: 200px;
        }

        .tree1 {
            width: 35px;
            height: 40px;
            left: 1200px; 
            top: 236px; 
        }

        .tree2, .tree3, .tree4, .tree5, .tree6 {
            width: 35px;
            height: 40px;
            
        }

        .tree2 { left: 840px; top: 235px; }
        .tree3 { left: 1110px; top: 235px; }
        .tree4 { left: 640px; top: 235px; }
        .tree5 { left: 490px; top: 235px; }
        .tree6 { left: 380px; top: 235px; }

        .shop1, .shop2 {
            width: 49px;
            height: 42px;
        }

        .shop1 { left: 1070px; top: 238px; }
        .shop2 { left: 300px; top: 230px; }

        .building1, .building2 {
            width: 55px;
            height: 50px;
        }

        .building1 { left: 780px; top: 228px; }
        .building2 { left: 298px; top: 228px; }

        .home2, .home3, .home4, .home5, .home6, .home7 {
            background-color: unset;
        }

        .home2 { width: 35px; height: 40px; left: 560px; top: 238px; }
        .home3 { width: 35px; height: 40px; left: 1000px; top: 238px; }
        .home4 { width: 38px; height: 80px; left: 100px; top: 198px; }
        .home5 { width: 35px; height: 40px; left: 150px; top: 238px; }
        .home6 { width: 45px; height: 70px; left: 950px; top: 208px; }
        .home7 { width: 38px; height: 80px; left: 600px; top: 198px; }

        .signage, .signage2 {
            width: 35px;
            height: 30px;
        }

        .signage { left: 194px; top: 245px; }
        .signage2 { left: 694px; top: 246px; }

       
        .runner {
            width: 57px;
            height: 54px;
            left: 0px;
            top: 220px; 
            animation: run 4.0s linear forwards;
        }

        @keyframes run {
            0% {
                left: 0px;
            }
            100% {
                left: 1290px;
            }
        }

        @keyframes fill-bar {
            0% {
                width: 0px;
            }
            100% {
                width: 100%; /
            }
        }
        
      
        .door-container {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        .door {
            position: absolute;
            width: 50%;
            height: 100%;
            background-color: #0D2B3E;
            transition: transform 1.5s ease;
        }

        .door-left {
            left: 0;
            transform: translateX(0);
        }

        .door-right {
            right: 0;
            transform: translateX(0);
        }

        .door-open .door-left {
            transform: translateX(-100%);
        }

        .door-open .door-right {
            transform: translateX(100%);
        }

        .logo, .button {
            display: none;
            position: absolute;
            z-index: 10;
            text-align: center;
        }

        .logo {
            top: -5%;
            width: 70%;
           

        }   

        .button {
            top: 60%;
        }
        .button :hover{
            background-color: #0D2B3E;
            transition: 0.5s ease-in;
            text-decoration: none;
        }

        .button button {
            text-transform: uppercase;
            font-weight: bolder;
            border-radius: 10px;
            padding: 15px 30px;
            font-size: 18px;
            background-color: #426d9b;
            border: none;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="loading-container">
        <div class="loading-group">
            <img src="../user/Image/brgyy.png" alt="" class="icon bank">
            <img src="../user/Image/tree2.png" alt="" class="icon tree1">
            <img src="../user/Image/tree2.png" alt="" class="icon tree2">
            <img src="../user/Image/tree2.png" alt="" class="icon tree3">
            <img src="../user/Image/tree2.png" alt="" class="icon tree4">
            <img src="../user/Image/tree2.png" alt="" class="icon tree5">
            <img src="../user/Image/tree2.png" alt="" class="icon tree6">
            <img src="../user/Image/store.png" alt="" class="icon shop1">
            <img src="../user/Image/house2.png" alt="" class="icon shop2">
            <img src="../user/Image/sign.png" alt="" class="icon signage">
            <img src="../user/Image/sign.png" alt="" class="icon signage2">
            <img src="../user/Image/house2.png" alt="" class="icon building1">
            <img src="../user/Image/house2.png" alt="" class="icon building2">
            <img src="../user/Image/house2.png" alt="" class="icon home2">
            <img src="../user/Image/house2.png" alt="" class="icon home3">
            <img src="../user/Image/house3.png" alt="" class="icon home4">
            <img src="../user/Image/house2.png" alt="" class="icon home5">
            <img src="../user/Image/house3.png" alt="" class="icon home6">
            <img src="../user/Image/house3.png" alt="" class="icon home7">
            <div class="loading-bar-outline">
                <div class="loading-bar-progress"></div>
            </div>
            <img src="../user/Image/runner.png" alt="" class="icon runner">
        </div>
    </div>

    <div class="door-container">
        <div class="door door-left"></div>
        <div class="door door-right"></div>
    
        <img src="../user/Image/Loadingbg.png" alt="" class="logo">
        <div class="button" >
            <button onclick="window.location.href='dashboard.html'">Enter</button>
        </div>
    </div>

    <script>
        const runner = document.querySelector('.runner');
        const loadingBarProgress = document.querySelector('.loading-bar-progress');
        const loadingContainer = document.querySelector('.loading-container');
        const doorContainer = document.querySelector('.door-container');
        const doors = document.querySelectorAll('.door');
        const logo = document.querySelector('.logo');
        const button = document.querySelector('.button');

        loadingBarProgress.addEventListener('animationend', () => {
            runner.style.transition = 'opacity 0.5s';
            runner.style.opacity = '0';
            loadingContainer.style.opacity = '0';
            
            setTimeout(() => {
                runner.style.display = 'none';
                loadingContainer.style.display = 'none';
                doorContainer.style.display = 'flex';

                setTimeout(() => {
                    doorContainer.classList.add('door-open');
                    setTimeout(() => {
                        logo.style.display = 'block';
                        button.style.display = 'block';
                    }, 1500);
                }, 100);
            }, 500);
        });

    </script>
</body>
</html>
