<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
<nav>
        <!-- Autres liens de navigation -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
           Logout
        </a>
    </nav>

    <h1>Welcome User</h1>
</body>
</html>
