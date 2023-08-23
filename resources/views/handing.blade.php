@extends('layouts.Dashboard')

@section('content')

    <div class="container">
        <br><br>
        <h1>نموذج تسليم الجهاز</h1>
        <form id="handoverForm">
            <label for="recipientName">اسم المستلم:</label>
            <input type="text" name="recipientName"  id="recipientName"required>
            <label for="receiptDate">تاريخ الاستلام:</label>
            <input type="date" name="receiptDate" id="receiptDate" required>

            <label for="receiptPlace">مكان الاستلام:</label>
            <input type="text" name="receiptPlace" id="receiptPlace"  required>

            <button type="button" onclick="addHandover()"> + </button>
            <br><br>
        </form>
        <table id="handoverTable">
            <thead>
                <tr>
                    <th>اسم المستلم</th>
                    <th>تاريخ الاستلام</th>
                    <th>مكان الاستلام</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be added dynamically -->
            </tbody>
        </table>
    </div>

    <script>
        function addHandover() {
            const form = document.getElementById('handoverForm');
            const table = document.getElementById('handoverTable').getElementsByTagName('tbody')[0];

            const recipientName = document.getElementById('recipientName').value;
            const receiptDate = document.getElementById('receiptDate').value;
            const receiptPlace=  document.getElementById('receiptPlace').value;



            const newRow = table.insertRow(table.rows.length);
            alert(table.rows.length);
            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);

            cell1.innerHTML = recipientName;
            cell2.innerHTML = receiptDate;
            cell3.innerHTML = receiptPlace;

            form.reset();
        }
    </script>


@endsection
