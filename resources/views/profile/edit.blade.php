<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for additional styling */
        body {
            background-color: #f3f4f6;
        }

        .header {
            background-color: #1f2937;
            color: #ffffff;
        }

        .profile-card {
            background-color: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
        }

        .profile-header {
            background-color: #3b82f6;
            border-radius: 0.75rem 0.75rem 0 0;
            padding: 1.5rem;
        }

        .profile-header h2 {
            color: #ffffff;
        }

        .form-input {
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            padding: 0.5rem 0.75rem;
            width: 100%;
        }

        .form-input:focus {
            border-color: #3b82f6;
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
    </style>
</head>

<body>
    <header class="header py-6">
        <div class="container mx-auto px-6">
            <h2 class="font-semibold text-2xl leading-tight">
                {{ __('Profile') }}
            </h2>
        </div>
    </header>

    <main class="py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="profile-card overflow-hidden">
                    <div class="profile-header">
                        <h2 class="font-semibold text-xl">
                            Update Profile Information
                        </h2>
                    </div>
                    <div class="p-6">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="profile-card overflow-hidden">
                    <div class="profile-header">
                        <h2 class="font-semibold text-xl">
                            Update Password
                        </h2>
                    </div>
                    <div class="p-6">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="profile-card overflow-hidden col-span-1 md:col-span-2">
                    <div class="profile-header">
                        <h2 class="font-semibold text-xl">
                            Delete Account
                        </h2>
                    </div>
                    <div class="p-6">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Tambahkan link JavaScript Anda di sini, jika ada -->
</body>
</html>