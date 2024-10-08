<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add contacts</title>
</head>
<body>
  
    <h1>
    show details
   </h1>
   <div>
    <p>name = {{$contact['name']}}</p>
    <p>phone = {{$contact['phone']}}</p>
   </div>
   <div>
    <br>
    <a href='{{route('contacts.index')}}'>back to the index</a>
    

   </div>
   

</body>
</html>