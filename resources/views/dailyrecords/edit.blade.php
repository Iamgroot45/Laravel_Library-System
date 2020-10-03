<!DOCTYPE html>
<html>
<head>
    <title>Dailyrecords</title>
</head>
<body>
    <form action="/dailyrecords/{{ $dailyrecord->id }}" method="POST">
       @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        @csrf
        @method('PUT')
        <label>ID:</label>
        <input type="text " name="id" value="{{ $dailyrecord->id }}" required placeholder = "id">
        <label>Staff ID:</label>
        <input type="text " name="staff_id" value="{{ $dailyrecord->staff_id }}"required placeholder = "Staff Id">
        <label>Date:</label>
        <input type="text " name="date" value="{{ $dailyrecord->date }}" required placeholder = "Date">
        <label>time In:</label>
        <input type="text " name="time In" value="{{ $dailyrecord->time In }}"required placeholder = "time In">
        <label>Time Out:</label>
        <input type="text " name="time Out" value="{{ $dailyrecord->time Out }}"required placeholder = "Time Out">


        <input type="submit" name="submit">
    </form>
</body>
</html>  