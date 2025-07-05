<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'ArTiKu' ?></title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css?ver=<?= time() ?>" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
        <style>
        /* PALETA WARNA */
        :root {
            --primary:rgb(0, 22, 148);      /* Biru utama */
            --primary-light:rgb(75, 122, 184); /* Biru  muda */
            --secondary: #808080;    /* Abu-abu */
            --light:rgb(255, 255, 255);        /* Abu-abu muda */
            --dark: #212529;         /* Hampir hitam */
            --success: #2ecc71;      /* Hijau */
            --danger: #e74c3c;       /* Merah */
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgb(0, 22, 148);
            color: var(--dark);
            line-height: 1.6;
        }

        /* NAVBAR MINIMALIS */
        .navbar {
            background: var(--primary);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 18px 0;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--light) !important;
            letter-spacing: -0.5px;
        }

        .nav-link {
            font-weight: 500;
            color: var(--light) !important;
            padding: 8px 15px !important;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .nav-link:hover {
            background: rgba(199, 208, 250, 0.20);
            color: var(--light) !important;
        }

       

        /* CARD MINIMALIS */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            background: rgb(248, 248, 248);
            margin-bottom: 25px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.08);
        }

        .card-header {
            background: aliceblue;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 20px 25px;
            font-weight: 600;
            color: var(--dark);
        }

        .card-body {
            padding: 20px;
        }

        /* FORM MINIMALIS */
        .form-control {
            border: 1px solid #e2e8f0;
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
        }

        .btn {
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.5s;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
        }

        .btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
        }

        /* FOOTER MINIMALIS */
        footer {
            background: var(--dark);
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }

        footer h5 {
            margin-bottom: 15px;
            font-weight: 600;
        }

        footer .social-icons a {
            color: white;
            margin-right: 15px;
            font-size: 18px;
            transition: opacity 0.5s;
        }

        footer .social-icons a:hover {
            background: var(--primary);
            opacity: 0.8;
        }

        /* SPACING LEGA */
        .container {
            padding: 0 20px;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }
        
        /* Login Page */
        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg,rgb(28, 0, 185),rgb(147, 141, 253));
            padding: 2rem 0;
        }
        
        .login-card {
            border-radius: 1rem;
            box-shadow: 0 1rem 3rem rgba(0,0,0,0.175);
            overflow: hidden;
            background: white;
        }
        
        .login-header {
            background: var(--primary);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .login-body {
            padding: 2rem;
        }
        
        /* UTILITY CLASSES */
        .icon-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            background: rgba(67, 97, 238, 0.1);
            color: var(--primary);
            font-size: 24px;
        }

        .shadow-soft {
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }
        
        .text-primary {
            color: var(--primary) !important;
        }
        
        .bg-primary {
            background-color: var(--primary) !important;
        }
        
        .badge-primary {
            background-color: var(--primary);
        }
        
        .badge-success {
            background-color: var(--success);
        }
        
        .badge-warning {
            background-color: var(--warning);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .sidebar {
                min-height: auto;
                position: relative;
            }
            
            .main-content {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>