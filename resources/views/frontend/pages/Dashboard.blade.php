@extends('frontend.layouts.Master')

@section('content')

<section>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($data as $item)
              <tr>
                    <th scope="row">{{$i++}}</th>
                <td>{{$item['cf_email']}}</td>
                <td>{{$item['cf_message']}}</td>
              </tr>
              <tr>
                @endforeach
            </tbody>
          </table>
    </div>
</section>

@endsection
