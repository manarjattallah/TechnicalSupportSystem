@extends('layouts.appnew')

@section('content')
    <title>Actions Taken Interface</title>

    <div class="container">
        <h1>الاجراءات المتخذة ضمن عملية الصيانة</h1>
        <form id="actionsForm">

            <label for="description">الاجراء المتخذ:</label>
            <textarea name="description" rows="4" required></textarea>
            <label>حالة الاجراء:</label>
            <input type="checkbox" name="status" value="completed">منجز
            <input type="checkbox" name="status" value="UnCompleted"> غير منجز
            <label for="actionDate">تاريخ الاجراء:</label>
            <input type="date" name="actionDate" required>

            <label for="relatedPerson">منفذ الاجراء:</label>
            <select name="relatedPerson">
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


            const description = form.description.value;
            const status = form.status.checked ? 'Completed' : 'Not Completed';
            const actionDate = form.actionDate.value;
            const relatedPerson = form.relatedPerson.value;


            const newRow = table.insertRow(table.rows.length);

            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);
            const cell5 = newRow.insertCell(4);



            cell2.innerHTML = description;
            cell3.innerHTML = status;
            cell4.innerHTML = actionDate;
            cell5.innerHTML = relatedPerson;


            form.reset();
        }
    </script>

@endsection
