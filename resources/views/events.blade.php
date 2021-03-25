@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Events') }}</div>
                    <table class="table">
                        <thead class="thead-dark">

                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actor</th>
                            <th scope="col">Buy Ticket</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)

                                <tr>
                                    <td>{{$event->name}}</td>
                                    <td>{{$event->location->name}}</td>
                                    <td>{{$event->date}}</td>
                                    <td>{{$event->description}}</td>
                                    <td>{{$event->price}}</td>
                                    <td>
                                    @foreach($event->event_actor as $actor)
                                            {{$actor->actor->name}} <br />
                                    @endforeach
                                    </td>
                                   <td>
                                        <form action="/ticket/{{$event->id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Buy Ticket</button>
                                        </form>
                                    </td>

                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
