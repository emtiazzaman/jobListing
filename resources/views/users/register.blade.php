<x-layout :title="'User Registeration | '">
    
    <x-breadcrumb/>
    <section class="contact-section section_padding">
        <div class="container">
    
            <div class="row align-content-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="contact-title">User Registration</h2>
                    <h5 class="mb-30"> Create an account to post and apply for jobs </h5>
                </div>
    
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="user-email" type="email"
                                        placeholder='Enter user email address'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="ful_name" type="text"
                                        placeholder='Enter full name Title'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password"
                                        placeholder='Enter your password'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="confirm_password" type="password"
                                        placeholder='Confirm password'>
                                </div>
                            </div>
    
                            
                            <div class="col-12">
                                <div class="form-group ">
                                    <label  class="inline-block text-lg mb-2">
                                        Profile Picture
                                    </label>
                                    <input type="file" class="form-control w-100 " name="profile-picture">
                                </div>
                            </div>
    
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="user_details" rows="6">About Yourself</textarea>
                                </div>
                            </div>
                           
                        </div>
    
                        <div class="form-group mt-3 text-center">
                            <button type="submit" class="button button-contactForm btn_4 boxed-btn3">
                               Register
                            </button>
                        </div>
    
                    </form>
                </div>
    
            </div>
        </div>
    </section>

</x-layout>
