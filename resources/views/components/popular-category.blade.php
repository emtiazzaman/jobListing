@props(['categories'])
<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-40">
                    <h3>Popular Categories</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $category)
    
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4>{{ $category->name }}</h4></a>
                    <p> <span>{{ $category->jobs->count() }}</span> Available position</p>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
<!-- popular_catagory_area_end  -->