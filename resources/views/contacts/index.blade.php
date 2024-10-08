<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all contacts</title>
</head>
<body>
  
    <h1>
    App contacts
   </h1>
   <div>
 
    <a href='{{route('contacts.create')}}'>add contacts</a>
    <?php foreach ($contacts as $key => $contact): ?>  
    <p> {{$contact['id']}}  <a href=' {{route('contacts.show', $key)}} '>show </a></p>
    <?php endforeach ?>

   </div>
   

</body>
</html>