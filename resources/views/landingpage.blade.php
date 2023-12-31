<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css"
  />
    <!--CSS-->
    <link rel="stylesheet" href="{{asset('css/ets.css')}}"; />
    <title>Personal Portofolio</title>
</head>

<body>
    <!--Navigation Bar-->
    <nav>
        <a href="#" class="nav-logo">Rinov</a>

        <ul class="nav-links">
            <li class="link"><a href="#">Home</a></li>
            <li id="link1" class="link"><a href="#">About Me</a></li>
            <li id="link2" class="link"><a href="#">My Education</a></li>
            <li id="link3" class="link"><a href="#">My Experience</a></li>
            <li id="link4" class="link"><a href="#">Contact Me</a></li>
          </ul>

    </nav>
    <header class="container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <h4>My Own Profile Website</h4>
            <h1>
                Hi There! <span> I'm AHMAD FAUZAN RINAUFALDI</span>
            </h1>
            <p>
                But, you can call me Rinov
            </p>

        </div>
        <div class="frame">
            <img src="{{'img/Rinov2.png'}}" />
        </div>
    </header>
    <section class="container">
        <h2 class="header">About Me</h2>
        <div class="content">
            <h2>
                A student who is currently pursuing a bachelor's degree in Information Systems, who has a great interest
                in organizing and volunteering experience, who always strives to be a good leader by improving his
                leadership and communication skills.
                Having a deep knowledges in terms of committees and volunteers with an expert background in logistics
                division and events division. During my experience, I am driven to solve a problem by strategic planning
                and working as a team. Success by developing communication within a team tends to promote effective
                growth and achieving goals.
            </h2>
        </div>
    </section>
    <section class="container">
        <h2 class="header">My Education</h2>
        <div class="features" style="max-width: 250px; height: auto;">
            <center>
                <table>
                    <tr>
                        <td>
                            <div class="card" style="height: auto;">
                                <span style="background-color: transparent;">
                                    <table cellpadding="8">
                                        <tr>
                                            <td><img src="{{'img/Logo SMAMDA.png'}}" alt="" style="width: 80px;"></td>
                                            <td>Muhammadiyah 2 Surabaya Senior High School</td>
                                        </tr>
                                    </table>
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="card" style="height: auto;">
                                <span style="background-color: transparent;">
                                    <table cellpadding="8">
                                        <tr>
                                            <td><img src="{{'img/Logo ITS.png'}}" alt="" style="width: 80px;"
                                                    style="margin-right: 2rem;"></td>
                                            <td>Sepuluh Nopember Institute of Technology</td>
                                        </tr>
                                    </table>
                                </span>
                            </div>
                        </td>
                        <td>
                    </tr>
                </table>
            </center>
        </div>
    </section>
    <section class="container">
        <h2 class="header">My Experience</h2>
        <p class="sub-header">
            Explore the experience I've had so far
        </p>
        <div class="portfolio-card">
            <img src="{{'img/Foto Staff LTE ILITS 2023.jpg'}}" alt="Deskripsi Pengalaman">
            <h2>Ini Lho ITS! 2023</h2>
            <p>My first ever comitte and my most memorable committee as a Staff of LTE, here i develop my skills in
                Logistics Division
            </p>
        </div>
        <div class="portfolio-card">
            <img src="{{'img/All TEDxITS 2023 Staff .jpg'}}" alt="Deskripsi Pengalaman">
            <h2>TEDxITS 2023</h2>
            <p>My second experience in Logistics Division, here i maintain my skills to help an extraordinary event
            </p>
        </div>
        <div class="portfolio-card">
            <img src="{{'img/Foto panitia Futurest 2023.jpg'}}" alt="Deskripsi Pengalaman">
            <h2>Futurest 2023</h2>
            <p>My first ever experience in Event Division and organize an exhibition in Balai Pemuda Surabaya
            </p>
        </div>
        <div class="portfolio-card">
            <img src="{{'img/All Events Staff GERIGI ITS 2023.jpg'}}" alt="Deskripsi Pengalaman">
            <h2>GERIGI ITS 2023</h2>
            <p>Here are my experience in one of the most iconic event in ITS, is an orientation event for a new college
                student that we wrap it with fun
            </p>
        </div>
    </section>
    <section class="container">
        <h2 class="header">Contact Me</h2>
        <div class="contact-grid">
            <div class="contact-information">
                <i class="uil uil-phone contact_icon"></i>
                <h3>+62 87851287127</h3>
            </div>
            <div class="contact-information">
                <i class="uil uil-envelope contact_icon"></i>
                <h3>rinaufaldi@gmail.com</h3>
            </div>
            <div class="contact-information">
                <i class="uil uil-map-marker contact_icon"></i>
                <h3>Surabaya, Indonesia</h3>
            </div>
        </div>
        <form class="contact-grid">
            <div class="contact_inputs grid">
                <div class="contact-content">
                    <label for="Name" class="contact_label">Name</label>
                    <input type="text" id="name" name="name" class="contact_inputs" required>
                </div>
            </div>
            <div class="contact_inputs grid">
                <div class="contact-content">
                    <label for="email" class="contact_label">Email</label>
                    <input type="email" id="email" name="email" class="contact_inputs" required>
                </div>
            </div>
            <div class="contact-content">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="contact_inputs" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary tombol">Send Message</button>
        </form>
        </div>
    </section>
    <footer class="container">
        <div class="content">
        <span class="blur"></span>
        <span class="blur"></span>
        <p>
            FIND ME ON
          </p>
        </div>
        <div class="column">
          <div class="socials">
          <a href="https://www.linkedin.com/in/ahmad-fauzan-rinaufaldi-a5b961253/"><i class="ri-linkedin-box-line"></i></a>
          <a href="https://www.instagram.com/rinovfld"><i class="ri-instagram-line"></i></a>
          <a href="http://127.0.0.1:8000/meet1">meet1</a>
          <a href="http://127.0.0.1:8000/meet2">meet2</a>
          <a href="http://127.0.0.1:8000/meet3">meet3</a>
          <a href="http://127.0.0.1:8000/meet4">meet4</a>
          <a href="http://127.0.0.1:8000/meet5">meet5</a>
          <a href="http://127.0.0.1:8000/meet6">meet6</a>
          <a href="http://127.0.0.1:8000/meet7">meet7</a>
        </div>
    </div>
    </footer>

    <div class="copyright">
      Copyright @ 2023 Ahmad Fauzan Rinaufaldi
    </div>
  </body>
</html>
