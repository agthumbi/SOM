<!DOCTYPE html>
<html lang="en-US">
<head>

	<title>Insurance - HTML5 Template for Insurance Agency</title>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika:300,400,600,700" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/libs/font-awesome/css/font-awesome.css" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/libs/no-ui-slider/jquery.nouislider.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/libs/animate.css" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css" />  

</head>
<body>

	<div id="loader">

		<div class="loader-spinner">
		</div>

	</div>

	<div id="contact-popup">

		<div id="contact-popup-background">
		</div>

		<div id="contact-popup-content" class="animated speed">

			<div id="contact-popup-close"><i class="fa fa-times"></i></div>

			<div id="google-map" data-lat="37.42565" data-lng="-122.13535" data-zoom-level="12">
			</div>

			<div class="padding">

				<i class="fa fa-envelope-o background-icon"></i>

				<h3>Contact us</h3>
				<h3 class="right">(+123) 456 789 000</h3>

				<h2>Send us an <span>email!</span></h2>
				<form method="post" class="form">

					<h4>Contact details:</h4>
					<input type="text" name="Name" placeholder="Your name..." class="contact-form-element contact-form-client-name" />
					<input type="text" name="Phone number" placeholder="Your phone number..." class="contact-form-element last" />
					<input type="text" name="E-mail" placeholder="Your e-mail..." class="contact-form-element contact-form-client-email" />
					<input type="text" name="Title" placeholder="E-mail title..." class="contact-form-element contact-form-client-message-title last" />

					<h4>Message:</h4>
					<textarea name="Message" rows="5" cols="5" placeholder="Your message..." class="contact-form-element"></textarea>
					<button class="button button-navy-blue send-contact" type="button">Send a message! <i class="fa fa-paper-plane-o"></i></button>      

					<div class="contact-form-thanks">

						<div class="contact-form-thanks-content">

							Your message has been sent successfully. 
							<span class="contact-form-thanks-close">Close this notice.</span>

						</div>

					</div>         

				</form>

			</div>

		</div>

	</div>  

	<div id="quote-popup">

		<div id="quote-popup-background">
		</div>

		<div id="quote-popup-content" class="animated speed">

			<div id="quote-popup-close"><i class="fa fa-times"></i></div>

			<ul id="quote-popup-tabs">

				<!-- <li data-quote-tab-for="travel-insurance">Travel insurance</li> -->
				<li data-quote-tab-for="car-insurance">Car insurance</li>
				<li data-quote-tab-for="health-insurance">Health insurance</li>
				<!-- <li data-quote-tab-for="house-insurance">House insurance</li> -->

			</ul>

			<div class="quote-forms">


				<!-- car insurance -->
				<div class="quote-form" data-quote-form-for="car-insurance">

					<i class="fa fa-car background-icon"></i>

					<div class="quote-form-background" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' ); width: 166px;">
					</div>

					<div class="quote-form-content">

						<h2>Car Insurance <span>Quote</span></h2>
						<div class="form">


							<span class="custom-dropdown">

								<select name="Vehicle Type" class="custom-dropdown-select quote-form-element">

									<option value="-">Vehicle Type</option>
									<option value="Buses">Buses</option>
									<option value="Heavy Vehicle">Heavy Vehicle</option>
									<option value="Saloon">Saloon</option>
									<option value="Sport">Sport</option>
								</select>

							</span>

							<span class="custom-dropdown">

								<select name="Registration year" class="custom-dropdown-select quote-form-element">

									<option value="-">Registration year</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
									<option value="2004">2004</option>
									<option value="2003">2003</option>
									<option value="2002">2002</option>
									<option value="2001">2001</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
									<option value="1997">1997</option>
									<option value="1996">1996</option>
									<option value="1995">1995</option>
									<option value="1994">1994</option>
									<option value="1993">1993</option>
									<option value="1992">1992</option>
									<option value="1991">1991</option>
									<option value="1990">1990</option>
									<option value="1989">1989</option>
									<option value="1988">1988</option>
									<option value="1987">1987</option>
									<option value="1986">1986</option>
									<option value="1985">1985</option>
									<option value="1984">1984</option>
									<option value="1983">1983</option>
									<option value="1982">1982</option>
									<option value="1981">1981</option>
									<option value="1980">1980</option>
									<option value="1979">1979</option>
									<option value="1978">1978</option>
									<option value="1977">1977</option>
									<option value="1976">1976</option>
									<option value="1975">1975</option>
									<option value="1974">1974</option>
									<option value="1973">1973</option>
									<option value="1972">1972</option>
									<option value="1971">1971</option>
									<option value="1970">1970</option>
									<option value="1969">1969</option>
									<option value="1968">1968</option>
									<option value="1967">1967</option>
									<option value="1966">1966</option>
									<option value="1965">1965</option>
									<option value="1964">1964</option>
									<option value="1963">1963</option>
									<option value="1962">1962</option>
									<option value="1961">1961</option>
									<option value="1960">1960</option>
									<option value="1959">1959</option>
									<option value="1958">1958</option>
									<option value="1957">1957</option>
									<option value="1956">1956</option>
									<option value="1955">1955</option>
									<option value="1954">1954</option>
									<option value="1953">1953</option>
									<option value="1952">1952</option>
									<option value="1951">1951</option>
									<option value="1950">1950</option>

								</select>

							</span>

							<span class="custom-dropdown">

								<select name="Driving License" class="custom-dropdown-select quote-form-element">

									<option value="-">Driving License</option>
									<option value="lessthan6mon">Less than 6 months</option>
									<option value="lessthan1">Less than 1 year</option>
									<option value="1 Year">1 Year</option>
									<option value="2 Year">2 Year</option>
								</select>

							</span>


							<span class="custom-dropdown">

								<select name="EMIRATE OF REGISTRATION" class="custom-dropdown-select quote-form-element">
									<option value="0">Emirate of Rregistration</option>
									<option value="1">Dubai</option>
									<option value="2">Abu Dhabi</option>
									<option value="3">Sharjah</option>
									<option value="4">Ras Al Khaimah</option>
									<option value="5">Ajman</option>
									<option value="6">Fujairah</option>
									<option value="7">Umm Al Quwain</option>
								</select>

							</span>
							<div style="width: 100%; margin-top: -10px;">
								<div style="width: 50%; float: left;">
									<span class="custom-checkbox" style="width: 300px;">
										<h4>COMPREHENSIVE <input type="checkbox" name="" class="my_popup_open" class="checkbox"></h4>
									</span>
									<div style="padding: 10px; padding-left: 61px; border: 1px solid #eee; margin-right: 10px; background: #fbf7f7;">
										<span class="custom-checkbox">
											<h5>Agency</h5>
											<div class="checkbox quote-form-element" data-checked="no" data-name="GCC Spec">

												<span class="checkbox-status"><i class="fa fa-times"></i></span>
												<span class="checkbox-values">

													<span class="checkbox-value-checked">Yes</span>
													<span class="checkbox-value-unchecked">No</span>

												</span>

											</div>
										</span>
										<span class="custom-checkbox">
											<h5>Non Agency</h5>
											<div class="checkbox quote-form-element" data-checked="no" data-name="GCC Spec">

												<span class="checkbox-status"><i class="fa fa-times"></i></span>
												<span class="checkbox-values">

													<span class="checkbox-value-checked">Yes</span>
													<span class="checkbox-value-unchecked">No</span>

												</span>

											</div>
										</span>
										<span class="custom-checkbox" style="margin-top:10px;">
											<input type="text" name="Last year value" placeholder="Last Year Value..." class="quote-form-element" />
											<input type="text" name="Current Value" placeholder="Current Value..." class="quote-form-element quote-form-client-email last " />
										</span>
										<span class="custom-dropdown" style="padding-left: 90px;">

											<select name="Agency Type" class="custom-dropdown-select quote-form-element quote-form-inner-element">

												<option value="-">Agency Type</option>
												<option value="standard">Standard</option>
												<option value="Superior">Superior</option>
											</select>

										</span>
									</div>
								</div>
								<div style="width: 46%; float: left;">
									<span class="custom-checkbox" style="width: 300px;">
										<h4>THIRD PARTY LIABILITY <input type="checkbox" name="" class="my_popup_open"></h4>
									</span>
									<div style="padding: 10px; padding-left:45px; border: 1px solid #eee; background: #fbf7f7;">
										<span class="custom-dropdown">

											<select name="No. of Cyclinders" class="custom-dropdown-select quote-form-element quote-form-inner-element">

												<option value="0">No. of Cyclinders</option>
												<option value="1">4 Cyclinders</option>
												<option value="2">6 Cyclinders</option>
												<option value="3">8 Cyclinders</option>
												<option value="4">8 Cyclinders Above</option>
												<option value="5">Sports/Coupe</option>
											</select>

										</span>
										<span class="custom-dropdown">

											<select name="Body Vehicle Type" class="custom-dropdown-select quote-form-element quote-form-inner-element">
												<option value="0">Body Vehicle Type</option>
												<option value="1">Private Vehicle Saloon</option>
												<option value="2">Private Vehicle (Station wagon)</option>
											</select>

										</span>
									</div>
								</div>	
							</div>

							<div style="width: 100%; display: inline-block; padding-bottom: 10px; padding-top: 14px;">
								<span class="custom-checkbox">
									<h5>GCC Spec</h5>
									<div class="checkbox quote-form-element" data-checked="no" data-name="GCC Spec">

										<span class="checkbox-status"><i class="fa fa-times"></i></span>
										<span class="checkbox-values">

											<span class="checkbox-value-checked">Yes</span>
											<span class="checkbox-value-unchecked">No</span>

										</span>

									</div>
								</span>
								<span class="custom-checkbox">
									<h5>PAB for Driver</h5>
									<div class="checkbox quote-form-element" data-checked="no" data-name="PAB for Driver">

										<span class="checkbox-status"><i class="fa fa-times"></i></span>
										<span class="checkbox-values">

											<span class="checkbox-value-checked">Yes</span>
											<span class="checkbox-value-unchecked">No</span>

										</span>

									</div>
								</span>

								<span class="custom-checkbox">
									<h5>Roadside Assistance</h5>
									<div class="checkbox quote-form-element" data-checked="no" data-name="Roadside Assistance">

										<span class="checkbox-status"><i class="fa fa-times"></i></span>
										<span class="checkbox-values">

											<span class="checkbox-value-checked">Yes</span>
											<span class="checkbox-value-unchecked">No</span>

										</span>

									</div>
								</span>

								<span class="custom-checkbox">
									<h5>PAB for Passengers</h5>
									<div class="checkbox quote-form-element" data-checked="no" data-name="PAB for Passengers">

										<span class="checkbox-status"><i class="fa fa-times"></i></span>
										<span class="checkbox-values">

											<span class="checkbox-value-checked">Yes</span>
											<span class="checkbox-value-unchecked">No</span>

										</span>

									</div>
								</span>

								<span class="custom-checkbox last">
									<h5>Add Rent a Car</h5>
									<div class="checkbox quote-form-element" data-checked="no" data-name="Add Rent a Car">

										<span class="checkbox-status"><i class="fa fa-times"></i></span>
										<span class="checkbox-values">

											<span class="checkbox-value-checked">Yes</span>
											<span class="checkbox-value-unchecked">No</span>

										</span>

									</div>
								</span>
							</div>


							<div>
								<h5><input type="checkbox" name=""> I Agree for Terms &amp; Conditions</h5>
								<button class="button button-navy-blue send-quote" type="button" style="margin: 0 auto;">Get a quote <i class="fa fa-paper-plane-o"></i></button>
							</div>

							<div class="quote-form-thanks">

								<div class="quote-form-thanks-content">

									Your insurance quote has been sent successfully. 
									<span class="quote-form-thanks-close">Close this notice.</span>

								</div>

							</div>

						</div>

					</div>

				</div>

				<!-- Health insurance -->
				<div class="quote-form" data-quote-form-for="health-insurance">

					<i class="fa fa-umbrella background-icon"></i>

					<div class="quote-form-background" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' ); width: 166px;">
					</div>

					<div class="quote-form-content">

						<h2>Health Insurance <span>Quote</span></h2>
						<div class="form" id="health_insurance_primary_form">

							<span class="custom-dropdown">

								<select name="Vehicle Type" class="custom-dropdown-select quote-form-element">

									<option value="-">Vehicle Type</option>
									<option value="Buses">Buses</option>
									<option value="Heavy Vehicle">Heavy Vehicle</option>
									<option value="Saloon">Saloon</option>
									<option value="Sport">Sport</option>
								</select>

							</span>
							<span class="custom-dropdown">

								<select name="Vehicle Type" class="custom-dropdown-select quote-form-element">

									<option value="-">Vehicle Type</option>
									<option value="Buses">Buses</option>
									<option value="Heavy Vehicle">Heavy Vehicle</option>
									<option value="Saloon">Saloon</option>
									<option value="Sport">Sport</option>
								</select>

							</span>
							<span class="custom-dropdown">

								<select name="Vehicle Type" class="custom-dropdown-select quote-form-element">

									<option value="-">Vehicle Type</option>
									<option value="Buses">Buses</option>
									<option value="Heavy Vehicle">Heavy Vehicle</option>
									<option value="Saloon">Saloon</option>
									<option value="Sport">Sport</option>
								</select>

							</span>
							<span class="custom-dropdown">

								<select name="Vehicle Type" class="custom-dropdown-select quote-form-element">

									<option value="-">Vehicle Type</option>
									<option value="Buses">Buses</option>
									<option value="Heavy Vehicle">Heavy Vehicle</option>
									<option value="Saloon">Saloon</option>
									<option value="Sport">Sport</option>
								</select>

							</span>
							<span class="custom-dropdown">

								<select name="Vehicle Type" class="custom-dropdown-select quote-form-element">

									<option value="-">Vehicle Type</option>
									<option value="Buses">Buses</option>
									<option value="Heavy Vehicle">Heavy Vehicle</option>
									<option value="Saloon">Saloon</option>
									<option value="Sport">Sport</option>
								</select>

							</span>
							<span class="custom-dropdown">

								<select name="Vehicle Type" class="custom-dropdown-select quote-form-element">

									<option value="-">Vehicle Type</option>
									<option value="Buses">Buses</option>
									<option value="Heavy Vehicle">Heavy Vehicle</option>
									<option value="Saloon">Saloon</option>
									<option value="Sport">Sport</option>
								</select>

							</span>

							<span class="custom-checkbox last" style="margin-top: -9px;">
								<div class="checkbox quote-form-element is_insured" data-checked="no" data-name="Are you currently insured ?" style="width:224px;">

									<span class="checkbox-status"><i class="fa fa-times"></i></span>
									<span class="checkbox-values">

										<span class="checkbox-value-checked">I'm currently insured.</span>
										<span class="checkbox-value-unchecked">No, I'm not insured</span>

									</span>

								</div>
							</span>
							<span class="custom-checkbox">
								<input type="text" class="quote-form-element quote-form-company-name" name="Name of Company" placeholder="Name of the company..." style="width:174px; display: none"/>
							</span>

							<div style="width: 96%;">
								<h4>Premium Range: <span class="slider-value quote-form-element" data-name="Premium Range" data-slider-id="premium-range">AED <span></span></span></h4>
								<div class="slider" data-slider-min="500" data-slider-max="250000" data-slider-start="500" data-slider-step="100" data-slider-id="premium-range"></div>
								<h4>Sum in increased Annual Coverage: <span class="slider-value quote-form-element" data-name="Sum in increased Annual Coverage" data-slider-id="annual-coverage">AED <span></span></span></h4>
								<div class="slider" data-slider-min="50000" data-slider-max="200000" data-slider-start="50000" data-slider-step="1000" data-slider-id="annual-coverage"></div>

							</div>
							<hr>
							<span class="custom-checkbox">
								<h5>Name</h5>
								<input type="text" class="quote-form-element quote-form-client-name" name="Full name" placeholder="Full Name..." />
							</span>

							<!-- <input type="date" name="dob"> -->
							<span class="custom-checkbox">
								<h5>DOB</h5>
								<input type="date" name="dob" class="quote-form-element quote-form-dob">
							</span>

							<span class="custom-checkbox">
								<h5>Gender</h5>
								<span class="custom-dropdown">

									<select name="Gender" class="custom-dropdown-select quote-form-element">

										<option value="0">Gender</option>
										<option value="1">Male</option>
										<option value="2">Female</option>
									</select>

								</span>
							</span>

							<span class="custom-checkbox">
								<h5>Employment Type</h5>
								<span class="custom-dropdown">

									<select name="Employment Type" class="custom-dropdown-select quote-form-element">

										<option value="0">Employment Type</option>
										<option value="1">Employee</option>
										<option value="2">Dependent</option>
									</select>

								</span>
							</span>


							<div>
								<h5><input type="checkbox" name="terms"> I Agree for Terms &amp; Conditions</h5>
								<div style="padding-left: 31%">
									<button class="button button-navy-blue send-quote" style="float: left; margin-right:10px; " type="button">Get a quote <i class="fa fa-paper-plane-o"></i></button>
									<button class="button button-navy-blue send-quote addMember" style="float:left;" type="button" >Add Member <i class="fa fa-user-plus"></i></button>
								</div>	
							</div>

							<div class="quote-form-thanks">

								<div class="quote-form-thanks-content">

									Your insurance quote has been sent successfully. 
									<span class="quote-form-thanks-close">Close this notice.</span>

								</div>

							</div>

						</div>
						<div id="health_insurance_secondary_form" class="form hidden" style="display: none; width: 100%; float: left">
							<div class="new-member-container">
								<span class="custom-checkbox">
									<h5>Name</h5>
									<input type="text" class="quote-form-element quote-form-client-name" name="Full name" placeholder="Full Name..." />
								</span>

								<!-- <input type="date" name="dob"> -->
								<span class="custom-checkbox">
									<h5>DOB</h5>
									<input type="date" name="dob" class="quote-form-element quote-form-dob">
								</span>

								<span class="custom-checkbox">
									<h5>Gender</h5>
									<span class="custom-dropdown">

										<select name="Gender" class="custom-dropdown-select quote-form-element">

											<option value="0">Gender</option>
											<option value="1">Male</option>
											<option value="2">Female</option>
										</select>

									</span>
								</span>

								<span class="custom-checkbox">
									<h5>Employment Type</h5>
									<span class="custom-dropdown">

										<select name="Employment Type" class="custom-dropdown-select quote-form-element">

											<option value="0">Employment Type</option>
											<option value="1">Employee</option>
											<option value="2">Dependent</option>
										</select>

									</span>
								</span>
							</div>
							<div class="more-members"></div>
							<div style="width: 100%; padding-left: 23%">
								<button class="button button-navy-blue send-quote goBack" style="float:left;margin-right: 10px;" type="button" ><i class="fa fa-arrow-circle-o-left"></i> Back</button>
								<button class="button button-navy-blue send-quote" style="float:left; margin-right: 10px;" type="button">Get a quote <i class="fa fa-paper-plane-o"></i></button>
								<button class="button button-navy-blue send-quote addMember" style="float:left; " type="button" >Add Member <i class="fa fa-user-plus"></i></button>

							</div>

						</div>
					</div>

				</div>

				<!-- house insurance -->
				<div class="quote-form" data-quote-form-for="house-insurance">

					<i class="fa fa-home background-icon"></i>

					<div class="quote-form-background" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' );">
					</div>

					<div class="quote-form-content">

						<h2>House Insurance <span>Quote</span></h2>
						<div class="form">

							<h4>Your house:</h4>
							<span class="custom-dropdown">

								<select name="What sort of property is it?" class="custom-dropdown-select quote-form-element">

									<option value="-">What sort of property is it?</option>
									<option value="House">House</option>
									<option value="Flat / Apartment">Flat / Apartment</option>
									<option value="Bungalow">Bungalow</option>
									<option value="Town house">Town house</option>
									<option value="Other">Other</option>

								</select>

							</span>

							<span class="custom-dropdown last">

								<select name="What type of property is it?" class="custom-dropdown-select quote-form-element">

									<option value="-">What type of property is it?</option>
									<option value="Semi-detached">Semi-detached</option>
									<option value="Detached">Detached</option>
									<option value="Link-detached">Link-detached</option>
									<option value="Terraced">Terraced</option>
									<option value="End terrace">End terrace</option>

								</select>

							</span>

							<input type="text" class="quote-form-element" name="Roughly when was it built?" placeholder="Roughly when was it built?" />
							<input type="text" class="quote-form-element last" name="House Postcode" placeholder="House Postcode" />

							<h4>Contact details:</h4>
							<input type="text" class="quote-form-element quote-form-client-name" name="Full name" placeholder="Full Name..." />

							<span class="custom-dropdown last">

								<select name="Age" class="custom-dropdown-select quote-form-element">

									<option value="-">Your age</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
									<option value="32">32</option>
									<option value="33">33</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
									<option value="51">51</option>
									<option value="52">52</option>
									<option value="53">53</option>
									<option value="54">54</option>
									<option value="55">55</option>
									<option value="56">56</option>
									<option value="57">57</option>
									<option value="58">58</option>
									<option value="59">59</option>
									<option value="60">60</option>
									<option value="61">61</option>
									<option value="62">62</option>
									<option value="63">63</option>
									<option value="64">64</option>
									<option value="65">65</option>
									<option value="66">66</option>
									<option value="67">67</option>
									<option value="68">68</option>
									<option value="69">69</option>
									<option value="70">70</option>
									<option value="71">71</option>
									<option value="72">72</option>
									<option value="73">73</option>
									<option value="74">74</option>
									<option value="75">75</option>
									<option value="76">76</option>
									<option value="77">77</option>
									<option value="78">78</option>
									<option value="79">79</option>
									<option value="80">80</option>
									<option value="81">81</option>
									<option value="82">82</option>
									<option value="83">83</option>
									<option value="84">84</option>
									<option value="85">85</option>
									<option value="86">86</option>
									<option value="87">87</option>
									<option value="88">88</option>
									<option value="89">89</option>
									<option value="90">90</option>
									<option value="91">91</option>
									<option value="92">92</option>
									<option value="93">93</option>
									<option value="94">94</option>
									<option value="95">95</option>
									<option value="96">96</option>
									<option value="97">97</option>
									<option value="98">98</option>
									<option value="99">99</option>

								</select>

							</span>

							<input type="text" name="Phone Number" placeholder="Phone Number..." class="quote-form-element" />
							<input type="text" name="E-mail Address" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />

							<button class="button button-navy-blue send-quote" type="button">Get a quote <i class="fa fa-paper-plane-o"></i></button>

							<div class="quote-form-thanks">

								<div class="quote-form-thanks-content">

									Your insurance quote has been sent successfully. 
									<span class="quote-form-thanks-close">Close this notice.</span>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<header>

		<div class="center">

			<div class="logo">

				<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/img/logo.png" alt="Insurance Agency" style="height:48px; margin-top: -11px;"/></a>

			</div>

			<nav>
				<div class="form call-us-form">

					<!-- <div class="call-to-action-thanks"> -->

					<!-- <div class="call-to-action-thanks-content"> -->

					<!-- Thank you, we'll call you soon. -->
					<!-- <span class="call-to-action-thanks-close">Close this notice.</span> -->

					<!-- </div> -->

					<!-- </div> -->

					<input type="text" name="Phone number" placeholder="Your phone number..." class="phone-number" />
					<button class="button button-navy-blue send-phone-call-quote">Get a phone call <i class="fa fa-phone"></i></button>

				</div>
				<ul class="menu">



				</ul>

				<div class="menu-responsive"><i class="fa fa-bars"></i></div>

			</nav>

			<div class="clear">
			</div>

		</div>

	</header>

	<div class="heading">

		<div class="heading-slides">

			<div class="heading-slide-single" data-slide-id="1" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' );">

				<div class="flying-1">

					<span>Services on move</span>

				</div>

				<div class="flying-2">

					<h3>Life insurances<br /> for your family</h3>
					<p>Curabitur iaculis ante a nibh vulputate sollicitudin.</p>

					<button class="button button-white" data-action="show-quote-popup" data-quote-key="car-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>

				</div>

				<div class="heading-content text-center">


					<button class="button button-lg button-navy-blue" data-action="show-quote-popup" data-quote-key="car-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>

				</div>

			</div>



		</div>

	</div>

	<section class="call-to-action background">

		<div class="center">

			<div class="left">

				<h2>Take care of your family</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit fringilla ligula, nec congue leo pharetra in. Quisque commodo vehicula justo, tincidunt vehicula elit consequat vel.</p>

				<div class="form">

					<div class="call-to-action-thanks">

						<div class="call-to-action-thanks-content">

							Thank you, we'll call you soon.
							<span class="call-to-action-thanks-close">Close this notice.</span>

						</div>

					</div>

					<input type="text" name="Phone number" placeholder="Your phone number..." class="phone-number" />
					<button class="button button-navy-blue send-phone-call-quote">Get a phone call <i class="fa fa-phone"></i></button>

				</div>

			</div>

			<div class="right">

				<div class="circles">

					<div class="circle-1 circle-pulse">
					</div>

					<div class="circle-2 circle-pulse">
					</div>

					<div class="circle-3 circle-pulse">
					</div>

					<div class="circle-4 circle-pulse">
					</div>

					<a href="tel:+123456789000">

						<div class="circle-center">

							<div class="circle-center-tip">Call us: <strong>(+123) 456 789 000</strong></div>
							<i class="fa fa-phone"></i>

						</div>

					</a>

				</div>

			</div>

			<div class="clear">
			</div>

		</div>

	</section>

	<section class="insurances-slider section-gray">

		<div class="center">

			<div class="green-line">
			</div>

			<div class="images">


				<div class="image" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' );" data-insurance-key="health">
				</div>

				<div class="image" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' );" data-insurance-key="car">
				</div>

			</div>

			<div class="content">

				<div class="descriptions">



					<div class="description" data-insurance-key="health">

						<h3>Get an insurance quote!</h3>
						<h2>Health insurance</h2>

						<p>Quisque pharetra lorem quis libero ornare fringilla. Maecenas nisl justo, suscipit vel tortor at, varius auctor erat. Maecenas efficitur felis nec arcu volutpat lacinia.</p>
						<button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="health-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>

					</div>

					<div class="description" data-insurance-key="car">

						<h3>Get an insurance quote!</h3>
						<h2>Car insurance</h2>

						<p>Proin et posuere dolor, a finibus tellus. Phasellus suscipit gravida magna. Nam posuere nisi eu ex sodales, sit amet dictum turpis maximus. Maecenas sodales vehicula tellus, at imperdiet risus.</p>
						<button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="car-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>

					</div>

				</div>

				<ul class="tabs">


					<li data-insurance-key="car">

						<i class="fa fa-car"></i>
						<span>Car insurance</span>

					</li>
					<li data-insurance-key="health">

						<i class="fa fa-umbrella"></i>
						<span>Life insurance</span>

					</li>

				</ul>

			</div>

			<div class="clear">
			</div>

		</div>

	</section>

	<section class="about-us">

		<div class="center">

			<div class="green-line">
			</div>

			<div class="left">

				<h3>About us</h3>
				<h2>Meet our insurance agency.</h2>

				<p>Curabitur iaculis ante a nibh vulputate sollicitudin. Integer ut tincidunt ligula. Praesent pretium, tellus at elementum ultrices.</p>

				<div class="timeline">

					<div class="timeline-element">

						<span class="date">March, 2009</span>
						<p>The establishment of our agency, with two professional insurance agents, in small office in Boston.</p>

					</div>

					<div class="timeline-element">

						<span class="date">December, 2011</span>
						<p>Three new insurance agents in our team, 2.500 customers!</p>

					</div>

					<div class="timeline-element">

						<span class="date">February, 2014</span>
						<p>Moving to a new office in Boston. More than 5.000 customers, great references and great view of the future!</p>

					</div>

				</div>

			</div>

			<div class="right">

				<div class="images-slider">

					<div class="images-slider-change">

						<div class="images-slider-prev"><i class="fa fa-angle-left"></i></div>
						<div class="images-slider-next"><i class="fa fa-angle-right"></i></div>

					</div>

					<div class="images-slider-single" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' );">
					</div>

					<div class="images-slider-single" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' );">
					</div>

				</div>

			</div>

			<div class="clear">
			</div>

		</div>

	</section>

	<section class="slogan section-gray-top">

		<div class="center">

			<i class="fa fa-bar-chart-o background-icon"></i>

			<div class="left">

				<h3>Our vision</h3>
				<h2>Best insurances for everyone.</h2>

				<blockquote>

					<p>Phasellus quis tortor in arcu maximus vehicula. Donec eget elit vitae tortor convallis mattis. Aliquam erat volutpat. Integer vitae quam ut leo accumsan consequat eu ac sapien.</p>
					<cite>John Doe</cite>

				</blockquote>

			</div>

			<div class="right">

				<div class="key-number-values">

					<div class="single single-top single-left">

						<span class="number">1294</span>
						<span class="description">satisfied customers</span>

					</div>

					<div class="single single-top single-right">

						<span class="number">5</span>
						<span class="description">professional agents</span>

					</div>

					<div class="single single-bottom single-left">

						<span class="number">8</span>
						<span class="description">insurances in our offer</span>

					</div>

					<div class="single single-bottom single-right">

						<span class="number">12</span>
						<span class="description">years of experience</span>

					</div>

				</div>

			</div>

			<div class="clear">
			</div>

		</div>

	</section>

	<section class="image-slogan with-parallax" style="background-image: url( '<?php echo base_url(); ?>public/img/image.png' );">

		<div class="flying-1">

			<span>Take care of your child</span>

		</div>

		<div class="flying-2">

			<h3>Insurances for<br /> your child's future</h3>
			<p>Curabitur iaculis ante a nibh vulputate sollicitudin.</p>

			<button class="button button-white" data-action="show-quote-popup" data-quote-key="health-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>

		</div>

	</section>

	<section class="contact section-gray">

		<div class="center">

			<i class="fa fa-envelope-o background-icon"></i>
			<div class="contact-details">

				<div class="contact-detail-single">

					<h3><i class="fa fa-map-marker"></i> Company informations</h3>
					<p><strong>Insurance Agency</strong><br /> John Doe</p>
					<p class="without-margin-bottom">5002 Example Street<br /> Los Angeles, CA 90034</p>

				</div>

				<div class="contact-detail-single">

					<h3><i class="fa fa-envelope-o"></i> Contact details</h3>
					<p>E-mail address: <br /><a href="#">contact@insuranceagency.com</a></p>     
					<p class="without-margin-bottom"><button class="button button-navy-blue" data-action="show-contact-popup">Contact us! <i class="fa fa-paper-plane-o"></i></button></p>

				</div>

				<div class="contact-detail-single contact-detail-single-last">

					<h2>(+123) 456 789 000</h2> 
					<p class="without-margin-bottom">Available 8:00am - 4:00pm</p> 

				</div>

			</div>

		</div>

	</section>

	<footer>

		<div class="center">

			<div class="green-line">
			</div>

			<nav>

				<ul class="left">

					<li>

						<h4>Insurances</h4>  
						<ul class="sub">

							<li><a href="/health-insurance.html">Life insurance</a></li>
							<li><a href="/car-insurance.html">Car insurance</a></li>
							<li><a href="/house-insurance.html">House insurance</a></li>
							<li><a href="/travel-insurance.html">Travel insurance</a></li>

						</ul>

					</li>

					<li>

						<h4>Pages</h4>
						<ul class="sub">

							<li><a href="/index.html">Home</a></li>
							<li><a href="/agents.html">Agents</a></li>
							<li><a href="/claims.html">Claims</a></li>
							<li><button class="menu-element" data-action="show-quote-popup" data-quote-key="health-insurance">Get a quote</button></li>
							<li><a href="/blog.html">Blog</a></li>
							<li><button class="menu-element" data-action="show-contact-popup">Contact</button></li>

						</ul>

					</li>

					<li>

						<h4>Find us!</h4>
						<ul class="sub">

							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google+</a></li>

						</ul>

					</li>

				</ul>

			</nav>

			<ul class="right">

				<li>Copyright &copy; 2015 <span class="divider">&middot;</span> <a href="/index.html">Insurance Agency</a></li>
				<li><div class="fb-like" data-href="https://www.facebook.com/envato" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></li>

			</ul>

			<div class="clear">
			</div>

		</div>

	</footer>

