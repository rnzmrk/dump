<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Received Last Names</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 2rem;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
        }

        .neon-title {
            text-shadow: 0 0 10px #00ffff;
        }

        .neon-border {
            border-bottom: 1px solid #00ffff;
            padding: 0.5rem 0;
        }
    </style>
</head>
<body>
    <div class="container mx-auto mt-20 max-w-2xl">
        <h1 class="text-4xl text-center neon-title mb-8">📥 Received Last Names</h1>

        <div class="glass-card">
            @forelse($names as $name)
                <div class="neon-border text-lg">
                    {{ $name->last_name }} <span class="text-sm text-gray-400">({{ $name->created_at->format('M d, Y H:i') }})</span>
                </div>
            @empty
                <p class="text-center text-gray-300">No names received yet.</p>
            @endforelse
        </div>
    </div>
</body>
</html>
