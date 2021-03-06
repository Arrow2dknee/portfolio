<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./resources/images/favicon.ico" />
    <!-- above meta tag is required when writing responsive design -->
    <title>Antony Roshan | Portfolio of Antony</title>

    <link
      href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="./vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./vendors/css/grid.css" />
    <link rel="stylesheet" href="./vendors/css/animate.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400"
      rel="stylesheet"
    />

    <link rel="stylesheet" type="text/css" href="./resources/css/styles.css" />
    <link rel="stylesheet" href="./resources/css/queries.css" />
  </head>

  <body>
    <header id="header">
      <nav>
        <div class="row">
          <img
            class="logo"
            src="./resources/images/avataaars-2-min.png"
            alt="avatar of antony roshan"
          />
          <a href="#header"
            ><img
              class="logo-blk"
              src="./resources/images/avataaars-min.png"
              alt="avatar of antony-small"
          /></a>
          <ul class="main-nav js--main-nav">
            <li><a href="#features">About Me</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio-section">Portfolio</a></li>
            <li><a href="#contactMe">Contact Me</a></li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon">
            <ion-icon name="menu" class="responsive-nav"></ion-icon>
          </a>
          <!-- it is good practice to have navigation items in the form of a list
                    an unordered list -->
                    
        </div>
      </nav>
      <div class="hero-text-box">
        <h1 class="name__title">I'm Antony Roshan</h1>
        <p class="name__subtitle">An <span>aspiring</span> web developer</p>
    
        <a class="btn btn-full" href="#portfolio-section">view my work</a>
        <a class="btn btn-ghost" href="#features">explore more</a>
        <!-- we are including class names starting with 'js-' to indicate that these classes
                are used for jQuery -->
      </div>
    </header>

    <section class="features-section js-features-section" id="features">
      <div class="row">
        <h2>Hi! I'm Antony. Nice to meet you.</h2>
        <p class="long-copy">
          I am a self-taught, work-in-progress <strong>web developer</strong> based in Chennai
          TamilNadu, India. I was introduced to programming in C and C++ back in school. Love the concept of pointers and miss it sorely. All through my professional career spanning a little over two years, I have been associated with <em>The Web</em> for the most part. After a brief hiatus, I am now looking to break into the professional world of software and <strong>web development</strong>.<br />
        </p>
      </div>
      <!-- animation for waypoint 1 -->
      <div class="row js-wpt-1">
        <div class="col span-1-of-4 box">
          <ion-icon class="feature-icons" name="infinite"></ion-icon>
          <h3 class="about-me-title">Creative Energy</h3>
          <p>
            I am a perfectionist and I go about doing anything in life with a certain degree of zeal and flair.
          </p>
        </div>

        <div class="col span-1-of-4 box">
          <ion-icon class="feature-icons" name="stopwatch"></ion-icon>
          <h3 class="about-me-title">Problem Solving</h3>
          <p>
            I love a challenge. It brings out the best in me. When faced with a problem, I put all of my cognitive resources into play and try to solve the challenge with the skills I have acquired and if that doesn't work, I don't hesitate to ask for help.
          </p>
        </div>

        <div class="col span-1-of-4 box">
            <ion-icon class="feature-icons" name="people"></ion-icon>
          <h3 class="about-me-title">Communication</h3>
          <p>
            I understand the importance of communication and the role it plays especially in software development. My past experience has involved having continuous interaction with clients for gathering and implementing their business requirements.
          </p>
        </div>

        <div class="col span-1-of-4 box">
          <ion-icon class="feature-icons" name="school"></ion-icon>
          <h3 class="about-me-title">Lifelong Learner</h3>
          <p>
              I stand for lifelong learning and what that means to me is,
              <span class="quote"
                >“an ongoing, voluntary and self-motivated pursuit of
                knowledge”.</span
              >
          </p>
        </div>
      </div>
    </section>

    <section class="quotes-section">
      <div class="row">
        <blockquote>
          I am always doing that which I cannot do, in order that I may learn
          how to do it. ~ Pablo Picasso
        </blockquote>
      </div>
    </section>

    <section id="skills">
      <div class="row">
        <h2>Skills</h2>
      </div>
      <table class="row skill-table">
        <tr>
          <td>
            <table class="skill-col-1">
              <tr class="skill-row">
                <td>HTML 5</td>
                <td>⭐⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>CSS 3</td>
                <td>⭐⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>JavaScript</td>
                <td>⭐⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>ReactJS</td>
                <td>⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>Algorithms and Data Structures</td>
                <td>⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>jQuery</td>
                <td>⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>C</td>
                <td>⭐⭐⭐</td>
              </tr>
              
            </table>
          </td>
          <td>
            <table class="skill-col-2">
                <tr class="skill-row">
                    <td>Java</td>
                    <td>⭐⭐⭐</td>
                  </tr>
              <tr class="skill-row">
                <td>Command-Line Interface</td>
                <td>⭐⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>NPM</td>
                <td>⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>Git</td>
                <td>⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>Babel and Webpack</td>
                <td>⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>IIS 7 Web Server</td>
                <td>⭐⭐⭐</td>
              </tr>
              <tr class="skill-row">
                <td>VMware</td>
                <td>⭐⭐⭐</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </section>

    <section id="portfolio-section">
      <div class="row">
        <h2>Projects</h2>
      </div>
      <ul class="flex-container tier1">
        <li>
          <a href="http://game.hangman-app.surge.sh/" target="_blank">
            <figure>
              <img
                src="./resources/images/hangman-min.png"
                title="Hangman game app"
                alt="player playing hangman game"
              />
            </figure>
          </a>
        </li>
        <li>
          <a href="http://notetaking.surge.sh/" target="_blank">
            <figure>
              <img
                src="./resources/images/notes-min.png"
                title="Notetaking app"
                alt="take notes using notes app"
              />
            </figure>
          </a>
        </li>
        <li>
          <a href="http://todo-manager.surge.sh/" target="_blank">
            <figure>
              <img
                src="./resources/images/todo-app-min.png"
                title="Todolist app"
                alt="a list of todo's"
              />
            </figure>
          </a>
        </li>
      </ul>

      <ul class="flex-container">
        <li>
          <a href="http://what-is-the-budget.surge.sh/" target="_blank">
            <figure>
              <img
                src="./resources/images/budget-min.png"
                title="Budget calculator app"
                alt="calculate your budget using budget calculator app"
              />
            </figure>
          </a>
        </li>
        <li>
          <a href="http://simon-the-game.surge.sh/" target="_blank">
            <figure>
              <img
                src="./resources/images/simon-min.png"
                title="Simon the game"
                alt="player playing simon game"
              />
            </figure>
          </a>
        </li>
        <li>
          <a href="http://ba-dum-tss.surge.sh/" target="_blank">
            <figure>
              <img
                src="./resources/images/drum-kit-min.png"
                title="Drum-kit app"
                alt="a set of drums on the screen"
              />
            </figure>
          </a>
        </li>
      </ul>
    </section>

    <section class="quotes-section">
      <div class="row">
        <blockquote>
          Nothing gives me the kicks like building a concept from an idea blip
          to a fully functional system!
        </blockquote>
      </div>
    </section>

    <section id="contactMe" class="contact-form-section">
      <div class="form-box" id="form">
        <div class="row">
          <h2 class="contact__header">I would love to hear from you !</h2>
        </div>
        <div class="row form-tier">
          <form action="mailer.php" method="POST" class="contact-form">
            
          <div class="row">
              
              <?php

                if($_GET["success"] == 1) {
                  echo "<div class=\"form-message success\">Thank you! Your message has been sent.</div>";
                }
                if($_GET["success"] == -1) {
                  echo "<div class=\"form-message error\">Something went wrong. Please try again.</div>";
                }
              ?>
          </div>
              

            <div class="row">
              <div class="col span-1-of-3">
                <label for="username">Name</label>
              </div>
              <div class="col span-2-of-3">
                <input
                  id="username"
                  type="text"
                  name="username"
                  placeholder="Enter your name"
                  required
                />
              </div>
            </div>

            <div class="row">
              <div class="col span-1-of-3">
                <label for="useremail">Email</label>
              </div>
              <div class="col span-2-of-3">
                <input
                  type="email"
                  id="useremail"
                  name="email"
                  placeholder="Enter your email address"
                  required
                />
              </div>
            </div>

            <div class="row">
              <div class="col span-1-of-3">
                <label for="message">Drop me a text</label>
              </div>
              <div class="col span-2-of-3">
                <textarea
                  name="message"
                  id="message"
                  cols="30"
                  rows="5"
                  placeholder="Your message here"
                  required
                ></textarea>
              </div>
            </div>

            <div class="row form-action-buttons">
              <div class="col span-1-of-3">
                <label for="form-submit-btn">&nbsp;</label>
              </div>
              <div class="col span-2-of-3">
                <input
                  id="form-submit-btn"
                  type="submit"
                  value="Send it!"
                  class="btn btn-full"
                />
                <a
                  href="https://www.google.com"
                  target="_blank"
                  class="resume-btn resume-btn-full"
                >
                  Resume
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <nav>
        <div class="row">

          <ul class="footer-nav-left">
            <li>
              <a href="https://github.com/Arrow2dknee"
              target="_blank"
                ><ion-icon name="logo-github" class="footer-icons"></ion-icon></ion-icon
              ></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/antony-roshan-204707138/"
              target="_blank"
                ><ion-icon name="logo-linkedin" class="footer-icons"></ion-icon></ion-icon
              ></a>
            </li>
            <li>
              <a href="mailto:antrosh92@gmail.com"
              target="_blank"
                ><ion-icon name="mail" class="footer-icons"></ion-icon></ion-icon
              ></a>
            </li>
            <li>
              <a href="https://join.skype.com/invite/iCc2lb2shcXm"
              target="_blank"
                ><ion-icon name="logo-skype" class="footer-icons"></ion-icon></ion-icon
              ></a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="row">
          <img
          class="footer-logo"
          src="./resources/images/avataaars-2-min.png"
          alt="avatar of antony roshan"
        />
        <div>
          <h3 class="quote__footer">
            Living, learning and leveling up one day at a time.
          </h3>
        </div>
        <p>
          Portfolio of Antony Roshan<br />
          Copyright &copy; 2019
        </p>
      </div>
    </footer>

    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./vendors/js/jquery.waypoints.min.js"></script>
    <script src="./resources/js/scripts.js"></script>
  </body>
</html>

<!-- 
Semantic HTML elements    

header
section
main
footer
nav 
figure - is also a container that can contain an image and also a caption for the image (figcaption)
-->
