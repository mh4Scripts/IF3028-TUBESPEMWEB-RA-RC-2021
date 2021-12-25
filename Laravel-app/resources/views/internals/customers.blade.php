<h1> Customers </h1>

    <form action="customers" method="POST">
        <input type="text" name="name">

        <button type="submit">Add customer</button>

        @csrf
    </form>

    {{ $errors->first('name') }}
    <ul>
        @foreach ($customers as $cus)
            <li>{{ $cus->laporan }} </li>
        @endforeach
    </ul>
