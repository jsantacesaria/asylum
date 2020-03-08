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

<div class="thanks_form">
    <h1 style="font-size:40px"><b>Contact Asylum</b></h1>

<p><span class="error" style="color:#FF0000;">* required fields</span></p>
<form method="POST" action="/contact" class="thanks_form">
  {{ csrf_field() }}
  Name:   <span class="error" style="color:#FF0000;">*</span>
<input type="text" name="contact_name" required placeholder="Enter Name Here">
  <br><br>
  E-mail:   <span class="error" style="color:#FF0000;">*</span>
<input type="text" name="email" required placeholder="Enter email here">
  <br><br>
  Comment: <textarea name="comments" rows="5" cols="40" placeholder="What's up?"></textarea>
  <br><br>
  <input type="submit" name="submit" style="background-color:grey;color:white;" value="Submit">
  <br><br>
  <br><br>
</form>

</div>


@endsection
