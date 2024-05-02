<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Northern Gulf Docs</title>
    <!-- Include CSS stylesheets and any other necessary assets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Services Section -->
    <section id="services">
        <h2>Our Services</h2>
        <!-- Add your service descriptions here -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Us</h2>
        <!-- Add your about content here -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Us</h2>
        <!-- Add your contact form here -->
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>

    <!-- Include JavaScript scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>