<!--
facebook SDK
-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="<?php echo base_url(); ?>public/libs/jquery.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo base_url(); ?>public/libs/no-ui-slider/jquery.nouislider.all.min.js"></script>
<script src="<?php echo base_url(); ?>public/libs/smoothscroll.js"></script>
<script src="<?php echo base_url(); ?>public/libs/parallax.js"></script>
<script src="<?php echo base_url(); ?>public/js/functions.js"></script>
<script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>
<script>
	$(document).ready(function() {

// SECONDARY HEALTH INSURANCE FORM MANAGER
var counter = 1
$(".addMember").click(function(evt){

	if(counter > 5){
		alert('Only Maximum of 5 members allowed');
		return;
	}

	if($("#health_insurance_secondary_form").hasClass("shown"))
	{
		var newMemberHTML = $(".new-member-container").html();
		$("#health_insurance_secondary_form .more-members").append(newMemberHTML);
		console.log(counter);
		counter++;
	}

	if($("#health_insurance_secondary_form").hasClass("hidden"))
	{
		$("#health_insurance_primary_form").addClass("animated fadeOut").css("display", "none");
		$("#health_insurance_secondary_form").removeClass("hidden").addClass("shown animated fadeInLeft").css("display", "block");
	}


});

$(".goBack").click(function(){
	$("#health_insurance_secondary_form").addClass("hidden").removeClass('shown').css("display", "none");
	$("#health_insurance_primary_form").removeClass("hidden").removeClass('fadeOut').addClass('fadeInLeft').css('display', 'block');
});


// IN_INSURED CHECKBOX EFFECT

$(".is_insured").click(function(){
	var is_checked = $(this).data('checked');
	if(is_checked == 'yes')
	{
		$(".quote-form-company-name").css("display","block");
	}
	else
	{
		$(".quote-form-company-name").css("display","none");
	}
});

});
</script>
</body>
</html>