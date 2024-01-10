<x-layout :title="'Create Job | '">
    
    <x-breadcrumb :bread_name="'Create job'"/>

    <section class="contact-section section_padding">
        <div class="container">
            <form action="">
            <div class="row align-content-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="contact-title">Create a New Job</h2>
                    <h5 class="mb-30">Create new job with appropriate information</h5>
                </div>

                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="name" type="text"
                                        placeholder='Enter company name'>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group ">
                                    <label for="logo" class="inline-block text-lg mb-2">
                                        Company Logo
                                    </label>
                                    <input type="file" class="form-control w-100 " name="logo">
                                </div>
                            </div>

                       <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="job_title" type="text"
                                        placeholder='Enter Job Title'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="location" type="text"
                                        placeholder='Enter Location'>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                
                                    <select class="w-100" name="category">
                                        <option selected disabled>Select the job Categories</option>
                                        <option value=" 1">City</option>
                                        <option value="1">Dhaka</option>
                                        <option value="1">Dilli</option>
                                        <option value="1">Newyork</option>
                                        <option value="1">Islamabad</option>
                                    </select>
                          
                            </div>
                            <div class="col-12 form-group">
                               
                                    <select class="w-100" name="experience">
                                        <option selected disabled>Select the candidate job experience</option>
                                        <option value=" 1">City</option>
                                        <option value="1">Dhaka</option>
                                        <option value="1">Dilli</option>
                                        <option value="1">Newyork</option>
                                        <option value="1">Islamabad</option>
                                    </select>
                              
                            </div>
                            
                            <div class="col-12 form-group">
                               
                                    <select class="w-100" name="job_type">
                                        <option selected disabled>Select the candidate job type</option>
                                        <option value=" 1">City</option>
                                        <option value="1">Dhaka</option>
                                        <option value="1">Dilli</option>
                                        <option value="1">Newyork</option>
                                        <option value="1">Islamabad</option>
                                    </select>
                                
                            </div>

                            <div class="col-12 form-group">
                               
                                <select class="w-100" name="qualification">
                                    <option selected disabled>Qualification</option>
                                    <option value=" 1">City</option>
                                    <option value="1">Dhaka</option>
                                    <option value="1">Dilli</option>
                                    <option value="1">Newyork</option>
                                    <option value="1">Islamabad</option>
                                </select>
                            
                        </div>

                            <div class="col-12 form-group ">
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="gender"  value="male">
                                    <label class="form-check-label" >Male</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"  value="female">
                                    <label class="form-check-label" >Female</label>
                                  </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="yearly_salary" type="number"
                                        placeholder='Minimum Yearly Salary(BDT)'>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="vacancy" type="number"
                                        placeholder="vacancy">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="description" rows="6">Job Description</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="form-group mt-3 text-center">
                            <button type="submit" class="button button-contactForm btn_4 boxed-btn3">
                               Create Job
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </form>
    </section>

</x-layout>