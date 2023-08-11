<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <style>
    .btn-primary {
        background-color: #007bff; /* Blue color */
        border-color: #007bff; /* Blue color */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker shade of blue on hover */
        border-color: #0056b3; /* Darker shade of blue on hover */
    }

    .btn-danger {
        background-color: #dc3545; /* Red color */
        border-color: #dc3545; /* Red color */
    }

    .btn-danger:hover {
        background-color: #c82333; /* Darker shade of red on hover */
        border-color: #c82333; /* Darker shade of red on hover */
    }

    .btn-success {
        background-color: #28a745; /* Green color */
        border-color: #28a745; /* Green color */
    }

    .btn-success:hover {
        background-color: #218838; /* Darker shade of green on hover */
        border-color: #218838; /* Darker shade of green on hover */
    }
</style>

    <title>@yield('title') - My Laravel App</title>
</head>
<body>
    <header>
        <nav>
            <!-- Navigation links here -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>