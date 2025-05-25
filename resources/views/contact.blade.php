@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="contact sec-pad">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main">Contact</span>
            <span class="heading-sec__sub">
                Feel free to contact me by submitting the form below
            </span>
        </h2>
        <div class="contact__form-container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('contact.submit') }}" method="POST" class="contact__form">
                @csrf
                <div class="contact__form-field">
                    <label for="name" class="contact__form-label">Name</label>
                    <input
                        required
                        placeholder="Enter Your Name"
                        type="text"
                        class="contact__form-input"
                        name="name"
                        id="name"
                    />
                </div>
                <div class="contact__form-field">
                    <label for="email" class="contact__form-label">Email</label>
                    <input
                        required
                        placeholder="Enter Your Email"
                        type="email"
                        class="contact__form-input"
                        name="email"
                        id="email"
                    />
                </div>
                <div class="contact__form-field">
                    <label for="message" class="contact__form-label">Message</label>
                    <textarea
                        required
                        cols="30"
                        rows="10"
                        class="contact__form-input"
                        placeholder="Enter Your Message"
                        name="message"
                        id="message"
                    ></textarea>
                </div>
                <button type="submit" class="btn btn--theme contact__btn">
                    Submit
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
