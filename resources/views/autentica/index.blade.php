<h1>usuarios</h1>
<hr>
<form action="{{route('autentica.gravar')}}" method="post">
    <input type="text" name="name" placeholder="nome">
    <br>
    <input type="text" name="email">
    <br>
    <input type="password" name="password">
    <br>
    <input type="password" name="password_confirm">
    <br>
    <input type="submit" value="gravar">
</form>