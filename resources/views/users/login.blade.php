<x-layout :title="'Login | '">
    
    <x-breadcrumb/>


    <section class="contact-section section_padding">
        <div class="container">

            <div class="row align-content-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="contact-title">User Login</h2>
                    <h5 class="mb-30"> Create an account to post and apply for jobs </h5>
                </div>

                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="user-email" type="email"
                                        placeholder='User email'>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password"
                                        placeholder='Your password'>
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-group mt-3 text-center">
                            <button type="submit" class="button button-contactForm btn_4 boxed-btn">
                               Loigin
                            </button>
                        </div>
                        <div class="alert alert-success">
                            Not have an account? You should <a href="register-user.html" class="alert-link">Register</a> here.
                          </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

</x-layout>
