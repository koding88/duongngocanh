@extends('layouts.home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'GET 24/7 SUPPORT'], ['heading' => 'Contact us'])

        <!-- Contact -->
        <div class="contact">
            <div class="main-content">
                <div class="body">
                    <div class="contact-left">
                        <div class="form-title">
                            <h2>Have you any question?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est,
                                assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore,
                                esse natus!</p>
                        </div>
                        <div class="contact-form">
                            <form action="" method="post">
                                <p>
                                    <input type="text" placeholder="Name" name="name" id="name">
                                    <input type="email" placeholder="Email" name="email" id="email">
                                </p>
                                <p>
                                    <input type="tel" placeholder="Phone" name="phone" id="phone">
                                    <input type="text" placeholder="Subject" name="subject" id="subject">
                                </p>
                                <p>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </p>
                                <p>
                                    <input type="submit" value="Submit" class="btn btn-cart">
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="contact-right">
                        <div class="contact-form-right">
                            <div class="contact-form-box">
                                <h4><i class="fas fa-map"></i> Shop Address</h4>
                                <p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
                            </div>
                            <div class="contact-form-box">
                                <h4><i class="far fa-clock"></i> Shop Hours</h4>
                                <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                            </div>
                            <div class="contact-form-box">
                                <h4><i class="fas fa-address-book"></i> Contact</h4>
                                <p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Find our location -->
        <div class="find-location">
            <div class="main-content">
                <div class="body">
                    <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
                </div>
            </div>
        </div>

        <!-- Embed maps -->
        <div class="google-map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2217589767038!2d105.78777057460046!3d21.023811087949813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b329f68977%3A0x6ddf5ff1e829fc56!2zxJDhuqFpIEjhu41jIEdyZWVud2ljaCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1681727503610!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </main>
@endsection
