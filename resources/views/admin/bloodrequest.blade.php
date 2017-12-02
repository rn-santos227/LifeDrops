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
                        <tr>
                            <td>Recipient</td>
                            <td>Location</td>
                            <td>Blood Type</td>
                            <td>
                                <div class="input-group" style="margin-bottom: 2%;">
                                    <input id="txt_search" type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ old('search') }}">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger btn_search" type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Accept</span>
                                        </button>
                                        <button class="btn btn-danger btn_search" type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Reject</span>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection