  @extends('front.LayOut.app')
  @section('title,services')
  @endsection
   @section('item_content')
       <!-- services section start -->
       <div class="services_section layout_padding">
           <div class="container">
               <h1 class="services_taital"><span style="color: #fcce2d">Our</span> Courses</h1>
               <div class="services_section_2">
                   <div class="row">
                       <div class="col-md-6">
                           <div class="image_main">
                               <img src="{{asset('Users/assets')}}/images/img-2.png" class="image_8" style="width:100%">
                               <div class="text_main">
                                   <div class="seemore_text">Art And Design</div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="image_main">
                               <img src="{{asset('Users/assets')}}/images/img-3.png" class="image_8" style="width:100%">
                               <div class="text_main">
                                   <div class="seemore_text">Science</div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-6">
                           <div class="image_main">
                               <img src="{{asset('Users/assets')}}/images/img-4.png" class="image_8" style="width:100%">
                               <div class="text_main">
                                   <div class="seemore_text">Business Stady</div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="image_main">
                               <img src="{{asset('Users/assets')}}/images/img-5.png" class="image_8" style="width:100%">
                               <div class="text_main">
                                   <div class="seemore_text">English Speaking</div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   @endsection

      <!-- services section end -->

      {{-- @extends('front.LayOut.app')
      @section('title', 'Services')
      
      @section('item_content')
          <!-- services section start -->
          <div class="services_section layout_padding">
              <div class="container">
                  <h1 class="services_taital"><span style="color: #fcce2d">Our</span> Courses</h1>
                  <div class="services_section_2">
                      <div class="row">
                        @foreach($courses as $course)
                        <div class="col-md-6">
                            
                                    <div class="seemore_text">
                                        <!-- Display the course name -->
                                        {{ $course->name }}
                                    </div>
                                    <div class="seemore_text">
                                        <!-- Display the course price -->
                                        Price: ${{ $course->price }}
                                    </div>
                                    <div class="seemore_text">
                                        <!-- Display the teacher name using the relationship -->
                                        Teacher: {{ $course->teachers->username ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    
                      </div>
                  </div>
              </div>
          </div>
          <!-- services section end -->
      @endsection --}}
      