@if (count($contacts) == 0)
<tr>
    There are no contact
</tr>

@elseif (count($contacts) > 1)
<?php foreach ($contacts as $id => $contact):?>

<tr>
    <th scope="row"> {{$id}}</th>

    <td>{{$contact['name']}} </td>

    <td>{{$contact['phone']}}</td>
    <td><a href='{{route('contacts.show', $id)}}'>Show {{$id}}</a></td>
</tr>

<?php endforeach ?>

@endif




