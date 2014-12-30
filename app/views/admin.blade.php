
<html>
<body>
<form action="/add">
    <input type="submit" value="new">
</form>


<table>
@foreach ($episodes as $episode)
        <tr><td>
            <form action="/delete/{{$episode->id}}">
                <input type="submit" value="delete">
            </form>
        </td><td>
                {{$episode->name}}
        </td><td>
                {{$episode->views}}
        </td></tr>
@endforeach
</table>

</body>
</html>