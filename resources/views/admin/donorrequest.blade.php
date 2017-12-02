@extends('layouts.app')
@section('content')

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/donor.js') }}"></script>

    <header>
        <h1>Here are your donaton requests requests, John.</h1>
    </header>

    <div class='container'>
        <div class='row'>
            <div class='col-md-10'>
                <table class='table table-hover'>
                    <thead>
                        <tr>
                            <th>Recipient</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>
                                @php
                                    $recipient = App\Recipient::where('id', $item->recipient_id)->first();
                                    echo $recipient->first_name . ' ' . $recipient->last_name;

                                @endphp
                            </td>
                            <td>{{$item->location}}</td>
                            <td>{{$item->blood_type}}</td>
                            <td>
                                <div class="input-group" style="margin-bottom: 2%;">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger btn_search" data-toggle="modal" data-target="#dialog-info" type="button">
                                            <i class="fa fa-search" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Accept</span>
                                        </button>
                                        <button class="btn btn-danger btn_search" data-toggle="modal" data-target="#dialog-info">
                                            <i class="fa fa-search" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Reject</span>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@include('dialogs.info')
@endsection