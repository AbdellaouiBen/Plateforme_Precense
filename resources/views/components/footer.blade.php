<!-- Footer Section Begin -->
<footer class="footer-section " id="footer">
    <div class="footer__top">
        <div class="">
            <div class="row no-gutters">
                <div class="container col-lg-6 col-md-6 ">
                    <div class="  footer__top-call mt-3 mx-5">
                        @if(Session::has('formSent'))
                            <div class="text-center alert alert-success">
                                {{ Session::get('formSent') }}
                            </div>
                        @endif
                        <div class="text-center mb-5">
                            <h2>Do you have any questions ?</h2>

                            <h5>Tell us</h5>
                        </div>


                        <form action="{{route('form.store')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Firstname" name="firstname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Email address" name="email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Subject" name="sujet" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="message" id="" class="form-control" placeholder="Write your message."
                                        cols="30" rows="10"  required></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <div class="col-md-6 mx-auto">
                                    <button class="btn btn-block btn-primary text-white py-3 px-5 site-btn" type="submit">Send Message</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 mt-3">
                    <div class="footer__top-call mx-5">
                        <div class="text-center mb-5">
                            <h2>Where to find us ?</h2>

                                <h5>Here</h5>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.6933271876997!2d4.339036315727241!3d50.85536297953321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c275028d3%3A0xc7799151146ebf77!2sMolenGeek!5e0!3m2!1sfr!2sbe!4v1589589948179!5m2!1sfr!2sbe" height="415" style="border:0; border-radius: 15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            
                            {{-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20151.047591375514!2d-0.5735782106784704!3d50.85188881113048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875a4d10c96d8bf%3A0xe9a76e70e6b7cc5a!2sArundel%2C%20UK!5e0!3m2!1sen!2sbd!4v1584862449435!5m2!1sen!2sbd"
                                height="415" style="border:0; border-radius: 15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer__text set-bg" data-setbg="{{asset('img/footer-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer__text-about">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="{{asset('img/logo.png')}}" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida viverra maecen
                            lacus vel facilisis. </p>
                        <div class="footer__social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer__text-widget">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Press & Media</a></li>
                            <li><a href="#">News / Blogs</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer__text-widget">
                        <h5>Hosting</h5>
                        <ul>
                            <li><a href="#">Web Hosting</a></li>
                            <li><a href="#">Reseller Hosting</a></li>
                            <li><a href="#">VPS Hosting</a></li>
                            <li><a href="#">Dedicated Servers</a></li>
                            <li><a href="#">Cloud Hosting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer__text-widget">
                        <h5>cONTACT US</h5>
                        <ul class="footer__widget-info">
                            <li><span class="fa fa-map-marker"></span>{{$info->adresse_un}}<br />
                                {{$info->adresse_deux}}</li>
                            <li><span class="fa fa-mobile"></span> {{$info->tel}}</li>
                            <li><span class="fa fa-at"></span> {{$info->email}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__text-copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> 
                    All rights reserved | This template is made with <i class="fa fa-heart"
                        aria-hidden="true"></i> by <a href="https://molengeek.com" target="_blank">MolengeekTeam</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->