@extends('layouts.Dashboard')

@section('content')
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
    <title>Actions Taken Interface</title>

    <div class="container">
<br><br>
        <h1>الاجراءات المتخذة ضمن عملية الصيانة</h1>
        <form id="actionsForm">

            <label for="description">الاجراء المتخذ:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            <label>حالة الاجراء:</label>
            <input type="checkbox" name="status" id="status" value="completed">منجز/غير منجز

            <label for="actionDate">تاريخ الاجراء:</label>
            <input type="date" name="actionDate" id = "actionDate" required>

            <label for="relatedPerson">منفذ الاجراء:</label>
            <select name="relatedPerson" id ="relatedPerson">
                <!-- Populate this dropdown with data from the previous form's table -->
                <option value="person1">Person 1</option>
                <option value="person2">Person 2</option>
                <option value="person3">Person 3</option>
            </select>



            <button type="button" onclick="addAction()">  +  </button>
        <br>
        <br>
        </form>
        <table id="actionsTable">
            <thead>
                <tr>

                    <th>وصف الاجراء</th>
                    <th>حالة الاجراء</th>
                    <th>تاريخ الاجراء</th>
                    <th>منفذ الاجراء</th>

                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be added dynamically -->
            </tbody>
        </table>
    </div>

    <script>
        function addAction() {
            const form = document.getElementById('actionsForm');
            const table = document.getElementById('actionsTable').getElementsByTagName('tbody')[0];


          //  const description  =form.description.value;
          const description  = document.getElementById('description').value;
            const status = document.getElementById('status').checked ? 'Completed':'uncompleted' ;
            const actionDate =  document.getElementById('actionDate').value;
            const relatedPerson = document.getElementById('relatedPerson').value;


            const newRow = table.insertRow(table.rows.length);
alert(table.rows.length);
            const cell2 = newRow.insertCell(0);
            const cell3 = newRow.insertCell(1);
            const cell4 = newRow.insertCell(2);
            const cell5 = newRow.insertCell(3);



            cell2.innerHTML = description;
            cell3.innerHTML = status;
            cell4.innerHTML = actionDate;
            cell5.innerHTML = relatedPerson;


            form.reset();
        }
    </script>

@endsection
