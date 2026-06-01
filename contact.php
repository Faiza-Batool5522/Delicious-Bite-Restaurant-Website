<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Delicious Bites Food Restaurant</title>
<style>
    /* Reset and base styles */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
        background: #fff8f0;
        color: #333;
        line-height: 1.6;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    a {
        color: #ff6f61;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    a:hover, a:focus {
        color: #e85446;
    }
    header {
        background: #ff6f61;
        color: white;
        padding: 1rem 2rem;
        position: sticky;
        top: 0;
        z-index: 99;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 1rem;
        width: 100%;
    }
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
    nav .logo {
        font-size: 1.8rem;
        font-weight: 700;
        letter-spacing: 3px;
        user-select: none;
    }
    nav ul {
        list-style: none;
        display: flex;
        gap: 1.5rem;
    }
    nav ul li {
        font-weight: 600;
    }
    /* Hero section */
    .hero {
        background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        padding: 0 1rem;
        position: relative;
    }
    .hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.35);
        z-index: 0;
    }
    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 700px;
        font-weight: 700;
    }
    .hero-content h1 {
        font-size: 3rem;
        margin-bottom: 0.5rem;
        text-shadow: 0 2px 8px rgba(0,0,0,0.4);
    }
    .hero-content p {
        font-size: 1.2rem;
        font-weight: 400;
        text-shadow: 0 1px 6px rgba(0,0,0,0.3);
    }
    /* Menu section */
    .menu-section {
        background: white;
        padding: 3rem 1rem 5rem;
    }
    .menu-section h2 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 2.5rem;
        color: #ff6f61;
        font-weight: 700;
    }
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 2rem;
        max-width: 1100px;
        margin: 0 auto;
    }
    .menu-item {
        background: #fff4f0;
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(255,111,97,0.15);
        overflow: hidden;
        transition: transform 0.3s ease;
        cursor: default;
    }
    .menu-item:hover,
    .menu-item:focus-within {
        transform: translateY(-6px);
        box-shadow: 0 12px 20px rgba(255,111,97,0.3);
    }
    .menu-img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        display: block;
    }
    .menu-info {
        padding: 1rem 1.5rem 1.5rem;
    }
    .menu-info h3 {
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
        color: #d94f43;
    }
    .menu-info p {
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 1rem;
        min-height: 48px;
    }
    .menu-info span {
        color: #ff6f61;
        font-weight: 700;
        font-size: 1.1rem;
        letter-spacing: 1px;
    }
    /* Reservation form section */
    .reservation-section {
        background: #ff6f6133;
        padding: 3rem 1rem;
        margin-top: 3rem;
    }
    .reservation-section h2 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 2.5rem;
        color: #ff6f61;
        font-weight: 700;
    }
    form.reservation-form {
        background: white;
        max-width: 600px;
        margin: 0 auto;
        padding: 2rem 2rem 2.5rem;
        border-radius: 15px;
        box-shadow: 0 12px 20px rgba(255,111,97,0.15);
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .form-group {
        display: flex;
        flex-direction: column;
    }
    label {
        font-weight: 600;
        margin-bottom: 0.4rem;
        color: #d94f43;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    input[type="time"],
    select,
    textarea {
        padding: 0.65rem 0.8rem;
        border-radius: 8px;
        border: 1.8px solid #ff6f61;
        font-size: 1rem;
        transition: border-color 0.3s ease;
        resize: vertical;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    input[type="date"]:focus,
    input[type="time"]:focus,
    select:focus,
    textarea:focus {
        outline: none;
        border-color: #d94f43;
        box-shadow: 0 0 8px #ff6f6155;
    }
    textarea {
        min-height: 100px;
    }
    button {
        padding: 0.8rem 1.5rem;
        background: #ff6f61;
        color: white;
        border: none;
        font-weight: 700;
        font-size: 1.1rem;
        border-radius: 12px;
        cursor: pointer;
        align-self: flex-start;
        transition: background 0.3s ease;
    }
    button:hover,
    button:focus {
        background: #d94f43;
    }
    .success-message, .error-message {
        max-width: 600px;
        margin: 1rem auto;
        text-align: center;
        font-weight: 700;
        font-size: 1.2rem;
        border-radius: 12px;
        padding: 1rem 1.5rem;
        color: white;
    }
    .success-message {
        background-color: #34a853;
    }
    .error-message {
        background-color: #ea4335;
    }
    /* Footer */
    footer {
        background: #ff6f61;
        color: white;
        text-align: center;
        padding: 1rem 2rem;
        font-weight: 600;
        margin-top: auto;
        user-select: none;
    }
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2.2rem;
        }
        nav ul {
            gap: 1rem;
        }
        .menu-grid {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        }
        form.reservation-form {
            padding: 1.5rem 1.5rem 2rem;
            width: 100%;
        }
    }
    @media (max-width: 480px) {
        nav ul {
            flex-direction: column;
            gap: 0.75rem;
            margin-top: 0.5rem;
            width: 100%;
            border-top: 1px solid rgba(255,255,255,0.3);
            padding-top: 1rem;
        }
        nav {
            flex-direction: column;
            align-items: flex-start;
        }
        .hero-content h1 {
            font-size: 1.8rem;
        }
    }
</style>
</head>
<body>
<header>
    <div class="container">
        <nav aria-label="Primary navigation">
            <div class="logo" tabindex="0" aria-label="Delicious Bites Food Restaurant Logo">Delicious Bites</div>
            <ul role="menubar" aria-label="Main menu">
                <li role="none"><a role="menuitem" href="#menu-section">Menu</a></li>
                <li role="none"><a role="menuitem" href="#reservation-section">Reservation</a></li>
                <li role="none"><a role="menuitem" href="#footer-section">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero" aria-label="Restaurant introduction">
    <div class="hero-content">
        <h1>Welcome to Delicious Bites</h1>
        <p>Your gateway to the finest and freshest food experience in town.</p>
    </div>
</section>

<main>
    <section id="menu-section" class="menu-section" tabindex="-1">
        <h2>Our Menu</h2>
        <div class="menu-grid" role="list">
            <article class="menu-item" role="listitem" tabindex="0" aria-label="Margherita Pizza, $12">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=400&q=80" alt="Margherita Pizza" class="menu-img" />
                <div class="menu-info">
                    <h3>Margherita Pizza</h3>
                    <p>Classic pizza with fresh mozzarella, basil, and tomato sauce.</p>
                    <span>$12.00</span>
                </div>
            </article>
            <article class="menu-item" role="listitem" tabindex="0" aria-label="Spaghetti Carbonara, $15">
                <img src="https://images.unsplash.com/photo-1603133872870-4fb34fe5e51b?auto=format&fit=crop&w=400&q=80" alt="Spaghetti Carbonara" class="menu-img" />
                <div class="menu-info">
                    <h3>Spaghetti Carbonara</h3>
                    <p>Rich and creamy spaghetti with pancetta, egg, and Parmesan cheese.</p>
                    <span>$15.00</span>
                </div>
            </article>
            <article class="menu-item" role="listitem" tabindex="0" aria-label="Caesar Salad, $10">
                <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=400&q=80" alt="Caesar Salad" class="menu-img" />
                <div class="menu-info">
                    <h3>Caesar Salad</h3>
                    <p>Crisp romaine with Caesar dressing, croutons, and Parmesan cheese.</p>
                    <span>$10.00</span>
                </div>
            </article>
            <article class="menu-item" role="listitem" tabindex="0" aria-label="Chocolate Lava Cake, $8">
                <img src="https://images.unsplash.com/photo-1617191511740-3ff3480389d4?auto=format&fit=crop&w=400&q=80" alt="Chocolate Lava Cake" class="menu-img" />
                <div class="menu-info">
                    <h3>Chocolate Lava Cake</h3>
                    <p>Warm chocolate cake with a gooey molten center served with vanilla ice cream.</p>
                    <span>$8.00</span>
                </div>
            </article>
        </div>
    </section>

    <section id="reservation-section" class="reservation-section" tabindex="-1" aria-label="Reservation form">
        <h2>Make a Reservation</h2>

        <?php
            $name = $email = $phone = $date = $time = $people = $requests = "";
            $success_message = $error_message = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Sanitize inputs
                $name = htmlspecialchars(trim($_POST["name"] ?? ""));
                $email = htmlspecialchars(trim($_POST["email"] ?? ""));
                $phone = htmlspecialchars(trim($_POST["phone"] ?? ""));
                $date = htmlspecialchars(trim($_POST["date"] ?? ""));
                $time = htmlspecialchars(trim($_POST["time"] ?? ""));
                $people = htmlspecialchars(trim($_POST["people"] ?? ""));
                $requests = htmlspecialchars(trim($_POST["requests"] ?? ""));

                // Simple validation
                if (empty($name) || empty($email) || empty($date) || empty($time) || empty($people)) {
                    $error_message = "Please fill in all required fields.";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error_message = "Please enter a valid email address.";
                } elseif (!preg_match("/^\+?[0-9\s\-]{6,15}$/", $phone) && !empty($phone)) {
                    $error_message = "Please enter a valid phone number.";
                } elseif (strtotime($date) < strtotime(date("Y-m-d"))) {
                    $error_message = "Reservation date cannot be in the past.";
                } else {
                    // Prepare email (you can customize this logic)
                    $to = "reservations@example.com"; // Change to your reservation email
                    $subject = "New Reservation from $name";
                    $message = "Reservation details:\n\n".
                               "Name: $name\n".
                               "Email: $email\n".
                               "Phone: $phone\n".
                               "Date: $date\n".
                               "Time: $time\n".
                               "Number of People: $people\n".
                               "Special Requests: $requests\n";
                    $headers = "From: no-reply@deliciousbites.com";

                    // Try sending email (this requires mail server set up)
                    if (mail($to, $subject, $message, $headers)) {
                        $success_message = "Thank you, $name! Your reservation request has been sent successfully.";
                        // Clear form fields
                        $name = $email = $phone = $date = $time = $people = $requests = "";
                    } else {
                        $error_message = "Sorry, an error occurred while sending your reservation. Please try again later.";
                    }
                }
            }
        ?>

        <?php if ($success_message): ?>
            <div class="success-message" role="alert" aria-live="polite"><?php echo $success_message; ?></div>
        <?php elseif ($error_message): ?>
            <div class="error-message" role="alert" aria-live="assertive"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form class="reservation-form" method="POST" action="#reservation-section" novalidate aria-describedby="reservation-desc">
            <p id="reservation-desc" style="margin-bottom:1rem; max-width: 600px; margin-left:auto; margin-right:auto; color:#d94f43; font-weight:600;">
                Please fill the form to make a reservation. Fields marked with * are required.
            </p>
            <div class="form-group">
                <label for="name">Name *</label>
                <input id="name" name="name" type="text" value="<?php echo $name; ?>" required aria-required="true" aria-describedby="name-error" />
                <span id="name-error" style="color:#ea4335; font-size:0.9rem;"></span>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input id="email" name="email" type="email" value="<?php echo $email; ?>" required aria-required="true" aria-describedby="email-error" />
                <span id="email-error" style="color:#ea4335; font-size:0.9rem;"></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="tel" value="<?php echo $phone; ?>" placeholder="+1234567890" aria-describedby="phone-error" />
                <span id="phone-error" style="color:#ea4335; font-size:0.9rem;"></span>
            </div>
            <div class="form-group">
                <label for="date">Date *</label>
                <input id="date" name="date" type="date" value="<?php echo $date; ?>" required aria-required="true" aria-describedby="date-error" min="<?php echo date("Y-m-d"); ?>" />
                <span id="date-error" style="color:#ea4335; font-size:0.9rem;"></span>
            </div>
            <div class="form-group">
                <label for="time">Time *</label>
                <input id="time" name="time" type="time" value="<?php echo $time; ?>" required aria-required="true" aria-describedby="time-error" />
                <span id="time-error" style="color:#ea4335; font-size:0.9rem;"></span>
            </div>
            <div class="form-group">
                <label for="people">Number of People *</label>
                <select id="people" name="people" required aria-required="true" aria-describedby="people-error">
                    <option value="" disabled <?php echo ($people === "") ? "selected" : ""; ?>>Select...</option>
                    <?php
                        for ($i=1; $i <= 20; $i++) {
                            $selected = ($people == $i) ? "selected" : "";
                            echo "<option value=\"$i\" $selected>$i</option>";
                        }
                    ?>
                </select>
                <span id="people-error" style="color:#ea4335; font-size:0.9rem;"></span>
            </div>
            <div class="form-group">
                <label for="requests">Special Requests</label>
                <textarea id="requests" name="requests" placeholder="Any special requests?"><?php echo $requests; ?></textarea>
            </div>
            <button type="submit">Reserve Table</button>
        </form>
    </section>
