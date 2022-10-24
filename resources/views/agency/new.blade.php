<form action="/api/agencies" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Ügynökség">
    <input type="text" name="country" placeholder="Ország">
    <input type="text" name="type" placeholder="Típus">
    <!-- <select name="agency_id" placeholder="Agency Id">
        @foreach ($agencies as $agency)
            <option value="{{$agency->agency_id}}"
            >{{$agency->name}}</option>
        @endforeach
    </select> -->

    <!-- <select name="user_id" placeholder="User Id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select> -->

    <!-- <select name="country" placholder="country">
        @foreach ($agencies as $agency)
            <option value="{{$agency->agency_id}}">{{$agency->country}}</option>
        @endforeach
    </select>
    <select name="type" placholder="type">
        @foreach ($agencies as $agency)
            <option value="{{$agency->agency_id}}">{{$agency->type}}</option>
        @endforeach
    </select> -->
    <input type="submit" value="ok">
</form>