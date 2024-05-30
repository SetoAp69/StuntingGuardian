<style>
   .top-nav {
    background-color: #FAE301;
    width: 100%;
    height: 35px;
    padding: 10px;
    text-align: left;
    margin-left: 0;
    display: flex;
    flex-direction: row;
    align-items: center; /* Align items vertically */
}

/* Style for the top navigation content */
.top-nav-content {
    color: #DB0101;
    margin-left: 20px; /* Adjusted to reduce the gap */
    font-family: 'Balsamiq Sans', cursive;
    margin-top: 0; /* Aligns text properly */
    font-size: 20px;
    font-weight: bold;
}

.body {
    width: 100%;
    margin: 0; /* Remove any default margins */
    padding: 0; /* Remove any default padding */
}

.active {
    background-color: white;
    padding: 5px; /* Consolidate padding properties */
    height: 22px;
    border-radius: 12px;
}

.heading-1, .heading-2 {
    font-family: 'Balsamiq Sans', cursive;
    text-align: center;
    width: 100%;
    color: #DB0101;
}

.heading-1 {
    font-size: 70px;
    font-weight: bold;
    margin-top: 40px;
}

.heading-2 {
    font-size: 50px;
    font-weight: bold;
    margin-top: 50px;
}

.img-big {
    width: 25%;
    margin: 0 30px;
}

.image-container-big {
    margin-top: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.box-container {
    margin-top: 70px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
    text-align: center;
}
.box-container-2 {
    margin-top: 70px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
    text-align: center;
}

.box-content {
    background-color: #FAE301;
    width: 200px;
    height: 300px;
    margin: 0 15px;
    padding: 15px;
    border-radius: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.box-content-2 {
    background-color: #FAE301;
    width: 200px;
    height: 350px;
    margin: 0 15px;
    padding: 15px;
    border-radius: 50px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
}

.icon {
    height: 70px;
    width: 70px;
    margin-bottom: 10px; 
}

.highlighted-content {
    background-color: white;
    font-family: 'Balsamiq Sans', cursive;
    padding: 5px 15px;
    border-radius: 10px;
    font-weight: bolder;
    margin: 5px 0 8px;
}

.content {
    font-family: 'Balsamiq Sans', cursive;
}

.heading-3 {
    font-family: 'Balsamiq Sans', cursive;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    width: 100%;
    margin-bottom: 8px;
    color: #DB0101;
}
.footer-container{
    width: 100%;
    height: 300px;
    background-color: #EAEAEA;
    margin-top: 100px;
    flex-shrink: 0;
    padding-top: 70px;
}
.footer-container-child{
    width: 500px;
   
    height: 74px;
    margin-left: 70px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: row;
    
}
.footer-container-child-content{
    
    width:25% ;
    height: 100%;
    align-items: center;
    display: flex;
    flex-direction: row;

    
    

}
.heading-4{
    font-family: 'Balsamiq Sans', cursive;
    font-weight: bold;
    size: 25px;

}
.icon-container-small{
    margin-left: 70px;
    height: 50px;
    width: 250px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: row;
}
.icon-container-content{
    width: 20%;
    height: 100%;
    margin-left: 5px;
    
}
</style>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

    </head>
    <body class="body">
        <div class="top-nav">
            <img class="image"></img>
            <a class="top-nav-content active">Home</a>
            <a class="top-nav-content">Recipe</a>
            <a class="top-nav-content">Our Products</a>

        </div>

        <div class="heading-1"> Hi Parents! </div>

        <div class="image-container-big">
            <img class="img-big" src="Image/image.png" alt="">
            <img class="img-big" src="Image/image.png" alt="">
            <img class="img-big" src="Image/image.png" alt="">


        </div>

        <div class="heading-2"> Why Stunting-Guardian? </div>

        <div class="box-container">
            <div class="box-content">
                <img class="icon" src="image/shield.svg" alt="">
                <div class="heading-3">Protecting</div>
                <div class="content">Shielding through and thorough body</div>
            </div>
            <div class="box-content">
                <img class="icon" src="image/brain.svg" alt="">

                <div class="heading-3">Developing</div>
                <div class="content">Nutrients plus Vitamins
equals Optimal Health</div>
            </div>
            <div class="box-content">
                 <img class="icon" src="image/smile.svg" alt="">

                <div class="heading-3">Boosting</div>
                <div class="content">Good Food Good Mood</div>
            </div>
        </div>
        <div class="heading-2">Subscription</div>
        <div class="box-container">
            <div class="box-content-2">
                
            <img src="image/giraffe.svg" alt="" class="icon">
                
                <div class="heading-3">Giraffe Package</div>
                <div class="highlighted-content">IDR 150k per month</div>
                <div class="content">- Lunch</div>
                <div class="content">- Dinner</div>

                <div class="content">- 2 times Snacks</div>

                <div class="content">- 1 Cup of Milk</div>
                
            </div>
            <div class="box-content-2">
                <img src="image/koala.svg" alt="" class="icon">
                
                <div class="heading-3">Koala Package</div>
                <div class="highlighted-content">IDR 250k per month</div>
                <div class="content">Lunch</div>
                <div class="content">Dinner</div>
                <div class="content">2 Snacks</div>
                <div class="content">1 Cup of Milk</div>
                <div class="content">1 buckets of Fruits</div>


                
            </div>
            <div class="box-content-2">
                
            <img src="image/panda.svg" alt="" class="icon">
                
                <div class="heading-3">Giraffe Package</div>
    
                <div class="highlighted-content">IDR 300k per month</div>
                <div class="content">Breakfast</div>
                <div class="content">Lunch</div>
                <div class="content">Dinner</div>
                <div class="content">2 Snacks</div>
                <div class="content">2 Cup of Milk</div>
                <div class="content">2 buckets of Fruits</div>
                
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-container-child">
                <div class="footer-container-child-content">
                    <img style="width:100px;" src="Image/logo.png" alt="logo">
                </div>
                <div class="footer-container-child-content">
                    <div class="heading-4">About Us</div>
                </div>

                <div class="footer-container-child-content">
                    <div class="heading-4">FAQ</div>
                </div><div class="footer-container-child-content">
                    <div class="heading-4">Locations</div>
                </div>
                
            </div>

            

            <div class="heading-3" style="color:black;margin-top:50px;text-align:left;margin-left:70px;">Contact US</div>

            
            <div class="icon-container-small">
                <div class="icon-container-content">
                    <img src="Image/instagram.png" style="height:40px;width:40px" alt="">
                </div>
                <div class="icon-container-content">
                    <img src="Image/twitter.png" style="height:40px;width:40px" alt="">
                </div>
                <div class="icon-container-content">
                    <img src="Image/tiktok.svg" style="height:40px;width:40px" alt="">
                </div>
                <div class="icon-container-content">
                    <img src="Image/youtube.svg" style="height:40px;width:40px" alt="">
                </div>
                
                <div class="icon-container-content">
                    <img src="Image/phone.svg" style="height:40px;width:40px" alt="">
                </div>
                <div class="icon-container-content">
                    <img src="Image/mail.svg" style="height:40px;width:40px" alt="">
                </div>

            </div>
        </div>


    </body>

    <div>

    </div>
</html>

