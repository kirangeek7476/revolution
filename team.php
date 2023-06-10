<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Our Team | Revolution.org</title>
    <link rel="icon" href="revicon.ico" type="image/icon type">
    <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: rgb(45, 160, 93);
      overflow-x: hidden;
      overflow-y: scroll;
    }

    header {
      background-color: #070b39;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav ul li {
      margin-right: 20px;
    }

    nav ul li:last-child {
      margin-right: 0;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
    }

    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      position: relative;
      top: 45px;
    }

    section {
      margin-bottom: 40px;
    }

    section:last-child {
      margin-bottom: 0;
    }

    h1, h2 {
      text-align: center;
    }

    footer {
      background-color: #080734;
      color: #fff;
      text-align: center;
      padding: 20px;
      position: relative;
      bottom: -180px;
    }

    footer p {
      margin: 0;
    }

    .team-member {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      justify-content: center;
    }

    .team-member img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      margin-right: 20px;
    }
    </style>
  </head>
  <body>
    <header>
      <h1>Our Team | Revolution.org</h1>
      <nav>
        <ul>
        <ul>
          <li><a href="webpage2.php">Home</a></li>
          <li><a href="mypet.php">Petitions</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        </ul>
      </nav>
    </header>
    <main>
      <section>
        <h2>Meet Our Team</h2>
        <div class="team-member">
          <img src="Team/i1.jpg" alt="Team Member 1">
          <div>
            <h3>B Kiran | 320126510008</h3>
            <p>Designer and Backend</p>
          </div>
        </div>
        <div class="team-member">
          <img src="Team/i2.jpg" alt="Team Member 2">
          <div>
            <h3>K Sruthi | 320126510031</h3>
            <p>Creative Designer and Frontend</p>
          </div>
        </div>
        <div class="team-member">
          <img src="Team/i3.jpg" alt="Team Member 3">
          <div>
            <h3>B Ajay | 320126510006</h3>
            <p>Data Collector</p>
          </div>
        </div>
        <div class="team-member">
          <img src="Team/i4.jpg" alt="Team Member 4">
          <div>
            <h3>Manoj S | 320126510029</h3>
            <p>Designer</p>
          </div>
        </div>
        <div class="team-member">
          <img src="Team/i5.jpg" alt="Team Member 5">
          <div>
            <h3>A Shashank | 320126510001</h3>
            <p>Designer</p>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 About Us. All rights reserved.</p>
    </footer>
  </body>
</html>
