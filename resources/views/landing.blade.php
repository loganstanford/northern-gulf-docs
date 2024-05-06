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
    <nav class="absolute top-0 left-0 right-0 z-10 mt-4">
        <div class="container mx-auto flex justify-center">
            <ul class="flex space-x-6 text-white">
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="relative bg-black">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
            <source src="videos/yacht-sunset.mov" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div
            class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>
        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl text-emerald-500 font-extrabold sm:text-5xl">
                    The Premier
                    <strong class="block font-extrabold text-zinc-50"> Vessel Docs Company </strong>
                </h1>
                <p class="mt-4 max-w-lg sm:text-xl/relaxed">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                    numquam ea!
                </p>
                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#"
                        class="block w-full rounded bg-emerald-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-emerald-700 focus:outline-none focus:ring active:bg-emerald-500 sm:w-auto">Get
                        Started</a>
                    <a href="#"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-emerald-600 shadow hover:text-emerald-700 focus:outline-none focus:ring active:text-emerald-500 sm:w-auto">Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100 border-b border-gray-300">
        <div class="container mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center md:text-left">About Us</h2>
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="md:w-1/4 md:pr-8 mb-8">
                    <img src="images/owner-image.jpg" alt="Owner Image" class="w-full rounded-lg">
                </div>
                <div class="md:w-2/3">
                    <p class="mb-6 leading-relaxed text-lg md:text-xl text-slate-700 font-serif">
                        Marissa Fritz, owner of Northern Gulf Vessel Documentation (NGVD), has been in
                        the marine industry for over 35 years. In 2005, Marissa joined a Global Yacht Dealership
                        in Florida where she served as Closing Coordinator for 16 years supporting Florida, Texas,
                        and U.S. Coast Guard agency transactions. In 2013, Marissa established NGVD to focus on
                        Vessel Documentation. The knowledge and experience obtained from working as a Closing Agent
                        and Vessel Documentation Agent on hundreds of transactions means you have a highly qualified
                        industry representative to handle your needs.
                    </p>
                    <p class="mb-8 leading-relaxed text-lg md:text-xl text-gray-700 font-serif">
                        NGVD is a quality-first focused business and takes pride in the customer service provided
                        in each transaction. Additionally, NGVD is an approved Agent with numerous Marine Lenders.
                        Please consider NGVD for your business needs as we’re confident you will like the difference.
                    </p>
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Industry Certifications and
                        Memberships</h3>
                    <ul class="list-image-cert list-disc pl-6">
                        <li class="pl-2" style="position: relative; padding-top: 5px; padding-bottom: 5px;">
                            <div class="flex items-center"
                                style="position: absolute; top: 50%; transform: translateY(-50%);">
                                Vessel Documentation Association
                            </div>
                        </li>
                        <li class="pl-2" style="position: relative; padding-top: 5px; padding-bottom: 5px;">
                            <div class="flex items-center"
                                style="position: absolute; top: 50%; transform: translateY(-50%);">
                                US Coast Guard Merchant Mariner License, OUPV / 6-pack 50 Ton
                            </div>
                        </li>
                        <li class="pl-2" style="position: relative; padding-top: 5px; padding-bottom: 5px;">
                            <div class="flex items-center"
                                style="position: absolute; top: 50%; transform: translateY(-50%);">
                                Florida Notary Certification 1
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>



    <!-- Services Section -->
    <section id="services" class="bg-white py-20 border-b border-gray-300">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i
                        class="fas fa-folder-open fa-rotate-180 fa-flip-horizontal text-emerald-700 text-6xl mx-auto"></i>
                    <h3 class="text-xl font-semibold mb-2">Documentation Services U.S. Coast Guard</h3>
                    <ul class="list-disc pl-6 mb-8">
                        <li class="pl-2">Prepare and Submit Application for New and Existing USCG
                            Documented Vessels</li>
                        <li class="pl-2">Ownership Changes to Documentation</li>
                        <li class="pl-2">Return to Documentation, and Renewals</li>
                        <li class="pl-2">Abstract of Title, Lien Search Requests with the USCG</li>
                        <li class="pl-2">Deletions from the USCG Documentation</li>
                        <li class="pl-2">Prepare and Record Preferred Ship’s Mortgage</li>
                        <li class="pl-2">File Satisfaction of Lien</li>
                        <li class="pl-2">File Bills of Sale</li>
                    </ul>
                    <a href="#contact"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2 px-4 rounded-full inline-block">Get
                        a Quote</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-anchor text-emerald-700 text-6xl mx-auto"></i>
                    <h3 class="text-xl font-semibold mb-2">Documentation Services State Agencies</h3>
                    <p class="text-lg mb-4">Specializing in: Florida, Texas and Rhode Island</p>
                    <a href="#contact"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2 px-4 rounded-full inline-block">Get
                        a Quote</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-ship text-emerald-700 text-6xl mx-auto"></i>
                    <h3 class="text-xl font-semibold mb-2">Vessel Closing Services</h3>
                    <p class="text-lg mb-4">Vessel Ownership Research – Corporations, Limited Liability, and Trusts</p>
                    <a href="#contact"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2 px-4 rounded-full inline-block">Get
                        a Quote</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <div class="flex flex-wrap justify-center w-full mt-10">
        <div class="w-full md:w-1/1 md:order-1 md:mb-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Testimonials</h2>
            </div>
        </div>
        <div class="w-full md:w-1/3 md:order-2 md:mb-8">
            <!-- Left empty intentionally -->
        </div>
        <div
            class="w-full md:w-1/3 md:overflow-hidden md:border md:border-gray-300 md:rounded-lg md:border-2 md:p-8 md:order-3 md:mb-20">
            <div class="fusion-testimonials clean">
                <div class="reviews">
                    <div class="review avatar-above avatar-image">
                        <div class="testimonial-thumbnail">
                            <img src="https://ngvd.us/wp-content/uploads/2022/09/AspireYachtsLogo.jpg" width="348"
                                height="79" alt="Testimonial Thumbnail">
                        </div>
                        <blockquote>
                            <p>Marissa deserves recognition for her excellent service in managing critical closings with
                                professionalism and courtesy to my buyers and sellers. Thank you for all your hard work!
                            </p>
                        </blockquote>
                        <div class="author">
                            <strong>John Booysen</strong>, <a href="https://aspireyachtsales.com/about-us/"
                                target="_blank" rel="noopener noreferrer">Aspire Yacht Sales</a>
                        </div>
                    </div>
                    <!-- Additional reviews go here -->
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 md:order-4 md:mb-8">
            <!-- Right empty intentionally -->
        </div>
    </div>


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

</body>

</html>