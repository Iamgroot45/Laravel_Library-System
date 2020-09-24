<!DOCTYPE html>
<html>
<head>
    <title>Dailyrecords</title>
</head>
<body>
    <form action="/dailyrecords/{{ $dailyrecord->id }}" method="POST">
        @csrf
        @method('PUT')
        <label>ID:</label>
        <input type="text " name="id" value="{{ $dailyrecord->id }}">
        <label>Staff ID:</label>
        <input type="text " name="staff_id" value="{{ $dailyrecord->staff_id }}">
        <label>Date:</label>
        <input type="text " name="date" value="{{ $dailyrecord->date }}">
        <label>time In:</label>
        <input type="text " name="time In" value="{{ $dailyrecord->time In }}">
        <label>Time Out:</label>
        <input type="text " name="time Out" value="{{ $dailyrecord->time Out }}">


        <input type="submit" name="submit">
    </form>
</body>
</html>  