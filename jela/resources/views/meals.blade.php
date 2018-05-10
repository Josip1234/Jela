<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Korisnik
 * Date: 9.5.2018.
 * Time: 15:45
 */

?>
<h1>Lista jela na hrvatskom jeziku</h1>
<ol>
@foreach($meals as $meal)
        <li>{{$meal->title}}</li>
        <ul><li>{{$meal->description}}</li>
        <li>{{$meal->status}}</li>

        </ul>
    @endforeach
<ol>
</body>
</html>