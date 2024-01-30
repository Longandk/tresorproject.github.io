<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/35b7d9ec49.js" crossorigin="anonymous"></script>
    <style>
     *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

html {
    scroll-behavior: smooth;
}

body{
    background: #080808;
    color:#fff;
}

#header{
    width:100%;
    height:100vh;
    background: linear-gradient(45deg, rgb(62, 223, 161), rgb(113, 167, 137), rgb(6, 230, 144) );
}

.paris{
    width:100px;
    height:40px;
    background: black;
}

.paris2{
    color:green;
    position: absolute;
}

.container{
    padding:10px 10%;
}

nav {
    display:flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    
}

.logo{
    width:140px;
}

nav ul li{
    display:inline-block;
    list-style: none;
    margin:10px 20px;
}

nav ul li a {
    color:#fff;
    text-decoration: none;
    font-size: 18px;
    position:relative;
}

nav ul li a::after{
    content: '';
    width:0;
    height:3px;
    background:#ff004f;
    position: absolute;
    left:0;
    bottom: -6px;
    transition: 0.5s;
}

nav ul li a:hover::after {
    width:100%;
}

.header-text{
    margin-top: 20%;
    font-size: 20px;
}

.header-text h1{
    font-size: 60px;
    margin-top: 20px;
}

.header-text h1 span{
    color:#ff004f
}

#disneylog{
    width:400px;
    height:400px;
}
/*----------about--------*/
#about{
    padding:80px 0;
    color: #ababab;
}

.row{
    display:flex;
    justify-content: space-between;
    flex-wrap:wrap;
}

.about-col-1 {
    flex-basis: 50%;
}

.about-col-1 img{
    width:100%;
    border-radius: 15px;
}

.about-col-2 {

    flex-basis: 50%;
}

.sub-tittle{
    
    font-size: 60px;
    font-weight: 600;
    color:#fff;
}

.tab-tittles{
    display:flex;
    margin:20px 0 40px;
}

.tab-links{

    margin-right:50px;
    font-size: 18px;
    font-weight: 500;
    cursor:pointer;
    position:relative;
}

.tab-links::after{
    content:'';
    width:0;
    height:3px;
    background: #ff004f;
    position: absolute;
    left:0%;
    bottom: -8px;
    transition: 0.5s;
}

.tab-links.active-link::after{

    width:50%;
}

.tab-contents ul li {
    list-style: none;
    margin: 10px 0;
}

.tab-contents ul li span {
    
    color: #b54769;
    font-size: 14px;
}

.tab-contents {

    display:none;
}

.tab-contentsone {

display:none;
}

.tab-contentsone.active-tab {

display:block;
}

.tab-contentstwo {

display:none;
}

.tab-contentstwo.active-tab {

display:block;
}

.tab-contents.active-tab {

    display:block;
}

.tab-contents.active-tabone {

display:block;
}

.tab-contents.active-tabtwo {

display:block;
}

.tab-contents.active-tabthree {

display:block;
}

/* --------services------------ */

#services{

    padding: 30px 0;
}
.services-list{

    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap:40px;
    margin-top: 50px;
}

.services-list div {
    background:#262626;
    padding:40px;
    font-size: 13px;
    font-weight: 300;
    border-radius: 10px;
    transition: background 0.5s, transform 0.5s;
}

.services-list div i {
   font-size:50px;
   margin-bottom: 30px;
}

.services-list div h2 {
 
    font-size: 30px;
    font-weight: 500;
    margin-bottom:15px;
}

.services-list div a {
    text-decoration: none;
    color:#fff;
    font-size:12px;
    margin-top:20px;
    display:inline-block;
}

.services-list div:hover{
    background: #ff004f;
    transform: translateY(-10px);
}

/*----------------portfolio-------------*/

#portfolio{

    padding:50px 0;
}

#wata {
    width:300px;
    height:300px;
    
}

.work-list{

    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap:40px;
    margin-top:50px;
}

.work{
    border-radius: 10px;
    position:relative;
    overflow:hidden;
}

.work img {

    width:100%;
    border-radius: 10px;
    display: block;
    transition: transform 0.5s;
}

