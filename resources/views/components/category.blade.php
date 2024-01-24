@props(['all_job_data'])
@php
    $all_job_locations = $all_job_data->unique('location');
    $all_job_category = $all_job_data->unique('category');
@endphp
<div class="catagory_area">
    <div class="container">
        <form action="/" method="GET">
            <div class="row cat_search">
                    <div class="col-lg-3 col-md-4">
                        <div class="single_input">
                            <input type="text" name="keyword" placeholder="Search keyword">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="single_input">
                            <select class="wide" name="location">
                                <option data-display="Location" readonly></option>
                                <option value="All" >All</option>
                                @foreach ($all_job_locations as $locations)
                                    <option value="{{$locations->location}}"> {{$locations->location}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="single_input category-search">
                            <select class="wide d-none" id="category-search-list" name="category" multiple>
                                <option value="All" >All</option>
                                @foreach ($all_job_category as $categories)
                                    <option value="{{$categories->category}}"> {{$categories->category}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="job_btn">
                            <input type="submit" class="boxed-btn3" value="Find Job">
                        </div>
                    </div>
            </div>
        </form>

        <div class="row">
            <div class="col-lg-12">
                <div class="popular_search d-flex align-items-center">
                    <span>Popular Search:</span>
                    <ul>
                        <li><a href="#">Design & Creative</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Administration</a></li>
                        <li><a href="#">Teaching & Education</a></li>
                        <li><a href="#">Engineering</a></li>
                        <li><a href="#">Software & Web</a></li>
                        <li><a href="#">Telemarketing</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<!--/ catagory_area -->