<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Valider</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat%7CPacifico" rel="stylesheet">

</head>

<body>
<div class="header">
    <p>Salut !</h3>
  </div>
  <div class="container">
    <div class="email_sec">
      <div>

        <button id="check-id">Message enregistré avec succés - Merci - pour votre visite</button>
        <a href="index.php"><button id="check-id"><i class="fas fa-chevron-right"></i></button></a>
      </div>
      <div class="error">
        <span></span>
      </div>
    </div>
  </div>

</body>

</html>


<style>
body,
html {
  margin: 0 !important;
  position: relative;
}

.header {
  position: relative;
  padding: 0;
  margin: 0;
  top: 0;
  width: 100%;
  height: 20vh;
}

.header p {
  margin: 0;
  font-family: "Pacifico", cursive;
  font-size: 2em;
  height: auto;
  width: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color: #4c5b5c;
}

.container {
  background: #f25959;
  font-family: "Montserrat", sans-serif;
  margin: 0;
  position: relative;
  bottom: 0;
}

.container div {
  height: 80vh;
  width: calc(100vw - 18px);
  position: relative;
}

.container div div:nth-child(1) {
  height: auto;
  width: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-animation: shadow-pulse 1s infinite;
  animation: shadow-pulse 1s infinite;
  border-radius: 10px;
}
@-webkit-keyframes shadow-pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0px rgba(255, 255, 255, 0.2);
    box-shadow: 0 0 0 0px rgba(255, 255, 255, 0.2);
  }
  100% {
    -webkit-box-shadow: 0 0 0 35px rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 35px rgba(255, 255, 255, 0);
  }
}

@keyframes shadow-pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0px rgba(255, 255, 255, 0.2);
    box-shadow: 0 0 0 0px rgba(255, 255, 255, 0.2);
  }
  100% {
    -webkit-box-shadow: 0 0 0 35px rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 35px rgba(255, 255, 255, 0);
  }
}

.container div div:nth-child(1) input {
  background: #fff;
  color: #4c5b5c;
  border-color: transparent;
  border-radius: 10px 0 0 10px;
  padding: 15px;
  font-family: "Montserrat", sans-serif;
  margin: 0;
}

.container div div:nth-child(1) button {
  background: #4c5b5c;
  color: #fff;
  border-color: transparent;
  border-radius: 0 10px 10px 0;
  padding: 40px;
  cursor: pointer;
  margin: 0;
  font-size: 22px;
}

.container div div:nth-child(1) p {
  background: #fff;
  color: #4c5b5c;
  border-color: transparent;
  border-radius: 10px;
  padding: 15px;
  font-family: "Montserrat", sans-serif;
  margin: 0;
  font-size: 1.5em;
  cursor: pointer;
}

.container div div:nth-child(1) p i {
  color: #53dd6c !important;
}

.container div div:nth-child(2) {
  display: none;
  height: auto;
  width: auto;
  position: absolute;
  top: 60%;
  left: 50%;
  -webkit-transform: translate(-50%, -60%);
  transform: translate(-50%, -60%);
}

.container div div:nth-child(2) span {
  color: #fff;
}

.btn-success {
  background: #53dd6c !important;
}

.btn-error {
  background: #ab2b35 !important;
}

.hidden {
  display: none;
</style>


