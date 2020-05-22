<?php

include 'connect_db.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chat me now! | Meet friends </title>
        <link rel="shortcut icon" type="icon" href="data:image/jpeg;base64,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">
        <meta name="description" content="Are you bored? need someone to talk?, chatmenow is a social network designed to connect people around you">
        <meta name="keywords" content="Web chat, Social Network, Online Sharing">
        <meta name="author" content="Allen Charls Casul">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@800&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="homepage.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="logo"> Just talk & listen<i class='far fa-comments' style='font-size:36px'></i></div>
            <nav class="nav-bar">
                <ul>
                    <li><a class="active-bar" href="documentation.php">Read more</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>
            <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </header>
               <br><br><br>
               <center><a class="discover" href="message.php"><p>Discover new friends Online!<br><br>You are anonymous it's okay<br>not to be so honest.</p></a></center>
               <div class="messages_center">    
               </div>
               <center>
               <input type="text" id="name" class="form-control" placeholder="Change Name" value="<?php if (isset($_SESSION['name'])) { echo $_SESSION['name']; } ?>">
	           <button class="btn btn-warning btn-lg" id="change_name">Change Name / Identity</button> 
               <div>
                    <textarea style="overflow-y: auto;" class="form-control" name="message" id="message" placeholder="Start conversation...." required autocomplete="off"></textarea>
               </div>
               <div>            
                  <button  id="send" class="btn btn-primary btn-lg"><i class="fa fa-paper-plane-o" aria-hidden="true" style="font-size: 25px;"></i></button>
               </div>        
       </center>
       <script src="jquery.min.js"></script>
       <script src="main.js"></script>
       <footer class="main-footer">
           <p>Copyright &copy; Charls Allen Casul 2020</p>
           <a class="footer" href="user_condition.php">Terms of use policy</a>
           <a class="footer" href="services.php">Services</a>
           <a class="footer" href="how.php">How this app works?</a>
       </footer>
    </body>
    <style type="text/css">
      body {
  background-color: #fafafa;
  font-family: sans-serif;
  margin: 0;
  padding: 0;

}

.header {
  background: #9c8181;
  height: 45px;
  width: 100%;
  box-shadow: 0px 2px 0 #dbdbdb; 
}

.homepage {
  color: #5f6875;
  text-decoration: none;
}

h1 {
  padding-left: 30px;
  font-family: 'Baloo Tammudu 2', cursive;
  color: #5f6875; 
  font-size: 30px;
}

header {
  position: fixed;
  background-attachment: fixed;
  position: absolute;
  top: 0;
  left: 0;
  padding: 0 100px;
  width: 100%;
  background: #f0f0f0;
  box-sizing: border-box;
}

header .logo {
  color: #878787;
  height: 50px;
  line-height: 50px;
  font-size: 24px;
  float: left;
  font-weight: bold;
}

.account {
  cursor: pointer;
  padding: 0 20px;
  font-family: sans-serif;
  border: none;
  outline: none;
  background: #fafafa;
  color: #5f6875;
  font-size: 16px;
  line-height: 50px;
}

.account:hover {
  background: #5f6875;
  color: #fff;
  transition: .5s;
}

.mood {
  cursor: pointer;
  padding: 0 15px;
  font-family: sans-serif;
  border: none;
  outline: none;
  background: #fafafa;
  color: #bababa;
  font-size: 15px;
  line-height: 50px;
}

.mood:hover {
  background: #fafafa;
  color: #707070;
  transition: .5s;
}




header nav {
  float: right;
}

header nav ul {
  padding: 0;
  margin: 0;
  display: flex;
}

header nav ul li {
    list-style: none;
}

header nav ul li a {
  height: 50px;
  line-height: 50px;
  text-decoration: none;
  padding: 0 20px;
  display: block;
  color: #878787;
}

header nav ul li a:hover,
header nav ul li a.active-bar {
  background: #878787;
  color: #fff;
  transition: .5s;
}

.menu-toggle {
  float: right;
  font-size: 24px;
  line-height: 50px;
  cursor: pointer;
  display: none;
}

@media only screen and (min-width: 300px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 305px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 310px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 313px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 315px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 318px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 321px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 324px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 327px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 329px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 331px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 334px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 337px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 340px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 343px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 346px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 349px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 352px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 355px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 358px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}


