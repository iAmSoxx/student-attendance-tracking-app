<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #0b0b0b;
        }
    </style>
</head>
<body class="text-white font-sans">

    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Student Attendance Tracking System</h1>
            <p class="text-gray-400 max-w-xl mx-auto">
                A simple and efficient system to help you monitor and manage student attendance with ease and accuracy.
            </p>
        </div>

        <!-- Features Section -->
        <div class="grid gap-6 md:grid-cols-2 max-w-4xl w-full mb-12">
            <div class="bg-[#171717] p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">📅 Real-time Attendance</h3>
                <p class="text-gray-400 text-sm">Easily record and track daily attendance status — present, absent, or sick — in real time.</p>
            </div>
            <div class="bg-[#171717] p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">🔐 Secure Login System</h3>
                <p class="text-gray-400 text-sm">User authentication with secure password storage and access control to protect your data.</p>
            </div>
            <div class="bg-[#171717] p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">📊 Dashboard Insights</h3>
                <p class="text-gray-400 text-sm">View total students, users, daily stats (present/absent), and a line chart of monthly attendance trends.</p>
            </div>
            <div class="bg-[#171717] p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">👥 Student Management</h3>
                <p class="text-gray-400 text-sm">Add, update, or delete student records and assign them to their appropriate grade level.</p>
            </div>
            <div class="bg-[#171717] p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">🏷️ Grade Management</h3>
                <p class="text-gray-400 text-sm">Create and manage grade levels which are linked to the student forms for accurate grouping.</p>
            </div>
            <div class="bg-[#171717] p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">📝 Attendance Management</h3>
                <p class="text-gray-400 text-sm">Search attendance records by year, month, and grade. Update individual statuses and export data to Excel.</p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col md:flex-row gap-4 mb-6">
            <a href="{{ route('login') }}" class="px-6 py-2 bg-white text-black rounded hover:bg-gray-200 transition text-center">Login</a>
            <a href="{{ route('register') }}" class="px-6 py-2 border border-gray-500 text-white rounded hover:bg-gray-700 transition text-center">Register</a>
            @auth
                <a href="{{ route('dashboard') }}" class="px-6 py-2 border border-gray-600 text-white rounded hover:bg-gray-700 transition text-center">Dashboard</a>
            @endauth
        </div>

        <!-- Footer Quote -->
        <p class="text-sm text-gray-500 italic text-center max-w-sm">
            “Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less.”
            <br><span class="not-italic font-medium text-white">— Marie Curie</span>
        </p>
    </div>

</body>
</html>
