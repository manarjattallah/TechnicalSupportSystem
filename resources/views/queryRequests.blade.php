@extends('layouts.Dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استعلام و ادارة طلبات الدعم الفني</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <br><br>
        <h1>استعلام و ادارة طلبات الدعم الفني</h1>
        <form id="queryForm">
            <label for="requestingParty">الجهة الطالبة:</label>
            <select name="requestingParty">
                <option value="party1">Party 1</option>
                <option value="party2">Party 2</option>
                <!-- Add more options here -->
            </select>

            <label for="requestStatus">حالة الانجاز:</label>
            <select name="requestStatus">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <!-- Add more options here -->
            </select>

            <label for="requestPeriodFrom">فترة الطلب من:</label>
            <input type="date" name="requestPeriodFrom">
            <label for="requestPeriodTo">الى:</label>
            <input type="date" name="requestPeriodTo">

            <label for="problemOwner">صاحب المشكلة:</label>
            <input type="text" name="problemOwner">

            <label for="maintenancePlace">مكان الصيانة:</label>
            <select name="maintenancePlace">
                <option value="place1">Place 1</option>
                <option value="place2">Place 2</option>
                <!-- Add more options here -->
            </select>

            <label for="receiptPeriodFrom">فترة الصيانة من:</label>
            <input type="date" name="receiptPeriodFrom">
            <label for="receiptPeriodTo">الى:</label>
            <input type="date" name="receiptPeriodTo">

            <label for="recipient">المستلم:</label>
            <input type="text" name="recipient">

            <label for="receiptStatus">حالة الاستلام:</label>
            <select name="receiptStatus">
                <option value="received">Received</option>
                <option value="notReceived">Not Received</option>
                <!-- Add more options here -->
            </select>

            <label for="deliveryPeriodFrom">فترة التسليم من:</label>
            <input type="date" name="deliveryPeriodFrom">
            <label for="deliveryPeriodTo">الى:</label>
            <input type="date" name="deliveryPeriodTo">
            <button type="button" ">استعلام</button>
            <!-- <button type="button" onclick="queryRequests()">Query</button> -->
        </form>
        <div id="results">
            <p>Number of results: <span id="resultCount">0</span></p>
            <table id="queryResults">
                <thead>
                    <tr>
                        <th>معرف الطلب</th>
                        <th>الجهة الطالبة</th>
                        <th>صاحب المشكلة</th>
                        <th>تاريخ الطلب</th>
                        <th>حالة الانجاز</th>
                        <th>تاريخ الاستلام</th>
                        <th>مكان الصيانة الاخير</th>
                        <th>الفني المسؤول</th>
                        <th>تاريخ التسليم</th>
                        <th>الاجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows will be added dynamically -->
                </tbody>
            </table>
        </div>
    </div>

    <!--
<script>
    function queryRequests() {
        <script>
    function queryRequests() {
        const form = document.getElementById('queryForm');
        const formData = new FormData(form);

        // Send the form data to the Laravel route using AJAX
        fetch('{ route('query.requests') }}', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            const table = document.getElementById('queryResults').getElementsByTagName('tbody')[0];
            table.innerHTML = ''; // Clear existing rows

            // Populate the table with fetched data
            data.forEach(result => {
                const newRow = table.insertRow(table.rows.length);
                // Add cells and populate data based on the result object properties
                // Example: newRow.insertCell(0).innerHTML = result.request_id;
            });

            // Update result count
            document.getElementById('resultCount').textContent = data.length;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>
-->

</body>
</html>
@endsection
