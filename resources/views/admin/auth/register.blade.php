<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ config('app.name', 'Medical Professionals') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-white">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">
                    {{ App::make('companysetting') ? App::make('companysetting')->companyfullname : '8Queens' }}
                </h1>
                <p class="col-lg-10 fs-5">
                    {{ App::make('companysetting') ? App::make('companysetting')->companyfullname : '8Queens' }}
                    Doctors are skilled medical professionals who diagnose, treat, and prevent illnesses and injuries in patients.
They specialize in various fields of medicine such as cardiology, pediatrics, surgery, etc., based on their expertise and interests.
Doctors provide comprehensive patient care, including physical exams, diagnostic tests, medication prescriptions, and treatment plans.
They uphold ethical principles like patient confidentiality and informed consent while prioritizing patient well-being.
Through continuous learning, collaboration with healthcare teams, and advocacy for patient rights, doctors strive to improve patient health and promote wellness.
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <div class="card">
                    <div class="card-header">
                        Sign Up Form
                      </div>
                @livewire('admin.auth.register-livewire')
            </div>
            </div>
        </div>
</body>

</html>
