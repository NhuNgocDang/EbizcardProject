<?php
include_once 'db_connect.php' ;
?>
<!DOCTYPE html >
<html>
<head>
   
<title>SEARCH PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}

@import 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto:300';



* { box-sizing: border-box; }

body {  overflow-x: hidden; }
.container {
    perspective: 800px;

    /* Styling */
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    letter-spacing: 4px;

    /* Center it */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.card {
    /* Styling */
    width: 525px;
    height: 300px;
    background: rgb(20,20,20);
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

    /* Card flipping effects */
    transform-style: preserve-3d;
    transition: 0.6s;
}
.side {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    /* Fix Chrome rendering bug */
    transform: rotate(0deg) translateZ(1px);
}

/* Flip the card on hover */
.container:hover .card,
.back {
    transform: rotateY(-180deg) translateZ(1px);
}

/* Front styling */
.front {
    /* Center the name + outline (almost) */
    line-height: 390px; /* Height - some (because visual center is a little higher than actual center) */
    text-align: center;
}
.logo {
    outline: 1px solid #19F6E8;
    display: inline-block;
    padding: 15px 40px;

    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-size: 1.4em;
    font-weight: normal;
    line-height: 32px;
    letter-spacing: 8px;
}

/* Back styling */
.back {
    background: #15CCC0;
    padding: 30px;
}
.name {
    color: #3B3B3B;
    margin-bottom: 0;
}
p {
    margin: 0.8em 0.8em;
}
.info {
    position: absolute;
    bottom: 30px;
    left: 30px;
    color: #3b3b3b;
}
.property {
    color: #fff;
}
.swiper-container{
    height: 420px;
}
/* Make semi-responsive */
@media (max-width:700px) {
    .card { transform: scale(.5); }
    .container:hover .card { transform: scale(.5) rotateY(-180deg) translateZ(1px); }
}

</style>
    <link rel="stylesheet" href="swiper.min.css" type="text/css">
    <script src="swiper.min.js" type="text/javascript"></script>
    <script src="swiper.js" type="text/javascript"></script>
</head>
<body id="body_bg">
    
    <div align="center">

    <h1 style="background-color:powderblue;">SEARCH PAGE</h1>
    <form>
        <input type="text" name="search" placeholder="Search..">
    </form>
    <form method="POST">
<div class="div2">
</div>


  
    <!--template ebiz card should go here-->
        
    </form>

    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
                //遍历展示数据库的信息
                $sql = "SELECT company,email,city ,location FROM members;" ;
                $result =mysqli_query($connection,$sql);
                $resultCheck =mysqli_num_rows($result);
                if($resultCheck>0){
                    while ($row=mysqli_fetch_array($result) ){
                        echo '
                            <div class="swiper-slide">
                                    <div class="container">
                                        <div class="card">
                                            <div class="front side">
                                                <h1 class="logo">'.$row['company'].'</h1>
                                            </div>
                                            <div class="back side">
                                                <h3 class="name">Zach Saucier</h3>
                                                <div>Front-end developer</div>
                                                <div class="info">
                                                    <p><span class="property">Email: </span>'.$row['email'].'</p>
                                                    <p><span class="property">City: </span>'.$row['city'].'</p>
                                                    <p><span class="property">Location: </span>'.$row['location'].'</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>
<?php mysqli_close($connection);?>
    <footer style="margin-top: 300px;">
		<p style="font-weight:bold">DevilDucks</p>
		<p>K2J 5W8 Ottawa - ON</p>
		<p><a href="">gurby1@yahoo.com</a></p>
		<p><a href="eBizcardearchwww.ebizcardearch.com">eBizcardearchwww.ebizcardearch.com</a></p>
        <p>&copy; Consultent Theme</p>
    </footer>
</body>
</html>