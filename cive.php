<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cive</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

/* Body Styling */
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #ffffff;
}

/* Container Styling */
.container {
  max-width: 800px;
  text-align: center;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Header and Animation */
header h1 {
  font-size: 2.5em;
  color: #800080; /* Purple color */
  margin-bottom: 10px;
}

header p {
  color: #555;
  font-size: 1.2em;
  margin-bottom: 20px;
}

.fade-in {
  opacity: 0;
  animation: fadeIn 2.5s ease-in forwards;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

/* Details Section */
.details h2 {
  font-size: 1.8em;
  color: #333;
  margin-bottom: 15px;
}

.details p {
  color: #555;
  line-height: 1.6;
  margin-bottom: 20px;
}

/* Buttons */
.buttons {
  margin-top: 20px;
}

.btn {
  text-decoration: none;
  color: #fff;
  background-color: #800080; /* Purple color */
  padding: 10px 20px;
  border-radius: 5px;
  margin: 5px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #060a0e;
}
    </style>
  <div class="container">
    <!-- Header with Animation -->
    <header>
      <h1 class="fade-in">CIVE MUSLIM'S</h1>
      <p>Welcome to our college, where not only you can learn about your DUNYA but better place to obtain the knowledge about your AKHERA</p>
    </header>

    <!-- Details Section -->
    <section class="details">
      <h2 class="fade-in">YOUR WARMLY WELCOME</h2>
      <p>
        Our system is designed to simplify the registration process for Muslim first-year students.
        so as they can have deep details concerning muslims while they are at college
        Say goodbye to long paper forms and enjoy a seamless online experience. With this system,
        you'll be able to quickly register, and enable you to each our whatsapp groups at easy.
      </p>
    </section>

    <!-- Navigation Buttons -->
    <div class="buttons">
      <a href="cive2.php" class="btn">LET'S START</a>
    </div>
  </div>
</body>
</html>
