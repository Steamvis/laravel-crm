@extends('layouts.dashboard_without_company')

@section('content')
    <div class="card border-0 shadow-lg" style="margin-top: 10%;">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create a company!</h1>
                        </div>
                        <form class="user"
                              action="{{ route('company_register', app()->getLocale()) }}"
                              method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user
                            @error('name') border-danger" style="background-color: rgba(255,0,0,0.14)" @else" @enderror
                                    id="title"
                                    name="title"
                                    placeholder="Title"
                                    required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <select class="form-control border selectpicker"
                                            name="country_id"
                                            data-live-search="true"
                                            required
                                            title="{{ __('dashboard.general.forms.select country') }}">
                                        @foreach($countries as $country)
                                            <option
                                                value="{{ $country->id }}"
                                                data-content="<img
                                                class='mr-3'
                                                src='{{ $country->flag }}'
                                                alt='{{ $country->name }}'
                                                width='30px'>
                                                {{ $country->name }}">
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('dashboard.company.register company') }}
                            </button>
                        </form>
                        @include('partials.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
