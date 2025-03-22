<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: #f5f5f5;
            color: #333;
        }

        .header {
            background: #007BFF;
            color: white;
            padding: 20px;
        }

        .hero {
            text-align: center;
            padding: 50px 20px;
        }

        .hero h1 {
            font-size: 3rem;
            color: #007BFF;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 20px 0;
        }

        .btn-primary-custom {
            background: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }

        .features {
            margin: 50px 0;
        }

        .feature i {
            font-size: 40px;
            color: #007BFF;
            margin-bottom: 10px;
        }

        .contact {
            padding: 50px 20px;
            background: #007BFF;
            color: white;
        }

        .contact input,
        .contact textarea {
            width: 100%;
            max-width: 400px;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .contact button {
            background: white;
            color: #007BFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header class="header text-center">
        <h1>Institute Management System</h1>
    </header>

    <section class="hero">
        <h1>Efficiently Manage Your Institute</h1>
        <p>Streamline student enrollments, course management, and financial tracking with ease.</p>
        <a href="#contact" class="btn btn-primary-custom">Get Started</a>
    </section>

    <section class=" container">
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature bg-white p-4 rounded shadow-sm">
                    <i class="fa fa-book"></i>
                    <h3>Course Management</h3>
                    <p>Easily add, edit, and manage courses with pricing details.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature bg-white p-4 rounded shadow-sm">
                    <i class="fa fa-user"></i>
                    <h3>Student Enrollment</h3>
                    <p>Enroll students quickly using a unique phone number as an ID.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature bg-white p-4 rounded shadow-sm">
                    <i class="fa fa-money-bill"></i>
                    <h3>Fee Tracking</h3>
                    <p>Monitor student payments, generate receipts, and manage cash flow.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact text-center">
        <h2>Contact Us</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control mb-3" placeholder="Your Name">
                    <input type="email" class="form-control mb-3" placeholder="Your Email">
                    <textarea class="form-control mb-3" rows="4" placeholder="Your Message"></textarea>
                    <button class="btn btn-light">Send Message</button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
