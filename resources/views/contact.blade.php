@extends('layouts.app')

@section('title', 'Contact | Portfolio')

@section('content')
<section id="contact" class="contact sec-pad dynamicBg">
  <div class="main-container">
    <h2 class="heading heading-sec heading-sec__mb-med">
      <span class="heading-sec__main heading-sec__main--lt">Contact</span>
      <span class="heading-sec__sub heading-sec__sub--lt">
        Feel free to reach out if you have any questions or would like to work together
      </span>
    </h2>
    
    <div class="contact__form-container">
      @if(session('success'))
      <div style="background-color: #4CAF50; color: white; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
        {{ session('success') }}
      </div>
      @endif
      
      @if($errors->any())
      <div style="background-color: #f44336; color: white; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
        <ul style="margin: 0; padding-left: 20px;">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      
      <form action="{{ route('contact.submit') }}" method="POST" class="contact__form">
        @csrf
        <div class="contact__form-field">
          <label class="contact__form-label" for="name">Name</label>
          <input
            required
            placeholder="Enter Your Name"
            type="text"
            class="contact__form-input"
            name="name"
            id="name"
            value="{{ old('name') }}"
          />
        </div>
        <div class="contact__form-field">
          <label class="contact__form-label" for="email">Email</label>
          <input
            required
            placeholder="Enter Your Email"
            type="email"
            class="contact__form-input"
            name="email"
            id="email"
            value="{{ old('email') }}"
          />
        </div>
        <div class="contact__form-field">
          <label class="contact__form-label" for="message">Message</label>
          <textarea
            required
            cols="30"
            rows="10"
            class="contact__form-input"
            placeholder="Enter Your Message"
            name="message"
            id="message"
          >{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn--theme contact__btn">
          Submit
        </button>
      </form>
    </div>
  </div>
</section>
@endsection
