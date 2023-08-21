@extends('layouts.appnew')

@section('content')
    <div class="container">
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
@endsection

