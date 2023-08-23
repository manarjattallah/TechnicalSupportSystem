@extends('layouts.Dashboard')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <style>
        .rating {
            display: inline-block;
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 30px;
            color: #ccc;
            float: right;
        }

        .rating label:before {
            content: '\2605';
            padding: 5px;
            font-size: 35px;
            color: #000;
            transition: all .2s;
        }

        .rating input:checked ~ label:before {
            color: #FFD700;
        }

        .rating:not(:checked) label:hover:before, .rating:not(:checked) label:hover ~ label:before {
            color: #FFD700;
        }

        .rating input:checked + label:hover:before, .rating input:checked ~ label:hover:before, .rating label:hover ~ input:checked ~ label:before, .rating input:checked ~ label:hover ~ label:before {
            color: #FFED85;
        }

        .comments {
            margin-top: 20px;
        }

        .comments textarea {
            width: 100%;
            height: 100px;
        }

        .button {
            margin-top: 20px;
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
    <br><br>
    <div class="container">
    <h1>تقييم</h1>

    <div class="rating">
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1"></label>
    </div>
    <div class="comments">
        <label for="comment">الملاحظات</label><br>
        <textarea name="comment" id="comment"></textarea>
        <br><br>
        <label for="evaluator">مقيم الانجاز:</label>
        <input type="text" name="evaluator" required>
         <label for="timeOfevaluat">تاريخ التقييم:</label>
            <input type="date" name="timeOfevaluat" required>

    </div>
    <div class="button">
        <button type="submit">إرسال</button>
    </div><br>



        <table>
            <thead>
                <tr>
                    <th>مقيم الانجاز</th>
                    <th>تاريخ التقييم </th>
                    <th>درجة التقييم</th>
                    <th>الملاحظات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>2023-08-20</td>
                    <td>4</td>
                    <td>Good job!</td>
                </tr>
            </tbody>
        </table>

    </div>
</body>
</html>
@endsection
