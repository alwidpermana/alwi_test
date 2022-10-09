<table border="1">
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        <th>created at</th>
        <th>is read</th>
        <th>read at</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->is_read }}</td>
            <td>{{ $item->read_at }}</td>
        </tr>
    @endforeach
</table>
<?php
    $string = 'QWERTYUIOP';
    echo strrev ( $string );
?>
<br>
<br>
