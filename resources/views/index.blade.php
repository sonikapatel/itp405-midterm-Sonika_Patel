<html>
@foreach ($books as $book)
 {{$book->title}}
     <li> {{$book->author->first_name}}  {{$book->author->last_name}} </li>
     <li> {{$book->publisher->id}}</li>
@endforeach
/*doesn't let me access name when i replace 'id' with name */
</html>