.layer {
    width:100%;
    height:0;
    background: linear-gradient(rgb(0,0,0,0.6), #ff004f);
    border-radius: 10px;
    position:absolute;
    left:0;
    bottom:0;
    overflow: hidden;
    display:flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    font-size: 14px;
    transition: height 0.5s;
}

.layer h3 {
    font-weight: 500;
    margin-bottom: 20px;
}

.layer a {

    margin-top: 20px;
    color:#ff004f;
    text-decoration: none;
    font-size: 18px;
    line-height: 60px;
    background: #fff;
    width:60px;
    height:60px;
    border-radius: 50%;
    text-align: center;
}

.work:hover img {

    transform : scale(1.1);
}

.work:hover .layer {

    height:100%;
}

.btn {
    display:block;
    margin: 50px auto;
    width:fit-content;
    border: 1px solid #ff004f;
    padding:14px 50px;
    border-radius: 6px;
    text-decoration: none;
    color:#fff;
    transition: background 0.5s;
}

.btn:hover {

    background: #ff004f;
}

/*-------------------contact----------------*/
.contact-left{
    flex-basis:50%;
}

.contact-right{
    flex-basis:50%;
}

.contact-left p {
    margin-top:30px;
}

.contact-left p i {

    color:#ff004f;
    margin-right:15px;
    font-size:20px;
}

.social-icons a{

    text-decoration:none;
    font-size:30px;
    margin-right:15px;
    color:#ababab;
    transition: transform 0.5s;
}

.social-icons a:hover {
    color:#ff004f;
    transform: translateY(-5px);
}

.btn.btn2{
    display:inline-block;
    background: #ff004f;
}

.contact-right form {
    width:100%;
}

form input, form textarea {
    width:100%;
    border: 0;
    outline:none;
    background: #262626;
    padding:15px;
    margin: 15px 0;
    color:#fff;
    font-size:18px;
    border-radius: 6px;
    resize: none;
}

form .btn2 {
    padding:14px 60px;
    font-size: 18px;
    margin-top: 20px;
    cursor: pointer;
}

.copyright{
    width:100%;
    text-align: center;
    padding:25px 0;
    background: #262626;
    font-weight:300;
    margin-top:20px;
}

.copyright i {
    color:#ff004f;
}

.toggle{
    display:none;
}

.highlight {
       width:40px;
       height:20px;
        border-bottom: 3px solid #fd1d1d;
        transition: 0.5s;
    }

@media screen and (max-width: 375px) {
    
    
#header{
    width:100%;
    height:100vh;
    background-image: url(images/fally3.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.header-text {
    margin-top:100%;
    font-size: 16px;
}

.header-text h1 {
    font-size: 30px;
}

.toggle {
    display:block;
    position:absolute;
    top:2%;
    left:80%;
    cursor:pointer;
    z-index: 1000;
}

.tab{
    display:block;
    width:25px;
    height:3px;
    margin: 5px;
    background: white;
}

#togletab.active .tab:nth-child(1){
    transform: translateY(8px) rotate(45deg);
}

#togletab.active .tab:nth-child(2){
    
    opacity: 0;
}

#togletab.active .tab:nth-child(3){
    transform: translateY(-8px) rotate(-45deg);
}

nav ul {

    background: #ff004f;
    position:fixed;
    top:0;
    right:-200px;
    width:200px;
    height:100vh;
    padding-top:50px;
    transition: 0.5s;
}

nav ul.is-active {
    right:0px;
}

nav ul li {
    display:block;
    margin:25px;
}

.sub-tittle {
    font-size: 40px;
}

.about-col-1, .about-col-2 {

    flex-basis: 100%;
}

#disneylog{
    width:300px;
    height:300px;
}

.about-col-1 {
    margin-bottom: 30px;
}

.about-col-2 {
    font-size: 14px;
}

.tab-links{
    font-size:16px;
    margin-right: 20px;
}

.contact-left, .contact-right {

    flex-basis: 100%;
}

.copy-right {
    font-size:14px;
}
} 
    </style>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/parislogo.png" alt="" class="logo">
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="toggle" id="togletab">
                    <span class="tab"></span>
                    <span class="tab"></span>
                    <span class="tab"></span>
                </div>
            </nav>
            <div class="header-text">
             
                <p>UI/UX Designer</p>
                <h1>Hello, <br><span>Welcome</span> to Paris</h1>
            </div>
        </div>
    </div>
    <!--------about------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img id="disneylog"src="images/disney.webp" alt="">
                </div>
                <div class="about-col-1">
                    <h1 class="sub-tittle">About Paris</h1>
                    <p>A hardworking, confident and articulate individual with 3 years experience in stock controlling and data capturing. I am currently working as an assistant to a chef, with the responsibility of cleaning, organising and helping with meal preparations; in a mini restaurant. I have very good communication skills and can easily adapt to diversity. A hardworking, confident and articulate individual with 3 years experience in stock controlling and data capturing. I am currently working as an assistant to a chef, with the responsibility of cleaning, organising and helping with meal preparations; in a mini restaurant. I have very good communication skills and can easily adapt to diversity. </p>

                    <div class="tab-tittles">
                        <p class="tab-links skills">Skills</p>
                        <p class="tab-links experience">Experience</p>
                        <p class="tab-links education">Education</p>
                    </div>

                    <div class="tab-contents active-tab"  id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                        <li><span>Web Development</span><br>Web app Development</li>
                        <li><span>App Developemnt</span><br>Building Android/iOS apps</li>
                    </ul>
                    </div>
                    <div class="tab-contents tab-contentsone"  id="experience">
                        <ul>
                            <li><span>2021 - Current</span><br>UI/UX Design Training  at ET Institute</li>
                            <li><span>2019 - 2021</span><br>Team lead at StarApp LLC</li>
                            <li><span>2017 - 2019</span><br>UI/UX Design Executive at Coin Degital Ltd.</li>
                            <li><span>2016 - 2017</span><br>Internship at ekart eCommerce.</li>
                        </ul>
                        </div>
                        <div class="tab-contents tab-contentstwo"   id="education">
                            <ul>
                                <li><span>2016</span><br>UI/UX Design Training at ET Institute</li>
                                <li><span>2016</span><br>MBA from MIT Johannesburg</li>
                                <li><span>2014</span><br>BBA from ISM Johannesburg</li>
                            </ul>
                            </div>
                </div>
            </div>
        </div>
    </div>
