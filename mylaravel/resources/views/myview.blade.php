<h1>My ConTroller</h1>
<h1>myinput: {{ $myinput; }}</h1>
<h1>myvalue: {{ $myvalue; }}</h1>
<form method="post"
        action="{{ url('/mycontroller') }}">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">submit</button>    
</form>