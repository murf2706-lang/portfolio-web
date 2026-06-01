
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Raffi Multimedia Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
scroll-behavior:smooth;
}

body{
background:#050000;
color:white;
overflow-x:hidden;
}

/* LOADER */

#loader{
position:fixed;
width:100%;
height:100%;
background:#050000;
display:flex;
justify-content:center;
align-items:center;
z-index:99999;
}

.loader-text{
font-size:40px;
font-weight:700;
color:#ff4444;
animation:pulse 1.5s infinite;
}

@keyframes pulse{
0%{opacity:.3;}
50%{opacity:1;}
100%{opacity:.3;}
}

/* PARTICLES */

.particles{
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background-image:
radial-gradient(circle,#ff4444 1px,transparent 1px);
background-size:50px 50px;
opacity:.08;
pointer-events:none;
z-index:-1;
}

/* BACKGROUND GLOW */

body::before{
content:'';
position:fixed;
width:700px;
height:700px;
background:#ff0000;
filter:blur(220px);
top:-250px;
left:-250px;
opacity:.3;
z-index:-1;
}

body::after{
content:'';
position:fixed;
width:700px;
height:700px;
background:#ff6600;
filter:blur(220px);
bottom:-250px;
right:-250px;
opacity:.2;
z-index:-1;
}

/* NAVBAR */

nav{
position:fixed;
top:20px;
left:50%;
transform:translateX(-50%);
width:90%;
max-width:1200px;
padding:15px 35px;
display:flex;
justify-content:space-between;
align-items:center;
background:rgba(255,255,255,.05);
backdrop-filter:blur(15px);
border-radius:50px;
border:1px solid rgba(255,255,255,.08);
z-index:999;
}

.logo{
font-size:28px;
font-weight:700;
color:#ff4444;
}

nav ul{
display:flex;
gap:30px;
list-style:none;
}

nav ul li a{
text-decoration:none;
color:white;
transition:.3s;
}

nav ul li a:hover{
color:#ff4444;
}

/* HERO */

.hero{
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
gap:80px;
padding:120px 8%;
flex-wrap:wrap;
}

.hero-left img{
width:350px;
height:450px;
object-fit:cover;
border-radius:30px;
border:3px solid rgba(255,255,255,.1);
box-shadow:
0 0 30px rgba(255,0,0,.5),
0 0 60px rgba(255,0,0,.3);
animation:floating 4s ease-in-out infinite;
}

.hero-right{
max-width:650px;
}

.hero-right h1{
font-size:100px;
font-weight:800;
line-height:1;
}

.line-glow{
width:220px;
height:6px;
margin-top:15px;
margin-bottom:25px;
border-radius:50px;
background:linear-gradient(
90deg,
#ff0000,
#ff6600
);
box-shadow:
0 0 15px red,
0 0 30px red;
}

.job-title{
display:inline-block;
padding:12px 30px;
background:linear-gradient(
45deg,
#ff0000,
#ff6600
);
border-radius:12px;
font-size:22px;
font-weight:600;
}

.badge-container{
display:flex;
gap:12px;
margin-top:20px;
flex-wrap:wrap;
}

.badge-container span{
padding:10px 18px;
background:rgba(255,255,255,.08);
border-radius:50px;
border:1px solid rgba(255,255,255,.1);
transition:.4s;
}

.badge-container span:hover{
background:#ff3333;
transform:translateY(-5px);
}

.hero-right p{
margin-top:25px;
font-size:18px;
line-height:1.9;
color:#ddd;
}

.btn{
display:inline-block;
margin-top:30px;
padding:15px 40px;
background:linear-gradient(
45deg,
#ff0000,
#ff6600
);
border-radius:50px;
text-decoration:none;
color:white;
font-weight:600;
transition:.4s;
}

.btn:hover{
transform:translateY(-5px);
box-shadow:0 0 20px rgba(255,0,0,.5);
}

/* STATS */

.stats{
display:flex;
justify-content:center;
gap:80px;
flex-wrap:wrap;
text-align:center;
}

.stats h1{
font-size:70px;
font-weight:800;
color:#ff4444;
text-shadow:0 0 20px rgba(255,0,0,.6);
}

.stats p{
color:#ddd;
}

/* ABOUT */

section{
padding:100px 8%;
}

.title{
font-size:50px;
text-align:center;
margin-bottom:50px;
}

.title span{
color:#ff4444;
}

.about-box{
background:rgba(255,255,255,.05);
padding:40px;
border-radius:25px;
border:1px solid rgba(255,255,255,.08);
line-height:2;
color:#ddd;
}

/* ANIMATION */

@keyframes floating{
0%{transform:translateY(0);}
50%{transform:translateY(-20px);}
100%{transform:translateY(0);}
}

@media(max-width:900px){

.hero{
text-align:center;
}

.hero-right h1{
font-size:60px;
}

.hero-left img{
width:280px;
height:360px;
}

nav{
flex-direction:column;
gap:15px;
}

}

</style>

</head>

<body>

<div id="loader">
<div class="loader-text">
RAFFI PORTFOLIO
</div>
</div>

<div class="particles"></div>

<nav>

<div class="logo">
RAFFI
</div>

<ul>
<li><a href="#home">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#experience">Experience</a></li>
<li><a href="#software">Software</a></li>
<li><a href="#portfolio">Portfolio</a></li>
<li><a href="#contact">Contact</a></li>
</ul>

</nav>

<section class="hero" id="home">

<div class="hero-left" data-aos="fade-right">

<img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=800&auto=format&fit=crop">

</div>

<div class="hero-right" data-aos="fade-left">

<h1>PORTFOLIO</h1>

<div class="line-glow"></div>

<h2 class="job-title">
🎬 Multimedia Broadcasting Creator
</h2>

<div class="badge-container">

<span>🎥 Video Editing</span>

<span>🎨 Graphic Design</span>

<span>📸 Photography</span>

<span>📡 Broadcasting</span>

</div>

<p>

I am passionate about multimedia broadcasting,
creative storytelling, graphic design,
video production, photography, and digital communication.

I enjoy creating engaging visual experiences through
modern design and multimedia content production.

</p>

<a href="#portfolio" class="btn">

View Portfolio

</a>

</div>

</section>

<section>

<div class="stats">

<div>
<h1>50+</h1>
<p>Projects</p>
</div>

<div>
<h1>20+</h1>
<p>Clients</p>
</div>

<div>
<h1>5+</h1>
<p>Years Learning</p>
</div>

</div>

</section>

<section id="about">

<h1 class="title">
About <span>Me</span>
</h1>

<div class="about-box" data-aos="fade-up">

As a Multimedia Broadcasting enthusiast, I specialize in
video editing, creative content production,
graphic design, and digital storytelling.

I enjoy transforming ideas into visual experiences
that inspire, inform, and engage audiences.

</div>

</section>

<section id="experience">

<h1 class="title">
My <span>Experience</span>
</h1>

<div class="timeline">

<div class="timeline-item" data-aos="fade-right">

<h3>2023</h3>

<p>
Started learning Graphic Design,
Poster Design, and Social Media Content Creation.
</p>

</div>

<div class="timeline-item" data-aos="fade-left">

<h3>2024</h3>

<p>
Focused on Video Editing, Motion Graphics,
and Multimedia Storytelling Projects.
</p>

</div>

<div class="timeline-item" data-aos="fade-right">

<h3>2025</h3>

<p>
Developed Multimedia Broadcasting Projects,
Creative Campaigns, and Digital Branding.
</p>

</div>

<div class="timeline-item" data-aos="fade-left">

<h3>2026</h3>

<p>
Portfolio Development, Creative Production,
and Professional Multimedia Showcase.
</p>

</div>

</div>

</section>

<!-- SOFTWARE -->

<section id="software">

<h1 class="title">
My <span>Software</span>
</h1>

<div class="software-grid">

<div class="software-card" data-aos="zoom-in">
<img src="https://cdn-icons-png.flaticon.com/512/5968/5968520.png">
<h3>Adobe Photoshop</h3>
</div>

<div class="software-card" data-aos="zoom-in" data-aos-delay="100">
<img src="https://cdn-icons-png.flaticon.com/512/5968/5968472.png">
<h3>Adobe Illustrator</h3>
</div>

<div class="software-card" data-aos="zoom-in" data-aos-delay="200">
<img src="https://cdn-icons-png.flaticon.com/512/5968/5968516.png">
<h3>Adobe Lightroom</h3>
</div>

<div class="software-card" data-aos="zoom-in" data-aos-delay="300">
<img src="https://cdn-icons-png.flaticon.com/512/5968/5968525.png">
<h3>Adobe Premiere Pro</h3>
</div>

<div class="software-card" data-aos="zoom-in" data-aos-delay="400">
<img src="https://cdn-icons-png.flaticon.com/512/5968/5968428.png">
<h3>Adobe After Effects</h3>
</div>

<div class="software-card" data-aos="zoom-in" data-aos-delay="500">
<img src="https://cdn-icons-png.flaticon.com/512/5968/5968705.png">
<h3>Canva</h3>
</div>

</div>

</section>

<!-- PORTFOLIO -->

<section id="portfolio">

<h1 class="title">
My <span>Portfolio</span>
</h1>

<div class="gallery">

<img src="https://images.unsplash.com/photo-1545239351-1141bd82e8a6?w=900" data-aos="zoom-in">

<img src="https://images.unsplash.com/photo-1558655146-d09347e92766?w=900" data-aos="zoom-in">

<img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=900" data-aos="zoom-in">

<img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?w=900" data-aos="zoom-in">

<img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=900" data-aos="zoom-in">

<img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=900" data-aos="zoom-in">

</div>

</section>

<!-- CONTACT -->

<section id="contact">

<h1 class="title">
Contact <span>Me</span>
</h1>

<div class="contact-box" data-aos="fade-up">

<h2>
Let's Create Something Amazing
</h2>

<p>
Open for multimedia projects,
video editing, graphic design,
creative collaborations,
and digital content production.
</p>

<br>

<p>📧 raffi.multimedia@gmail.com</p>
<p>📱 +62 812 3456 7890</p>
<p>📸 instagram.com/raffi.portfolio</p>

</div>

</section>

<footer>

<p>
© 2026 Raffi Multimedia Broadcasting Portfolio
</p>

</footer>

<!-- CSS FINAL -->

<style>

.timeline{
max-width:900px;
margin:auto;
}

.timeline-item{
background:rgba(255,255,255,.05);
padding:30px;
margin:20px 0;
border-left:5px solid #ff4444;
border-radius:20px;
transition:.4s;
}

.timeline-item:hover{
transform:translateX(10px);
box-shadow:0 0 25px rgba(255,0,0,.3);
}

.timeline-item h3{
color:#ff4444;
margin-bottom:10px;
}

.software-grid{
display:grid;
grid-template-columns:
repeat(auto-fit,minmax(220px,1fr));
gap:25px;
}

.software-card{
background:rgba(255,255,255,.05);
padding:30px;
border-radius:25px;
text-align:center;
border:1px solid rgba(255,255,255,.08);
transition:.4s;
overflow:hidden;
}

.software-card:hover{
transform:translateY(-10px);
box-shadow:0 0 25px rgba(255,0,0,.4);
}

.software-card img{
width:80px;
height:80px;
margin-bottom:20px;
transition:.5s;
}

.software-card:hover img{
transform:
scale(1.15)
rotate(8deg);
}

.gallery{
display:grid;
grid-template-columns:
repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.gallery img{
width:100%;
height:350px;
object-fit:cover;
border-radius:25px;
transition:.5s;
}

.gallery img:hover{
transform:
scale(1.05)
rotate(2deg);

box-shadow:
0 0 20px red,
0 0 50px rgba(255,0,0,.5);
}

.contact-box{
max-width:800px;
margin:auto;
text-align:center;
padding:50px;
background:rgba(255,255,255,.05);
border-radius:25px;
border:1px solid rgba(255,255,255,.08);
}

.contact-box h2{
margin-bottom:20px;
}

.contact-box p{
line-height:2;
color:#ddd;
}

footer{
padding:40px;
text-align:center;
color:#aaa;
border-top:1px solid rgba(255,255,255,.08);
margin-top:50px;
}

</style>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>

AOS.init({
duration:1200,
once:true
});

window.addEventListener("load",()=>{

setTimeout(()=>{

document.getElementById("loader")
.style.display="none";

},1500);

});

</script>

</body>
</html>
```
