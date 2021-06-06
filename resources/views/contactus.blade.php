@extends('layout2')
@section('content')
    <section class="section is-sm section-contact">
        <img class="section-particle top-0" src="../assets/images/others/particle.svg" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    @foreach ($contacts as $contact)
                        <div class=" items-contact">
                            <div class="section-head">
                                <h2 class="section-title ">We're Here</h2>
                                <p class="section-desc mb-0">{{ $contact->time }}</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-item">
                                    <h6>Phone Number</h6>
                                    <p class="contact-item-info">{{ $contact->phone }}</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-item">
                                    <h6>Email Adress</h6>
                                    <p class="contact-item-info">{{ $contact->email }}</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-item">
                                    <h6>Local Adress</h6>
                                    <p class="contact-item-info">{{ $contact->location }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <label>How can I help you?</label>
                            <select required="" name="service-requested" class="form-control has-style1 " id="service">
                                <option value="">Select</option>
                                <option value="Logo Design">Logo Design</option>
                                <option value="Sound Branding">Sound Branding</option>
                                <option value="Front-End Development">Front-End Development</option>
                                <option value="Marketing Digital">Marketing Digital</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Your Name</label>
                            <input name="email" placeholder="ayoub " class="form-control has-style1" id="how" type="text">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" placeholder=" example@mail.com" class="form-control has-style1" id="how"
                                type="text">
                        </div>
                        <label>Tell me more about your project</label>
                        <textarea name="textarea" class="textarea has-style1" placeholder="How can we help?"></textarea>
                        <div class="form-group">
                            <button class="btn btn-primary btn-round">
                                <span> Send me → </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
