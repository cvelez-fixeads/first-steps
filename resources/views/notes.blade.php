<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<h>Notes</h>
</body>
<h2>Notes:</h2>
<ul>
    @foreach($notes as $note)
        <li>
            {{$note->note}}
        </li>
    @endforeach
</ul>
<form method="POST">
    {!! csrf_field() !!}
    <textarea></textarea>
    <button type="submit"> Create note</button>
</form>
</html>
