@extends('layouts.appnew')

@section('content')
    <title>استلام طلب الصيانة</title>

    <div class="container">
        <h1>استلام طلب الصيانة</h1>
        <form id="maintenanceForm">
            <label for="personInCharge">المكلف بالصيانة:</label>
            <input type="text" name="personInCharge" required>
            <label>مكان الصيانة:</label>
<input type="checkbox" name="placeOfMaintenance[]" value="samePlace"> نفس المكان
<input type="checkbox" name="placeOfMaintenance[]" value="workshop"> الورشة
<input type="checkbox" name="placeOfMaintenance[]" value="external"> خارجي

            <label for="timeOfReceipt">وقت الاستلام:</label>
            <input type="text" name="timeOfReceipt" required>
            <label for="recipient">المستلم:</label>
            <input type="text" name="recipient" required>
            <label for="receivingDevice">الجهاز المستلم:</label>
            <input type="text" name="receivingDevice" required>
            <label for="priority">اولوية الصيانة:</label>
            <select name="priority">
                <option value="low">ضعيفة</option>
                <option value="medium">متوسطة</option>
                <option value="high">عالية</option>
            </select><br>

            <button type="button" onclick="addData()"> + </button>
            <br><br>
        </form>
        <table id="dataTable">
            <thead>
                <tr>
                    <th>المكلف بالصيانة</th>
                    <th>مكان الصيانة</th>
                    <th>وقت الاستلام</th>
                    <th>المستلم</th>
                    <th>الجهاز المستلم</th>
                    <th>اولوية الصيانة</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be added dynamically -->
            </tbody>
        </table>
    </div>

    <script>
        function addData() {
    const form = document.getElementById('maintenanceForm');
    const table = document.getElementById('dataTable').getElementsByTagName('tbody')[0];

    const personInCharge = form.personInCharge.value;
    const placeOfMaintenance = Array.from(form.querySelectorAll('input[name="placeOfMaintenance[]"]:checked')).map(checkbox => checkbox.value).join(', ');
    const timeOfReceipt = form.timeOfReceipt.value;
    const recipient = form.recipient.value;
    const receivingDevice = form.receivingDevice.value;
    const priority = form.priority.value;
    const newRow = table.insertRow(table.rows.length);
    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
    const cell4 = newRow.insertCell(3);
    const cell5 = newRow.insertCell(4);
    const cell6 = newRow.insertCell(5);
    cell1.innerHTML = personInCharge;
    cell2.innerHTML = placeOfMaintenance;
    cell3.innerHTML = timeOfReceipt;
    cell4.innerHTML = recipient;
    cell5.innerHTML = receivingDevice;
    cell6.innerHTML =priority;

    form.reset();
}

    </script>

@endsection
