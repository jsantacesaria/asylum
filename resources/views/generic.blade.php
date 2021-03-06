@extends("layouts.pagelayout")

@section("title", "Contact Us")

@section("content")
		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Asylum</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<h2>Who We Are</h2>
							</header>
                                                <p> Located in Western NY, Asylum is a private, voluntary association for adults interested in 
	responsibly exploring BDSM. 
	We value the central tenants of ethical BDSM - Safe, Sane and Consensual(SSC), Personal Responsibility Informed Consensual Kink (PRICK) 
	and Risk Aware Consensual Kink( RACK). 
	Our core values include respect, confidentiality and consent.
	We are proudly a Coalition Partner of the 
	<a href="https://ncsfreedom.org/our-coalition-partners/" target="_blank">NCSF(National Coalition of Sexual Freedom)</a>.</p> 

<div>
    <h1 style="font-size:40px">Contact Asylum</h1>

<p><span class="error" style="color:#FF0000;">* required fields</span></p>
<form method="POST" action="/contact">  
  {{ csrf_field() }}
  Name: <input type="text" name="contact_name">
  <span class="error" style="color:#FF0000;">*</span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error" style="color:#FF0000;">*</span>
  <br><br>
  Comment: <textarea name="comments" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</div>
						</div>
					</div>
				</div>
			</section>
@endsection
