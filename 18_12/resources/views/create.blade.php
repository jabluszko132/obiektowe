<div>
    <form action='{{route('product.store')}}' method="post">
        @csrf
        <label>Imię: 
            <input type="text" name="firstName">
        </label>
        <label>Nazwisko: 
            <input type="text" name="lastName">
        </label>
        <input type="number" name="price" value='{{old('price')}}'>
    </form>
</div>
