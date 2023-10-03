<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/welcome.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
      <a href="#" id="logo-link">
      <img src="assets/roel.p.jpg" alt="Logo" class="header-image" id="logo">
      </a>
        <nav>
            <ul>
                
                <li><a href="welcome.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="aboutMe.php">About Me</a></li>
            </ul>
        </nav>
    </header>

    <div id="image-modal" class="modal">
        <span class="close" id="close-modal">&times;</span>
        <img src="assets/roel.p.jpg" alt="Logo" class="modal-content">
    </div>

    <div class="content">
        <h1>Welcome to My Dashboard</h1>
        <p>This is the home page of my dashboard.</p>

       

    </div>

 
    <script>
        const logoLink = document.getElementById('logo-link');
        const logo = document.getElementById('logo');
        const imageModal = document.getElementById('image-modal');
        const closeModal = document.getElementById('close-modal');

        function toggleImageModal() {
            imageModal.style.display = imageModal.style.display === 'block' ? 'none' : 'block';
        }

 
        function closeImageModal() {
            imageModal.style.display = 'none';
        }

        // Add click event listeners to the logo and close button
        logoLink.addEventListener('click', toggleImageModal);
        closeModal.addEventListener('click', closeImageModal);
    </script>
</body>
</html>
