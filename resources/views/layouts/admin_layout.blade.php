<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .sidebar {
            min-width: 220px;
            max-width: 220px;
            min-height: 100vh;
            background: #343a40;
            color: #fff;
        }
        .sidebar .nav-link {
            color: #adb5bd;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            color: #fff;
            background: #495057;
        }
        .content {
            padding: 2rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    @if (Auth::user()->hasRole('Admin'))
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="padding: 0; border: none; background: none;">
                                Logout
                            </button>
                        </form>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar + Content -->
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar d-flex flex-column p-3">
            <h4 class="mb-4">Menu</h4>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link active">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('jobs.index') }}" class="nav-link">Jobs</a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}" class="nav-link">Roles</a>
                </li>
                <li>
                    <a href="{{ route('permissions.index') }}" class="nav-link">Permissions</a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}" class="nav-link">Users</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Settings</a>
                </li>
                <li>
                    <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content flex-grow-1">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>