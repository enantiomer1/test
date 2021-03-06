@extends('front.layouts.app')

@section('content')
    <div class="section">
        <div class="container">
             <h3 class="title pb-2 text-center">{{ __('Contact US') }}</h3>
        <div class="separator separator-primary"></div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mt-4">
                        <div class="card-header">{{ __('Send us a message:') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('contact.send') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>
                                    <div class="col-md-6">
                                        <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>
                                    <div class="col-md-6">
                                        <textarea name="message" id="message" rows="5" class="form-control" value={{old('message')}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary box-shadow">
                                            {{ __('Send Message') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