</main>

<footer id="footer-section" tabindex="-1">
    <p>© <?php echo date("Y"); ?> Delicious Bites Food Restaurant - All Rights Reserved</p>
    <p>Contact us: <a href="mailto:info@deliciousbites.com">info@deliciousbites.com</a> | Phone: +1 123 456 7890</p>
</footer>

<script>
    // Client-side form validation for better UX
    (function(){
        const form = document.querySelector('.reservation-form');
        if (!form) return;

        // Error message elements
        const errors = {
            name: document.getElementById('name-error'),
            email: document.getElementById('email-error'),
            phone: document.getElementById('phone-error'),
            date: document.getElementById('date-error'),
            time: document.getElementById('time-error'),
            people: document.getElementById('people-error'),
        };

        function clearErrors() {
            for (const key in errors) {
                errors[key].textContent = '';
            }
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function validatePhone(phone) {
            if(phone.trim() === '') return true; // Optional
            const re = /^\+?[0-9\s\-]{6,15}$/;
            return re.test(phone);
        }

        form.addEventListener('submit', function (e) {
            clearErrors();
            let valid = true;

            if(form.name.value.trim() === '') {
                errors.name.textContent = 'Name is required.';
                valid = false;
            }
            if(form.email.value.trim() === '') {
                errors.email.textContent = 'Email is required.';
                valid = false;
            } else if(!validateEmail(form.email.value.trim())) {
                errors.email.textContent = 'Enter a valid email.';
                valid = false;
            }
            if(!validatePhone(form.phone.value.trim())) {
                errors.phone.textContent = 'Enter a valid phone number.';
                valid = false;
            }
            if(form.date.value === '') {
                errors.date.textContent = 'Date is required.';
                valid = false;
            } else {
                const selectedDate = new Date(form.date.value);
                const today = new Date();
                today.setHours(0,0,0,0);
                if(selectedDate < today) {
                    errors.date.textContent = 'Date cannot be in the past.';
                    valid = false;
                }
            }
            if(form.time.value === '') {
                errors.time.textContent = 'Time is required.';
                valid = false;
            }
            if(form.people.value === '') {
                errors.people.textContent = 'Please select number of people.';
                valid = false;
            }

            if(!valid) {
                e.preventDefault();
            }
        });
    })();
</script>
</body>
</html>

