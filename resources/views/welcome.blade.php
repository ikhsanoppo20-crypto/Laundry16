<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Wash Laundry</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap & Google Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #ebb5d2, #a1bdda);
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      margin: 0;
      overflow: hidden;
      position: relative;
    }

    canvas {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 0;
      pointer-events: none;
    }

    .landing-container {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      text-align: center;
      padding: 20px;
      animation: fadeIn 2s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .logo-image {
      width: 150px;
      height: 150px;
      object-fit: contain;
      margin-bottom: 25px;
      background-color: #fff;
      border-radius: 50%;
      padding: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .logo {
      font-size: 2.8rem;
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .subtitle {
      font-size: 1.2rem;
      color: #4e4e4e;
      margin-bottom: 40px;
      font-weight: 400;
    }

    .action-buttons .btn {
      padding: 12px 35px;
      font-weight: 600;
      border-radius: 50px;
      margin: 5px;
      transition: all 0.3s ease;
      font-size: 16px;
    }

    .btn-login {
      background-color: #4c89ff;
      color: white;
    }

    .btn-login:hover {
      background-color: #3b72d2;
    }

    .btn-register {
      background-color: #ff6b81;
      color: white;
    }

    .btn-register:hover {
      background-color: #e9556c;
    }

    @media (max-width: 576px) {
      .logo {
        font-size: 2rem;
      }

      .subtitle {
        font-size: 1rem;
      }

      .logo-image {
        width: 120px;
        height: 120px;
      }
    }
  </style>
</head>

<body>
  <!-- Canvas untuk efek bubble -->
  <canvas id="bubbleCanvas"></canvas>

  <div class="container landing-container">
    <img src= '{{ asset('templatelaundry/img/logo laundry.jpeg') }}'alt="Logo Laundry" class="logo-image">

    <h1 class="logo">Wash Laundry</h1>
    <p class="subtitle">Sistem Informasi Wash Laundry</p>

    <div class="action-buttons">
      <a href="{{ route('login') }}" class="btn btn-login">Login</a>
      <a href="{{ route('register') }}" class="btn btn-register">Register</a>
    </div>
  </div>

  <!-- Script efek animasi bubble -->
  <script>
    const canvas = document.getElementById('bubbleCanvas');
    const ctx = canvas.getContext('2d');
    let bubbles = [];

    function resizeCanvas() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    }

    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    function createBubble() {
      return {
        x: Math.random() * canvas.width,
        y: canvas.height + Math.random() * 100,
        radius: Math.random() * 8 + 2,
        speed: Math.random() * 1 + 0.5,
        opacity: Math.random() * 0.5 + 0.2
      };
    }

    function drawBubble(b) {
      ctx.beginPath();
      ctx.arc(b.x, b.y, b.radius, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(255, 255, 255, ${b.opacity})`;
      ctx.fill();
    }

    function updateBubbles() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      bubbles.forEach((b, i) => {
        b.y -= b.speed;
        drawBubble(b);
        if (b.y + b.radius < 0) {
          bubbles[i] = createBubble();
        }
      });
    }

    function animate() {
      updateBubbles();
      requestAnimationFrame(animate);
    }

    for (let i = 0; i < 60; i++) {
      bubbles.push(createBubble());
    }

    animate();
  </script>
</body>
</html>
