<form action="hello" method="POST">
    @csrf()
    <input type="submit">
    <input type="hidden" name="_method" value="PUT">
</form>