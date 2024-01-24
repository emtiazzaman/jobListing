@props(['candidates'])
<div class="featured_candidates_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-40">
                    <h3>Featured Candidates</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="candidate_active owl-carousel">
                @foreach ($candidates as $candidate)
 
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{ asset("/storage/$candidate->profile_picture") }}" alt="profile_pic">
                        </div>
                        <a href="#"><h4>{{ $candidate->name }}</h4></a>
                        <p>{{ $candidate->current_profession }}</p>
                    </div>
                  
                @endforeach   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- featured_candidates_area_end  -->