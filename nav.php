
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">


    <div class="container">
      <img src="img/web.png" alt="HTML5 Icon" style="width:128px;height:128px;">
      <a class="navbar-brand js-scroll" href="index.php">AbhiShek</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">My Certificate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
          
          <li class="nav-item">
        <button  onclick="myFunction()">Dark</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<style>
  body {
 
  background-color: white;
  
  font-size: 17px;
}


.dark-mode {
  background-color: black;
  color: ;
}


 </style> 

  <script>
 function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
 </script> 