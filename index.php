<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ram Kuhite - Portfolio</title>
    <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>
<body>

    <header>
        <h1>Ram Kuhite</h1>
        <p><p id="highlight">IT & Commerce Enthusiast</p></p>passionate
        <span id="element"></span>
        </p> 
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-text">
        <h2>Welcome to My Portfolio</h2>
        <p>I am passionate about IT and commerce, with skills in programming, web design, and business integration.</p>
            <a href="contact.php" class="btn">Contact</a>
            <div class="socials">
            <a href="https://www.linkedin.com/in/ramkuhite22?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/ramkuhite22"><i class="fab fa-github"></i></a>
            </div>
             </div>    
             <div class="hero-img"><img src="your-photo.jpeg" alt="Ram Kuhite"></div>
    </section>

    <section id="about">
        <h2>About Me</h2>
        <p><strong>B.Com (Computer Application)</strong> - R.B. College, RTMNU (2026)</p>
        <p><strong>HSC (Computer Science)</strong> - Nagpur Board (2023) - 60%</p>
        <p><strong>SSC (Semi English)</strong> - Nagpur Board (2021) - 76%</p>
        
        <h3>Skills</h3>
        <ul>
            <li>Programming: C, C++</li>
            <li>Web Design: HTML, CSS, JavaScript</li>
            <li>Business Communication</li>
            <li>Time Management & Problem Solving</li>
        </ul>

        <h3>Certifications</h3>
        <ul>
            <li>MSCIT (75%)</li>
            <li>Basics of Photoshop</li>
            <li>Web Design with HTML</li>
        </ul>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <ul>
            <li><a href="guessing number.php">Number Guessing Game (PHP, CSS)</a></li>
            <li><a href="todo.php">To-Do List Application (PHP, CSS)</a></li>
            <li><a href="calculator.php">Multi-tool Calculator (PHP, CSS)</a></li>
        </ul>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <section id="assets">
    <h2>Assets</h2>

    <!-- Resume PDF with direct download -->
    <div class="asset-item">
        <h4>Resume</h4>
        <a href="my-resume.pdf" download="my-resume.pdf">
            <img src="resume.png" alt="Resume PDF" width="60"><br>
            Click to Download Resume
        </a>
    </div>

    <!-- Internship -->
    <div class="asset-item">
        <h4>My internships</h4>
        <a href="my-internship.pdf" download="my-internship.pdf">
            <img src="certificate.png" alt="Certificate" width="60"><br>
            Click to Download Certificate
        </a>
    </div>
</section>


    <footer>
        <p>© 2025 Ram Kuhite</p>
    </footer>

    <script>
var typed = new Typed('#element', {
  strings: ['Web-Developer','Digital Marketer','Computer Assistance'],
  typeSpeed: 50,
});
</script>

</body>
</html>
