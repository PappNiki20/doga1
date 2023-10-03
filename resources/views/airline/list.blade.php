@foreach ($airlines as $airline)
    <form action="/api/airline/{{$airline->airline_id}}" method="post">
        @csrf
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$airline->name}}">
        </div>
    </form>
@endforeach