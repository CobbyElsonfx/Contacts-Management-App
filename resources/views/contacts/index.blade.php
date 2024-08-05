<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Contacts</title>
</head>
<body>
    <h1>All Contacts Page</h1>
    <ul>

    <?php foreach($contacts as $id =>  $contact): ?>
        <li>{{$contact['name']}} | {{$contact['phone']}}  <a  href= '{{route('contacts.show', $id)}}'>Show {{$id}}</a></li>

    <?php endforeach ?>

    </ul>
    
</body>
</html> 