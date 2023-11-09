<!DOCTYPE html>
<html lang="en">
<head>
  <title>Navbar - Html Css Javascript</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
      :root{
    --color-1: #2f3240;
}
body{
	font-family: sans-serif;
	background-color: #e8eef3;
}
*{
	box-sizing: border-box;
	margin:0;
	padding:0;
}
ul{
	list-style: none;
}
a{
	text-decoration: none;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
.align-items-center{
	align-items: center;
}
.justify-content-between{
	justify-content: space-between;
}
/*header*/
.header{
	background-color: var(--color-1);
	padding: 12px 0;
	line-height: 1.5;
}

.header .logo,
.header .nav{
	padding:0 15px;
}
.header .logo a{
	font-size: 30px;
	color: #ffffff;
	text-transform: capitalize;
}
.header .nav ul li{
	display: inline-block;
	margin-left: 40px;
}
.header .nav ul li a{
	display: block;
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	padding: 10px 0;
	transition: all 0.5s ease;
}
.header .nav ul li a.active,
.header .nav ul li a:hover{
	color: #f3a93d;
}
.nav-toggler{
	height: 34px;
	width: 44px;
	background-color: #ffffff;
	border-radius: 4px;
	cursor: pointer;
	border:none;
	display: none;
	margin-right: 15px;
}
.nav-toggler:focus{
	outline: none;
	box-shadow: 0 0 15px rgba(255,255,255,0.5);
}
.nav-toggler span{
    height: 2px;
    width: 20px;
    background-color: var(--color-1);
    display: block;
    margin:auto;
    position: relative;
    transition: all 0.3s ease;
}
.nav-toggler.active span{
	background-color: transparent;
}
.nav-toggler span::before,
.nav-toggler span::after{
	content: '';
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background-color: var(--color-1);
	transition: all 0.3s ease;
}
.nav-toggler span::before{
	transform: translateY(-6px);
}
.nav-toggler.active span::before{
	transform: rotate(45deg);
}
.nav-toggler span::after{
	transform: translateY(6px);
}
.nav-toggler.active span::after{
	transform: rotate(135deg);
}
@media(max-width:991px){
   .nav-toggler{
   	display: block;
   }
   .header .nav{
   	width: 100%;
   	padding:0;
   	max-height: 0px;
   	overflow: hidden;
   	visibility: hidden;
   	transition: all 0.5s ease;
   }
   .header .nav.open{
   	visibility: visible;
   }
   .header .nav ul{
   	padding:12px 15px 0;
   	margin-top: 12px;
   	border-top:1px solid rgba(255,255,255,0.2);
   }
   .header .nav ul li{
   	display: block;
   	margin:0;
   }
}



    </style>
</head>
<body>

 <header class="header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="logo">
               <a href="#">logo</a>
            </div>
            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            <nav class="nav">
               <ul>
                  <li><a href="#" class="active">home</a></li>
                  <li><a href="#">about</a></li>
                  <li><a href="#">services</a></li>
                  <li><a href="#">portfolio</a></li>
                  <li><a href="#">testimonials</a></li>
                  <li><a href="#">contact</a></li>
               </ul>
            </nav>
        </div>
    </div>
 </header>
 
     <script>
      const navToggler = document.querySelector(".nav-toggler");
navToggler.addEventListener("click", navToggle);

function navToggle() {
  navToggler.classList.toggle("active");
  const nav = document.querySelector(".nav");
  nav.classList.toggle("open");
  if (nav.classList.contains("open")) {
    nav.style.maxHeight = nav.scrollHeight + "px";
  } else {
    nav.removeAttribute("style");
  }
}
     </script>

</body>
</html>
