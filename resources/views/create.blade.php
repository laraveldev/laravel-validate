<h1>Ro'yhatdan o'tish</h1>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <label for="name">Ism:</label>
    <input type="text" name="name" placeholder="Name"><br><br>
    @error('name')
        {{$message}}
    @enderror
    <label for="age">Yosh:</label>
    <input type="text" name="age" placeholder="Age"><br><br>
    @error('age')
        {{$message}}
    @enderror
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="Email"><br><br>
    @error('email')
        {{$message}}
    @enderror
    <label for="password">Parol:</label>
    <input type="password" name="password" placeholder="Password"><br><br>
    <label for="photo">Rasm:</label>
    <input type="file" name="photo" placeholder="Photo"><br><br>
    @error('photo')
        {{$message}}
    @enderror
</form>
<h1>Mahsulot qo'shing</h1>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <label for="name">Mahsulot nomi:</label>
    <input type="text" name="product" placeholder="Name"><br><br>
    @error('product')
        {{$message}}
    @enderror
    <label for="price">Narxi:</label>
    <input type="text" name="price" placeholder="Price"><br><br>
    @error('price')
        {{$message}}
    @enderror
    <label for="date">Sana:</label>
    <input type="date" name="start_date" placeholder="Date"><br><br>
    @error('date')
        {{$message}}
    @enderror
    <button type="sumbit">Sumbit</button>
</form>