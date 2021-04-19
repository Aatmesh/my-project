

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gain</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./scss/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> -->
    <link rel="icon" href="images/favicon.png">
     <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
     <style>
     
.mainbox {
  /* background-color: #95c2de; */
  margin: auto;
  height: 600px;
  width: 600px;
  position: relative;
}

  .err {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 20%;
    top: 8%;
    -webkit-text-fill-color: transparent;
    background: -webkit-gradient(linear, left top, right top, from(#ef4136), to(#fbb040));
    background: linear-gradient(to right, #ef4136, #fbb040);
    -webkit-background-clip: text;
  }

.far {
  position: absolute;
  font-size: 8.5rem;
  left: 42%;
  top: 15%;
  color: #ffffff;
  -webkit-text-fill-color: transparent;
    background: -webkit-gradient(linear, left top, right top, from(#ef4136), to(#fbb040));
    background: linear-gradient(to right, #ef4136, #fbb040);
    -webkit-background-clip: text;
}

 .err2 {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 68%;
    top: 8%;
    -webkit-text-fill-color: transparent;
    background: -webkit-gradient(linear, left top, right top, from(#ef4136), to(#fbb040));
    background: linear-gradient(to right, #ef4136, #fbb040);
    -webkit-background-clip: text;
  }

.msg {
    text-align: center;
    font-size: 1.6rem;
    font-family: Roboto;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.55;
    letter-spacing: normal;
    color: #383838;
    position:absolute;
    left: 16%;
    top: 45%;
    width: 75%;
  }

  .msg p{
      text-align:center;
  }
  @media screen and (min-width: 320px) and (max-width: 767px) {

.mainbox {
  height: 100%;
  width: 100%;
  text-align: center;
}

.err {
  font-size: 9rem;
  left: 8%;
  top: 8%;

}

.far {
  font-size: 5.5rem;
  left: 35%;
  top: 17%;

}

.err2 {
  font-size: 9rem;
  left: 68%;
  top: 8%;

}

.msg {
  text-align: center;
  font-size: 1rem;

}
}
</style>
</head>


<body>
  <div class="mainbox">
    <div class="err">4</div>
    <i class="far fa-question-circle fa-spin"></i>
    <div class="err2">4</div>
    <div class="msg">Page not found<p>Let's go <a href="index.php">home</a> and try from there.</p></div>
      </div>
</body>

</html>


