<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Bus Schedule' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        background-color: #f8fafc;
    }

    .hero {
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        color: white;
        padding: 80px 20px;
        border-radius: 15px;
        text-align: center;
    }

    .feature-card {
        border: none;
        border-radius: 15px;
        transition: 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .btn-custom {
        background: #00c6ff;
        border: none;
        color: white;
    }

    .btn-custom:hover {
        background: #0072ff;
    }
</style>
</head>
<body>

    @include('components.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>