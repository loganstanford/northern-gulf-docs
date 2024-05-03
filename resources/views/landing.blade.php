<!-- Resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Northern Gulf Docs</title>
    <!-- Include Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <!-- Navigation -->
    <nav class="bg-gray-900 text-white p-4">
        <div class="container mx-auto">
            <ul>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gray-800 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Welcome to Northern Gulf Docs</h1>
            <p class="mt-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut leo vel massa
                maximus commodo.</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">About Us</h2>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 md:pr-8 mb-4">
                    <img src="owner-image.jpg" alt="Owner Image" class="w-full rounded-lg">
                </div>
                <div class="md:w-1/2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut leo vel massa maximus commodo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-gray-200 py-20">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Service 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Service 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Service 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Testimonials</h2>
            <!-- Add your testimonials here -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-900 text-white py-20">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <form action="{{ route('contact.submit') }}" method="POST" class="max-w-md mx-auto">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-white">Name:</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-white">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-white">Message:</label>
                    <textarea id="message" name="message" required rows="4"
                        class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white"></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Submit</button>
            </form>
        </div>
    </section>

    <!-- Include JavaScript scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>