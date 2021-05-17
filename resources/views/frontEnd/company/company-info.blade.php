@extends('frontEnd.master')

@section('title','Company | Info')

@push('css')
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/frontEnd/company/css/style.css') }}">
@endpush

@section('content')
	<form id="regForm" action="/action_page.php" >
	  <h1>Company Info:</h1>
	  <!-- One "tab" for each step in the form: -->
	  <div class="tab">
	  	<h3 class="text-center p-3" style="background-color: #abccca;">We would like to know about your business!</h3><br><br>
	  </div>

	  <div class="tab">
	  	<b>What is your company registered name?</b>
	    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
	  </div>

	  <div class="tab">
	  	<b>What is your business activity?</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">Agriculture</option>
	    		<option value="">Construction</option>
	    		<option value="">Manufacturing</option>
	    		<option value="">Mining and Quarring</option>
	    		<option value="">Service </option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>What is your business industry?</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">A</option>
	    		<option value="">B</option>
	    		<option value="">C</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>How long your company has been operating?</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">D</option>
	    		<option value="">E</option>
	    		<option value="">F</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>Where your company located?</b>
	  	<span>State</span>
	  	<p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">D</option>
	    		<option value="">E</option>
	    		<option value="">F</option>
	    	</select>
		</p>
		<span>Postcode</span>
	    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
	  </div>

	  <div class="tab">
	  	<b>How many paid worker are helping you in your business?</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">Less than 5</option>
	    		<option value="">5 – 30</option>
	    		<option value="">31 – 75</option>
	    		<option value="">More than 75</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>How much is your company’s paid up capital?</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">Less than RM50K</option>
	    		<option value="">More than RM50K</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>How much your company earn last year? (Gross Revenue)</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">Less than RM300K</option>
	    		<option value="">More than RM300K</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>Did your company register in SSM or other equivalent bodies?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="equivalent" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="equivalent" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>How many percent of your company equity is owned by Malaysian?</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">Less than 50%</option>
	    		<option value="">50% to 60%</option>
	    		<option value="">More than 60%</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>Does your company has a SME Status Certificate from SMECorp?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="certificate" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="certificate" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Has your company done the SCORE/M-CORE assessment from SMECorp Malaysia?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="assessment" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="assessment" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Has your company received any grants or incentives from government previously?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="government" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="government" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>What is the government agency your company receive the grants/incentives from?</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">MTDC</option>
	    		<option value="">MDEC</option>
	    		<option value="">SMECORP</option>
	    	</select>
		</p>
	  </div>


	  <!-- ///////jkdffffffffffffffffffffffffffffffffff -->

	  <!-- <div class="tab">
	  	<b>How much your company earn last year? (Gross Revenue)</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">Less than RM300K</option>
	    		<option value="">More than RM300K</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>How long your company has been operating?</b>
	    <p>
	    	<select class="form-control" name="">
	    		<option value="">Please select</option>
	    		<option value="">D</option>
	    		<option value="">E</option>
	    		<option value="">F</option>
	    	</select>
		</p>
	  </div>

	  <div class="tab">
	  	<b>What is your company registered name?</b>
	    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
	  </div>

	  <div class="tab">
	  	<b>What is your company registered name?</b>
	    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
	  </div>

	  <div class="tab">
	  	<b>What is your company registered name?</b>
	    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
	  </div> -->

	  


	  <div class="tab">Birthday:
	    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
	    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
	    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
	  </div>
	  <div class="tab">Login Info:
	    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
	    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
	  </div>
	  <div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	    </div>
	  </div>
	  <!-- Circles which indicates the steps of the form: -->
	  <div style="text-align:center;margin-top:40px;">
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <!-- <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span> -->
	    
	  </div>
	</form>
@endsection


@push('js')
	<script src="{{ asset('public/frontEnd/company/js/custom.js') }}"></script>
@endpush