<!-------services-------------------------------------- -->

<div id="services">

    <div class="container">
        <h1 class="sub-tittle">My Services</h1>
        <div class="services-list">

            
            <div>
                <i class="fas fa-code"></i>
                <h2>Web Design</h2>
                <p>A hardworking, confident and articulate individual with 3 years experience in stock controlling and data capturing.</p>
                <a href="#">learn more</a>
            </div>
            <div>
                <i class="fas fa-crop-alt"></i>
                <h2>UI/UX Design</h2>
                <p>A hardworking, confident and articulate individual with 3 years experience in stock controlling and data capturing.</p>
                <a href="#">learn more</a>
            </div>
            <div>
                <i class="fab fa-app-store"></i>
                <h2>App Design</h2>
                <p>A hardworking, confident and articulate individual with 3 years experience in stock controlling and data capturing.</p>
                <a href="#">learn more</a>
            </div>
        </div>
    </div>
</div>
<!-------portfolio-------------------------------- -->

<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img id="wata" src="images/wata.jpeg" alt="">
                <div class="layer">
                    <h3>Social Media App</h3>
                    <p>The app connects you yo the talented people around the world , Download it from play store.</p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="work">
                <img id="wata" src="images/wata2.png" alt="">
                <div class="layer">
                    <h3>Music App</h3>
                    <p>The app connects you yo the talented people around the world , Download it from play store.</p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="work">
                <img id="wata" src="images/wata3.png" alt="">
                <div class="layer">
                    <h3>Online Shopping App</h3>
                    <p>The app connects you yo the talented people around the world , Download it from play store.</p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>

            <a href="#" class="btn">See more</a>
        </div>
    </div>

</div>
<!--------------contact------------------- -->

<div id="contact">

<div class="container">
    <div class="row">
        <div class="contact-left">
       <h1 class="sub-title">Contact Me</h1>
       <p><i class="fas fa-paper-plane"></i>contact@example.com</p>
       <p><i class="fas fa-phone-square-alt"></i>0123456789</p>
       <div class="social-icons">
        <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a>
        <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a>

       </div>
    <a href="appointment.pdf"  download class="btn btn2">Download CV</a>
        </div>
        <div class="contact-right">
            <form action="">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="text" name="email" placeholder="Your Email" required>
                <textarea name="message" id=""  rows="6" placeholder="Your Message"></textarea>
                <button type="submit" class="btn btn2">Submit</button>
            </form>
        </div>
    </div>
</div>
<div class="copyright">
  <p>Copyright @ Tresor. Made with <i class="fas fa-heart"></i> by Mubaba Mpika</p>
</div>
</div>
    <script>
        var tablinks = document.getElementsByClassName("tab-links");
      var tabcontents = document.getElementsByClassName("tab-contents");
        
      function opentab(tabname){

        for (tablink of tablinks){

            tablink.classList.remove("active-link");
        }

        for (tabcontent of tabcontents){

tabcontent.classList.remove("active-tab");
}

  event.currentTarget.classList.add("active-link");

  document.getElementById(tabname).classList.add("active-tab");
      }



    </script>
    <script>
        
        let Tnavbar = document.querySelector("nav ul");
        let Ttogle = document.querySelector("#togletab");
        

       
        Ttogle.addEventListener('click', function(){
             
            Ttogle.classList.toggle("active");
            Tnavbar.classList.toggle("is-active");
        } );

        const elem = document.querySelector('.highlight');
        const Ski = document.querySelector('.skills');
        const Exp = document.querySelector('.experience');
        const Edu = document.querySelector('.education');
        const SkiJ = document.querySelector('#skills');
        const ExpJ = document.querySelector('#experience');
        const EduJ = document.querySelector('#education');
        const TabC = document.querySelector('.tab-contents');
        const TabCOne = document.querySelector('.tab-contentsone');
        const TabTwo = document.querySelector('.tab-contentstwo');

        Ski.addEventListener('click', function(){
            Edu.classList.remove('highlight');
            Exp.classList.remove('highlight');
            Ski.classList.add('highlight');
            TabC.classList.add('active-tab');
            TabCOne.classList.remove('active-tab');
            TabTwo.classList.remove('active-tab');
            
            
        });

        Exp.addEventListener('click', function(){
            Exp.classList.add('highlight');
            Ski.classList.remove('highlight');
            Edu.classList.remove('highlight');
            TabCOne.classList.add('active-tab');
            TabC.classList.remove('active-tab');
            TabTwo.classList.remove('active-tab');
            
        });

        Edu.addEventListener('click', function(){

            Edu.classList.add('highlight');
            Exp.classList.remove('highlight');
            Ski.classList.remove('highlight');
            TabTwo.classList.add('active-tab');
            TabC.classList.remove('active-tab');
            TabCOne.classList.remove('active-tab');
            
        });
    </script>
</body>
</html>