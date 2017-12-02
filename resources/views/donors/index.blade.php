@extends('layouts.app')
@section('content')

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/donor.js') }}"></script>


    <div class='row' style='padding-top: 60px;'>

        @if($success == 1)
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Success
            </div>
        @endif
        <div class='col-md-8 col-lg-8'>
            <div class='row'>
               <form action="/donor" method="get">
                    {{ csrf_field() }}
                <div lass='col-md-5 col-lg-5'>
                <div class="input-group" style="margin-bottom: 2%;">

                    <input id="txt_search" type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ old('search') }}">
                    <span class="input-group-btn">
                        <button class="btn btn-danger btn_search" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Search</span>
                        </button>
                    </span>
                </div>
                </div>             
            </div>
            </form>
            <table class = "table table-hover">
                <h3 style="color: #bf5329;">Blood Banks</h3> 
                <thead>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr style="cursor: pointer;" id='{{$item->id}}' class="cards">
                            <td><img src="{{ asset('images/defaults/hospital.jpg')}}" alt="" width='100' height='100'>
                            </td>
                            <td><h3 style="color: #bf5329;">{{$item->name}}</h3>
                                <p>{{$item->location}}</p>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                    
                </tbody>
            </table>
            <center>{{$items->links()}}<center>
            
        </div>
        <div class='col-md-4 col-lg-4'>
            <div class='well text-center'>
                <img src="{{ asset('images/defaults/user.jpg')}}" alt="" width='150' height='150' style='border-radius: 50%;'>
                <h1>John Doe</h1>
                <p>Type A</p>
            </div>
        </div>
    </div>


@include('donors.create')
@endsection