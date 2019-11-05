<!doctype html>
<html>
    <head>
    </head>
    <body>
        <ul>
        @foreach($products as $p)	
        	<li>{{$p->name}}</li>
        @endforeach
        </ul>
        {{$products->links()}}
    </body>
</html>
