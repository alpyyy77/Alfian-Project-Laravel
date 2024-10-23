<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">MyWebsite</a>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-white hover:text-gray-300">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-300 underline">About</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Services</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white text-blue-900 p-10 rounded-lg shadow-lg w-4/5 lg:w-2/3">
            <h1 class="text-4xl font-bold mb-6">About Us</h1>
            <p class="text-lg mb-4">
                Welcome to the About page of our website! We are dedicated to providing the best services for our customers, 
                and we take pride in our work. Our team is made up of skilled professionals with years of experience in various fields.
            </p>
            <p class="text-lg mb-4">
                Our mission is to deliver top-quality solutions while maintaining a customer-first approach. Feel free to browse 
                through our website and discover more about what we offer.
            </p>
            <p class="text-lg">
                If you have any questions, don’t hesitate to <a href="#" class="text-blue-500 underline hover:text-blue-700">contact us</a>. 
                We’re always here to help!
            </p>
        </div>
    </div>
</body>
</html>
