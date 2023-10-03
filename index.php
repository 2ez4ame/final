<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script defer src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <title></title>
    </head>
    <style>

    #particles-js {
      position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 
  background: black;

    }
    </style>
    <body>
    <div id="particles-js"></div>
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
       
        
        <div class="card my-5 ">
          <form method="POST" action="form_process.php" class="card-body cardbody-color p-lg-5 mb-0">

            <div class="text-center">
              <img src="assets/roel.p.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
  <div class="flex-container">
  <div class="mb-3">
              <input class="user-input" name="username" type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Username">
            </div>
            <div class="mb-3">
              <input class="pass-input" name="pass" type="password" class="form-control" id="password" placeholder="Password">
            </div>
  </div>
 
            <div class="text-center"><button type="submit" class="login-btn">Login</button></div>
            <div method="POST" action="register.php" id="emailHelp" class="form-text text-center mb-5 text-white mt-4">Not
              Registered? <a href="register.php" class="text-rgb(24, 119, 242) fw-bold"> Create an
                Account</a>
            </div>
            <div class="in-footer-flex">
              <a href="https://www.facebook.com/bibi.fernandez.9887"> <img class="icon" src="assets/fb.icon.png" alt="fb icon"></a>
              <a href="https://www.instagram.com/bibiqueuexs/?hl=en"><img class="icon" src="assets/insta.png" alt="insta icon"></a>
            

          </div>
          </form>
 
        </div>

      </div>
    </div>
  </div>
  <div>
   
  </div>

  <script>
  particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true,
  "config_demo": {
    "hide_card": false,
    "background_color": "#b61924",
    "background_image": "",
    "background_position": "50% 50%",
    "background_repeat": "no-repeat",
    "background_size": "cover"
  }
})
  </script>

  
    </body>
</html>