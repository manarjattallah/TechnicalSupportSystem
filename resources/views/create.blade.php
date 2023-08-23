@extends('layouts.Dashboard')

@section('content')

    <div class="container">
        <br><br>
        <h1>خدمة طلب الدعم الفني</h1>
        <form method="POST" action="/request-support">
            @csrf
            <label for="Title">عنوان المشكلة:</label>
            <input type="text" name="Title" required><br>
            <label for="issue">وصف المشكلة:</label>
            <textarea name="issue" rows="4" required></textarea><br>
            <label for="name">صاحب المشكلة:</label>
            <input type="text" name="name" required><br>
            <label for="place">مكان المكتب:</label>
            <input type="text" name="place" required><br>


            <label for="attachment">مرفقات الطلب:</label>
    <input type="file" name="attachment">
            <button type="submit">تقديم الطلب</button>
        </form>
        <div id="success-message" style="display: none;">تم تقديم الطلب بنجاح.</div>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('submit-form');
            var successMessage = document.getElementById('success-message');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Simulate form submission logic here, e.g., sending data to the server

                // Once the form submission is successful (simulated here),
                // show the success message and reset the form
                successMessage.style.display = 'block';
                form.reset();

                // Hide the success message after 3 seconds
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 3000);
            });
        });
        </script>

@endsection

