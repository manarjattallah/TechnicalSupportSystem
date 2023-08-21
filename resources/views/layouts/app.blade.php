<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            height: 40px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            padding: 20px;
        }

    </style>
</head>



    <body class="antialiased">
        {{-- <div class="navbar">
            <a href="/request-support">طلب خدمةالدعم الفني</a>
            <a href="/receive">استلام طلب الصيانة</a>
            <a href="/action">الاجراءات المتخذة في عملية الصيانة</a>
            <a href="/SpareParts">قطع الغيار المستخدمة</a>
            <a href="/handing">عملية تسليم الجهاز</a>
            <a href="/evaluation">تقييم عملية الصيانة</a>
            <a href="/query-requests">استعلام و ادارة طلبات الدعم الفني</a>
            <a href="/">الصفحة الرئيسية</a>

        </div>

        <div class="content">
            <!-- Content for each section goes here -->
            <section id="technical-support">
                <h2></h2>
                <!-- Add content related to technical support request here -->
            </section>

            <section id="receipt">
                <h2></h2>
                <!-- Add content related to receipt of request here -->
            </section>

            <section id="maintenance-actions">
                <h2></h2>
                <!-- Add content related to maintenance actions here -->
            </section>

            <section id="spare-parts">
                <h2></h2>
                <!-- Add content related to spare parts used here -->
            </section>

            <section id="handover">
                <h2></h2>
                <!-- Add content related to device handover here -->
            </section>

            <section id="evaluation">
                <h2>

                </h2>
                <!-- Add content related to evaluation process here -->
            </section>

            <section id="query-manage">
                <h2></h2>
                <!-- Add content related to query and manage requests here -->
            </section>
        </div> --}}
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
