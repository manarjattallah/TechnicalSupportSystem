@extends('layouts.appnew')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .py-3 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .form-label {
            font-weight: bold;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-check-label {
            font-weight: normal;
        }

        .button button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            cursor: pointer;
        }

        .button button:hover {
            background-color: #0056b3;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }
        th, td {
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="py-3">
        <h1>قطع الغيار المستخدمة</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nameFormControlInput1" class="form-label">اسم القطعة</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="nameFormControlInput1" class="form-label">تاريخ التوفير</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="mb-3">
                <label class="form-label">طريقة التوفير</label><br>
                <div class="form-check">
                    <input type="checkbox" id="type1" name="type1" value="من المخزن" class="form-check-input">
                    <label class="form-check-label" for="type1">من المخزن</label><br>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="type2" name="type2" value="تم الشراء" class="form-check-input">
                    <label class="form-check-label" for="type2">تم الشراء</label><br>
                </div>
            </div>

            <div class="button">
                <button type="submit">احفظ</button>
            </div>
        </form>
    </div>
</body>
</html>


<div class="py-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">اسم القطعة</th>
      <th scope="col">تاريخ التوفير</th>
      <th scope="col"> طريقة التوفير</th>
    </tr>
  </thead>
  <tbody>
      <tr>
      <th scope="row">1</th>
      <td>'name'</td>
      <td>'date'</td>
      <td>'type'</td>
      </tr>


  </tbody>
</table>
</div>

@endsection
