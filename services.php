<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <title>Services | Revolution.org</title>
    <link rel="icon" href="revicon.ico" type="image/icon type">
    <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48;
  scale:2.8;
}
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

    .service {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 40px;
    }

    .service-image {
      max-width: 300px;
      height: auto;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .service-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .service-description {
      text-align: center;
    }
    </style>
  </head>
  <body>
    <header>
      <h1>Services | Revolution.org</h1>
      <nav>
        <ul>
          <li><a href="webpage2.php">Home</a></li>
          <li><a href="mypet.php">Petitions</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section>
        <div class="service">
        <span class="material-symbols-outlined">
publish
</span>
          <h2 class="service-title">Petition Publication</h2>
          <p class="service-description">Publish your petition on our platform to reach a wider audience and make a meaningful impact on the causes that matter to you.</p>
        </div>
        <div class="service">
        <span class="material-symbols-outlined">
verified
</span>
          <h2 class="service-title">Petition Promotion</h2>
          <p class="service-description">We provide effective promotion strategies to boost the visibility and support for your petition, increasing the chances of achieving your goals.</p>
        </div>
        <div class="service">
        <span class="material-symbols-outlined">
manage_accounts
</span>
          <h2 class="service-title">Petition Management</h2>
          <p class="service-description">Our experienced team will assist you in managing your petition, offering guidance, and ensuring its effectiveness throughout the campaign.</p>
        </div>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Revolution.org. All rights reserved.</p>
    </footer>
  </body>
</html>
