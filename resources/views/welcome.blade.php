
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            scroll-behavior:smooth;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#020617;
            color:white;
            overflow-x:hidden;
        }

        body::before{
            content:'';
            position:fixed;
            width:500px;
            height:500px;
            background:#2563eb;
            border-radius:50%;
            filter:blur(180px);
            top:-150px;
            left:-150px;
            opacity:0.5;
            z-index:-1;
        }

        body::after{
            content:'';
            position:fixed;
            width:500px;
            height:500px;
            background:#9333ea;
            border-radius:50%;
            filter:blur(180px);
            bottom:-150px;
            right:-150px;
            opacity:0.5;
            z-index:-1;
        }

        nav{
            width:100%;
            padding:20px 8%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            position:fixed;
            top:0;
            z-index:1000;
            background:rgba(2,6,23,0.7);
            backdrop-filter:blur(10px);
            border-bottom:1px solid rgba(255,255,255,0.1);
        }

        .logo{
            font-size:28px;
            font-weight:700;
            color:#60a5fa;
        }

        nav ul{
            display:flex;
            gap:30px;
            list-style:none;
        }

        nav ul li a{
            text-decoration:none;
            color:white;
            transition:0.3s;
            font-weight:500;
        }

        nav ul li a:hover{
            color:#60a5fa;
        }

        section{
            min-height:100vh;
            padding:120px 8%;
        }

        .hero{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:50px;
            flex-wrap:wrap;
        }

        .hero-text{
            flex:1;
            animation:fadeLeft 1s ease;
        }

        .hero-text h1{
            font-size:70px;
            line-height:1.1;
        }

        .hero-text h1 span{
            color:#60a5fa;
        }

        .hero-text p{
            margin-top:20px;
            font-size:18px;
            color:#cbd5e1;
            max-width:600px;
        }

        .btn{
            display:inline-block;
            margin-top:30px;
            padding:15px 35px;
            background:linear-gradient(45deg,#2563eb,#9333ea);
            border-radius:50px;
            color:white;
            text-decoration:none;
            transition:0.4s;
            box-shadow:0 0 20px rgba(37,99,235,0.4);
        }

        .btn:hover{
            transform:translateY(-5px) scale(1.05);
        }

        .hero-image{
            flex:1;
            display:flex;
            justify-content:center;
            animation:float 3s ease-in-out infinite;
        }

        .hero-image img{
            width:350px;
            border-radius:30px;
            border:4px solid rgba(255,255,255,0.1);
            box-shadow:0 0 40px rgba(96,165,250,0.3);
        }

        .title{
            text-align:center;
            font-size:45px;
            margin-bottom:50px;
        }

        .title span{
            color:#60a5fa;
        }

        .about-box,
        .project-card,
        .skill-card,
        .contact-box{
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.1);
            padding:30px;
            border-radius:25px;
            backdrop-filter:blur(10px);
            transition:0.4s;
        }

        .about-box:hover,
        .project-card:hover,
        .skill-card:hover,
        .contact-box:hover{
            transform:translateY(-10px);
            box-shadow:0 0 30px rgba(96,165,250,0.2);
        }

        .about-box p{
            color:#cbd5e1;
            line-height:1.8;
            text-align:center;
        }

        .skills-container,
        .project-container{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
        }

        .skill-card h3,
        .project-card h3{
            margin-bottom:15px;
            color:#60a5fa;
        }

        .skill-card p,
        .project-card p{
            color:#cbd5e1;
        }

        .contact-box{
            text-align:center;
        }

        .contact-box p{
            margin-top:15px;
            color:#cbd5e1;
        }

        footer{
            text-align:center;
            padding:30px;
            border-top:1px solid rgba(255,255,255,0.1);
            color:#94a3b8;
        }

        @keyframes fadeLeft{
            from{
                opacity:0;
                transform:translateX(-50px);
            }
            to{
                opacity:1;
                transform:translateX(0);
            }
        }

        @keyframes float{
            0%{
                transform:translateY(0px);
            }
            50%{
                transform:translateY(-20px);
            }
            100%{
                transform:translateY(0px);
            }
        }

        @media(max-width:900px){
            .hero{
                flex-direction:column-reverse;
                text-align:center;
            }

            .hero-text h1{
                font-size:50px;
            }

            nav{
                flex-direction:column;
                gap:20px;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">Raffi.</div>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#project">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section class="hero" id="home">
        <div class="hero-text">
            <h1>Hello, I'm <span>Raffi</span></h1>
            <p>
                Saya adalah mahasiswa yang sedang belajar web development menggunakan Laravel.
                Saya tertarik pada UI/UX, frontend development, dan desain website modern.
            </p>

            <a href="#project" class="btn">View My Project</a>
        </div>

        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=800&auto=format&fit=crop" alt="profile">
        </div>
    </section>

    <section id="about">
        <h1 class="title">About <span>Me</span></h1>

        <div class="about-box">
            <p>
                Saya sedang mempelajari Laravel 12 untuk membuat website portfolio profesional.
                Saya suka membuat desain website modern, responsive, dan memiliki animasi menarik.
                Selain itu saya juga tertarik mempelajari frontend development dan backend development.
            </p>
        </div>
    </section>

    <section id="skills">
        <h1 class="title">My <span>Skills</span></h1>

        <div class="skills-container">
            <div class="skill-card">
                <h3>HTML & CSS</h3>
                <p>Membuat tampilan website modern dan responsive.</p>
            </div>

            <div class="skill-card">
                <h3>Laravel</h3>
                <p>Membuat website menggunakan framework Laravel 12.</p>
            </div>

            <div class="skill-card">
                <h3>JavaScript</h3>
                <p>Menambahkan interaksi dan animasi pada website.</p>
            </div>

            <div class="skill-card">
                <h3>UI/UX Design</h3>
                <p>Mendesain tampilan website yang nyaman digunakan.</p>
            </div>
        </div>
    </section>

    <section id="project">
        <h1 class="title">My <span>Projects</span></h1>

        <div class="project-container">
            <div class="project-card">
                <h3>Portfolio Laravel</h3>
                <p>Website portfolio modern menggunakan Laravel 12.</p>
            </div>

            <div class="project-card">
                <h3>Login Page</h3>
                <p>Membuat desain login page menggunakan HTML dan CSS.</p>
            </div>

            <div class="project-card">
                <h3>Web Multimedia</h3>
                <p>Pengembangan web streaming multimedia berbasis FFMPEG.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="title">Contact <span>Me</span></h1>

        <div class="contact-box">
            <p>Email : raffi@gmail.com</p>
            <p>Instagram : @raffi</p>
            <p>GitHub : murf2706-lang</p>
        </div>
    </section>

    <footer>
        <p>© 2026 Raffi Portfolio Website</p>
    </footer>

</body>
</html>


