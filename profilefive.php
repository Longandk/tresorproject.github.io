<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMAGE SLIDER</title>
    <style>

     .slide img {
      width:800px;
        height:500px;
     }
    

 
      .slideproject{
        width:100%;
        height:500px;
        margin-top:10px;
        padding:0;
        display:flex;
        justify-content: center;
        background: #40D3DC;
        
      }

      .slider{
        width:800px;
        height:500px;
        border-radius: 10px;
        overflow:hidden;
        
      }

      .slides{
        width:500%;
        height:500px;
        display:flex;
      }

      .slides input{
        display:none;
      }

      .slide{

        width:20%;
        transition: 2s;

      }

      .navigation-manuel {

        position:absolute;
        width:800px;
        margin-top:-40px;
        display: flex;
        justify-content: center;
        

      }

      .manual-btn{

        border: 2px solid #40D3DC;
        padding:5px;
        border-radius: 10px;
        cursor:pointer;
        transition: 1s;
      }

     .manual-btn:not(:last-child){
      margin-right: 40px;
     }

     .manual-btn:hover {

      background: #40D3DC;
     }

     #radio1:checked ~ .first{
      margin-left: 0;
     }

     #radio2:checked ~ .first{
      margin-left: -20%;
     }

     #radio3:checked ~ .first{
      margin-left: -40%;
     }

     #radio4:checked ~ .first{
      margin-left: -60%;
     }

     .navigation-auto{

      position:absolute;
      display:flex;
      width:800px;
      justify-content: center;
      margin-top: 460px;
     }

     .navigation-auto div {

      border: 2px solid #40D3DC;
      padding:5px;
      border-radius: 10px;
      transition: 1s;
     }

     .navigation-auto div:not(:last-child){

      margin-right: 40px;
     }

     #radio1:checked ~ .navigation-auto .auto-btn1{

      background: #40D3DC;
     }
     #radio2:checked ~ .navigation-auto .auto-btn2{

background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{

background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{

background: #40D3DC;
}
.indexmain{
  width:100%;
  height: 100vh;
}

#indeximage{
  width:197px;
  height:190px;
}

.posts{
  width:100%;
  height:100%;
  display: flex;
  justify-content: center;
}

.postsdisp{
  width:800px;
  height:100%;
  padding:0px 0px;               
  
}
@media screen and (max-width: 375px) {


.indexmain{
  width:100%;
  height: 100vh;
}

#indeximage{
  width:115px;
  height:113px;
}

.posts{
  width:100%;
  height:100%;
  display: flex;
  justify-content: center;
}

.postsdisp{
  width:100%;
  height:100%;
  padding:0px 2px;               
  
}

.slideproject{
        width:100%;
        height:250px;
        margin-top:10px;
        
        display:flex;
        justify-content: center;
        background: pink;
        padding:0px 0px;
        
      }

      .slider{
        width:350px;
        height:250px;
        border-radius: 0px;
        overflow:hidden;
        
      }
      .slides{
        width:500%;
        height:250px;
        display:flex;
      }



.manual-btn{

border: 2px solid #40D3DC;
padding:5px;
border-radius: 10px;
cursor:pointer;
transition: 1s;
}

.navigation-manuel {

position:absolute;
width:100%;
margin-top:-40px;
display: flex;
justify-content: center;


}
.navigation-auto{

position:absolute;
display:flex;
width:100%;
justify-content: center;
margin-top: 210px;
}

}
    </style>
</head>
<body>
  <div class="indexmain">

<div class="slideproject">

<div class="slider">
    <div class="slides">
  <input type="radio" name="radio-btn" id="radio1">
  <input type="radio" name="radio-btn" id="radio2">
  <input type="radio" name="radio-btn" id="radio3">
  <input type="radio" name="radio-btn" id="radio4">

  <div class="slide first">
    <div class="red">
    <img src="uploads/cape1.jpeg" alt="">
</div>
  </div >

  <div class="slide">
  
    <img src="uploads/cape2.jpeg" alt="">

  </div>

  <div class="slide">
  
    <img src="uploads/cape3.jpeg" alt="">

  </div>


 <div class="slide">
 
    <img src="uploads/cape4.jpeg" alt="">

  </div>

  <div class="navigation-auto">
    <div class="auto-btn1"></div>
    <div class="auto-btn2"></div>
    <div class="auto-btn3"></div>
    <div class="auto-btn4"></div>
  </div>

    </div>
    <div class="navigation-manuel">

    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
    </div>
</div>
</div>
<div class="posts">
  <div class="postsdisp">
   
</div>
  </div>
    <div>

    </div>
    <script>
      var counter  = 1;

      setInterval(function(){

        document.getElementById('radio' + counter).checked = true;
        counter++;

        if(counter > 4){
          counter = 1;
        }
      }, 4000);
    </script>
    </div>
</body>
</html>