<div class="box-details">
    <h3 class="mb-4">المرافق الاساسية</h3>
    <p class="mb-4">اختار نوع الوحدة السكنية و قم بتحديد العدد المتوفر من المرافق الاساسية للوحدة السكنية. </p>

    <div class="row">
        @forelse($facilities as $facility)
            <!-- Card -->
            <div class="col-md-12">
                <div class="card  mb-4" style="background-color: #eef2ec; border-color: #ffffff;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-check-circle"
                                                  style="color: #81CC6DFF;"></i> {{$facility->name}}</h5>
                        <section class="grouped-radio row">
                            <input type="hidden" value="{{$facility->id}}" name="facilities[]">
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="box">
                                    <input class="selectedFacilityValue" data-id="{{$facility->id}}" type="radio" id="control_facility_01_{{$facility->id}}" value="1"
                                           name="facility-count-{{$facility->id}}">
                                    <label for="control_facility_01_{{$facility->id}}"><h2>1</h2></label>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="box">
                                    <input class="selectedFacilityValue" data-id="{{$facility->id}}" type="radio" id="control_facility_02_{{$facility->id}}" value="2"
                                           name="facility-count-{{$facility->id}}">
                                    <label for="control_facility_02_{{$facility->id}}"><h2>2</h2></label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">

                                <div class="box">
                                    <input class="selectedFacilityValue" data-id="{{$facility->id}}" type="radio" id="control_facility_03_{{$facility->id}}" value="3"
                                           name="facility-count-{{$facility->id}}">
                                    <label for="control_facility_03_{{$facility->id}}"><h2>3</h2></label>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-4 col-6">

                                <div class="box">
                                    <input class="selectedFacilityValue" data-id="{{$facility->id}}" type="radio" id="control_facility_04_{{$facility->id}}" value="4"
                                           name="facility-count-{{$facility->id}}">
                                    <label for="control_facility_04_{{$facility->id}}"><h2>4</h2></label>
                                </div>

                            </div>

                            <div class="col-lg-2 col-md-4 col-6">

                                <div class="box">
                                    <input class="selectedFacilityValue" data-id="{{$facility->id}}" type="radio" id="control_facility_05_{{$facility->id}}" value="5"
                                           name="facility-count-{{$facility->id}}">
                                    <label for="control_facility_05_{{$facility->id}}"><h2>5</h2></label>
                                </div>

                            </div>

                            <div class="col-lg-2 col-md-4 col-6">

                                <div class="box">
                                    <input class="selectedFacilityValue" data-id="{{$facility->id}}" type="radio" id="control_facility_06_{{$facility->id}}" value="6"
                                           name="facility-count-{{$facility->id}}">
                                    <label for="control_facility_06_{{$facility->id}}"><h2>6</h2></label>
                                </div>

                            </div>

                        </section>
                        <p class="mb-3 mt-3">او ادخل العدد يدوياً:</p>
                        <div class="row">
                            <div class="col-lg-7 col-8">
                                <input id="facilityCount{{$facility->id}}" required name="facility-count-{{$facility->id}}" type="text"
                                       class="form-control"
                                       placeholder="ادخل العدد...">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <div class="card  mb-4" style="background-color: #eef2ec; border-color: #ffffff;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-check-circle" style="color: #81CC6DFF;"></i> عفواً لا
                            يحتوي هذا النوع على مرافق</h5>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>
