 <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Contact Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Contact Form Form-->
                    <div class="default-form contact-form">
                        <h2>SEND US MESSAGE</h2>
                       
                        <form method="post" action="connect.php" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="firstName" name="firstName" value="" 
                                                placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="lastName" name="lastName" value="" 
                                                   placeholder="Last Name">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" name="email" value="" placeholder="Email">
                                            </div>
                                             <div class="form-group col-md-6 col-sm-6 col-xs-12"> 
                                                <label for="gender">Gender</label>
                                                   <div> 
                                                    <label for="male" class="radio-inline"> 
                                                        <input type="radio" name="gender" value="m" id="male" />Male
                                                    </label> 
                                                    <label for="female" class="radio-inline">
                                                        <input type="radio" name="gender" value="f" id="female" />Female
                                                    </label> 
                                                    <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others" />Others</label> 
                                                </div>
                                            </div>

                                             <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" id="password" name="password" value="" 
                                                placeholder="Password">
                                            </div>
                                             <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                    <input type="number" class="form-control" id="number" name="number" value="" placeholder="Number" />
                                                </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                 <input type="text" name="subject" id="subject" value="" 
                                                 placeholder="Subject">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <textarea name="message"></textarea>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <button type="submit" class="theme-btn btn-style-two">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                    </div>
                    
                </div>
                
                <!--Contact Column-->
                <div class="contact-column col-md-4 col-sm-12 col-xs-12">
                    
                    <!--Contact Info-->
                    <div class="contact-info">
                        <h2>ADDRESS</h2>
                        <ul>
                            <li class="address"><div class="icon"><span class="flaticon-map"></span></div> 10, Mc Donald Ave, Sunset Park, Brooklyn, Newyork</li>
                            <li><div class="icon"><span class="flaticon-technology"></span></div> +87 456 1230</li>
                            <li><div class="icon"><span class="flaticon-note"></span></div> Email: info@tallinnfinancial.com</li>
                            
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Map Section-->
    <section class="map-section">
        <!--Map Box-->
        <div class="map-box">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="8"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>