<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tarea Final - Curso Laravel 12</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                background-color: #f9fafb;
                color: #374151;
            }
            .container {
                text-align: center;
                padding: 40px;
            }
            .title {
                font-size: 48px;
                font-weight: 700;
                color: #2563eb;
                margin-bottom: 10px;
            }
            .subtitle {
                font-size: 24px;
                font-weight: 600;
                color: #1f2937;
                margin-bottom: 20px;
            }
            .participants {
                font-size: 18px;
                margin-bottom: 30px;
            }
            .participants ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .participants li {
                margin: 5px 0;
            }
            .links {
                margin-top: 20px;
            }
            .links a {
                color: #2563eb;
                padding: 0 15px;
                font-size: 16px;
                font-weight: 600;
                text-decoration: none;
            }
            .links a:hover {
                text-decoration: underline;
            }
            .auth-links {
                margin-top: 30px;
            }
            .auth-links a {
                margin: 0 10px;
                color: #111827;
                font-weight: 600;
                text-decoration: none;
            }
            .auth-links a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <!-- Encabezado -->
            <div class="title">
                Tarea Final
            </div>
            <div class="subtitle">
                Curso Laravel 12
            </div>
            <div class="participants">
                <strong>Participantes:</strong>
                <ul>
                    <li>Isaac Pintado Pardo</li>
                    <li>Raul Ruben Pacheco Sanduval</li>
                </ul>
            </div>

            <!-- Enlaces de login y registro -->
            @if (Route::has('login'))
                <div class="auth-links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Otros enlaces -->
            <div class="links">
                
            </div>
        </div>
    </body>
</html>