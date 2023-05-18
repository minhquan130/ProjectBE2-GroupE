@extends('layout.app')

@section('content')
  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="delete-all-row-cart">
              <div>
                <input type="text" name="customer_name" class="form-control" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" name="customer_phone" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" name="customer_email" class="form-control" placeholder="Your Email" />
              </div>
              <div>
                <select name="customer_count" class="form-control nice-select wide">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="1">
                    2
                  </option>
                  <option value="2">
                    3
                  </option>
                  <option value="3">
                    4
                  </option>
                  <option value="4">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" name="customer_date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
  @endsection
  