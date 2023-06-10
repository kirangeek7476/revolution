<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Contact Us | Revolution.org</title>
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

    .contact-form {
      display: flex;
      flex-direction: column;
      max-width: 500px;
      margin: 0 auto;
    }

    .contact-form label {
      margin-bottom: 10px;
      font-weight: bold;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 10px;
      margin-bottom: 20px;
      box-shadow: 0.21px 0.21px 5px black;
    }

    .contact-form button {
      padding: 10px 20px;
      background-color: #070b39;
      color: #fff;
      border: none;
      cursor: pointer;
    }
    </style>
  </head>
  <body>
    <header>
      <h1>Contact Us | Revolution.org</h1>
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
        <h2>Get in Touch</h2>
        <form class="contact-form" action="#" method="POST">
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Your Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>

          <button type="submit">Send Message</button>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 About Us. All rights reserved.</p>
    </footer>
  </body>
</html>