@media only screen and (min-width: 360px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: auto;
    width: 340px;
    margin: 0 auto;
    

  }

  .discover {
    font-size: 15px;
    font-family: 'Inconsolata', monospace;
    color: #00e613;
    text-decoration: none;

    
  }

  p {
    color: gray;
  }
  
  #name {
    margin-top: 10px;
    width: 326px;
    padding: 0px;
    border-radius: 2px;
    outline: none;
    padding-left: 10px;
    font-family: arial;
  }
  #change_name {
    width: 340px;
    height: 36px;
    border-radius: 2px;
    outline: none;
    border: none;
    color: white;
    background: #878787;
    font-family: 'Inconsolata', monospace;

  }
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 319px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  
    }
    .btn {
    width: 340px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 0px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  .h5 {
    font-size: 14px;
    color: rgb(133, 133, 133);
    border-radius: 50px;
    margin: 5px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
    margin-top: 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  .main-footer {
    text-align: center;
    font-size: 12px;
  }

  .footer {
    padding: 10px;
  }

  .footer:hover {
    text-decoration: none;
    color: black;
    transition: .5s;
  }
  
  

}

@media only screen and (min-width: 687px){
    .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: scroll;
    width: 680px;
    height: 415px;
    margin: auto;
  }
  

}


@media only screen and (min-width: 735px){
    .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: scroll;
    width: 680px;
    height: 415px;
    margin: auto;
  }
  

}


@media only screen and (min-width: 738px){
    .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: scroll;
    width: 680px;
    height: 415px;
    margin: auto;
  }
  

}


@media only screen and (min-width: 765px){
    .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: scroll;
    width: 680px;
    height: 415px;
    margin: auto;
  }
  

}


@media only screen and (min-width: 768px){
    .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: scroll;
    width: 680px;
    height: 415px;
    margin: auto;
  }
  

}

@media (max-width: 991px) {
  header {
    padding: 0 20px;
  }
  .menu-toggle {
    display: block;
    color: #878787;
  }
  header nav {
    position: absolute;
    width: 100%;
    height: calc(100vh - 50px);
    background: #878787;
    top: 50px;
    left: -100%;
    transition: 0.5s;
      color: #fafafa;
      outline: none;
  }
  header nav.active {
    left: 0px;
  }
  header nav ul {
    display: block;
    text-align: center;
    outline: none;
  }
  header nav ul li a {
    color: white;
    outline: none;
  }
  header nav ul li a:hover,
  header nav ul li a.active-bar {
  background: #fafafa;
  color: #878787;
  transition: .5s;
  outline: none;
  }

}

@media only screen and (min-width: 1366px){
  .messages_center {
    background: white;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0px 10px 15px #cfcfcf;
    overflow-y: scroll;
    width: 1300px;
    height: 415px;
    margin: auto;
  }
  
  #name {
    width: 295px;
    height: 15px;
    border-radius: 2px;
  }
  
  #change_name {
    width: 316px;
    height: 36px;
    border-radius: 2px;
  }
  
  .h5 {
    font-size: 13px;
    letter-spacing: 1px;
    background-color: #56b4d131;
    color: rgb(133, 133, 133);
    padding: 11px 30px;
    border-radius: 50px;
    margin: 0 10px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  .down {
    padding: 0 10px;
  }
  
  .lead {
    font-size: 11px;
    color: gray;
    font-family: 'Inconsolata', monospace;
  }
  
  .text-secondary {
    font-size: 11px;
    color: rgb(201, 201, 201);
    
  }
  
  .form-control {
    font-family: sans-serif;
    color: gray;
    width: 1280px;
    height: 40px;
    padding: 10px;
    margin-top: 5px;
    outline: none;
    border: none;
    background: #fcfcfcfc;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    font-size: 13px;
    font-family: 'Maven Pro', sans-serif;
  }
  
  
  .btn {
    width: 1300px;
    height: 50px;
    outline: none;
    border: none;
    cursor: pointer;
    background: #878787;
    color: #fff;
    border-radius: 3px;
    font-family: sans-serif;
    font-size: 14px;
  }
  
  .btn:hover {
    background: #636363;
    transition: .5s;
  
  }
  
  .name {
    border: none;
    outline: none;
    background: #fcfcfcfc;
    width: 1000px;
    border: 1px solid #d4d4d4;
    border-radius: 3px;
    margin-top: 2px;
    padding: 10px;
    height: 15px;
    color: gray;
    font-family: sans-serif;
  }


}




    </style>
    </html>