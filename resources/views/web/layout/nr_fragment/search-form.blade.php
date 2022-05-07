
	<div id="video-search-header">
		<form action="{{route('web.search')}}" id="video-search-header-filtering-padding">
			<div id="search-icon-more"></div>
			<input type="text" name="query" placeholder="Search for Movies or TV Series" aria-label="Search">
			<div id="video-search-header-filtering">
				<div class="row">
					<div class="col-sm extra-padding">
						<h5>Type:</h5>

						<div class="row">
                            @foreach($categories as $category)
							<div class="col-sm">
								<label class="checkbox-pro-container">{{$category->name}}
									<input type="checkbox" checked="checked" id="movies-type">
									<span class="checkmark-pro"></span>
								</label>
							</div><!-- close .col -->
                            @endforeach
						</div><!-- close .row -->
                     
						<div class="dotted-dividers-pro"></div>
					</div><!-- close .col -->
					<div class="col-sm extra-padding">
						<h5>Genres:</h5>
						<select class="custom-select">
							<option selected>All Genres</option>

						</select>
						<div class="dotted-dividers-pro"></div>
					</div><!-- close .col -->
					<!-- <div class="col-sm extra-padding">
								<h5>Country:</h5>
								<select class="custom-select">
								  <option selected>All Countries</option>
								  <option value="1">Argentina</option>
								  <option value="2">Australia</option>
								  <option value="3">Bahamas</option>
								  <option value="4">Belgium</option>
								  <option value="5">Brazil</option>
								  <option value="6">Canada</option>
								  <option value="7">Chile</option>
								  <option value="8">China</option>
								  <option value="9">Denmark</option>
								  <option value="10">Ecuador</option>
								  <option value="11">France</option>
								  <option value="12">Germany</option>
								  <option value="13">Greece</option>
								  <option value="14">Guatemala</option>
								  <option value="15">Italy</option>
								  <option value="16">Japan</option>
								  <option value="17">asdfasdf</option>
								  <option value="18">Korea</option>
								  <option value="19">Malaysia</option>
								  <option value="20">Monaco</option>
								  <option value="21">Morocco</option>
								  <option value="22">New Zealand</option>
								  <option value="23">Panama</option>
								  <option value="24">Portugal</option>
								  <option value="25">Russia</option>
								  <option value="26">United Kingdom</option>
								  <option value="27">United States</option>
								</select>
								<div class="dotted-dividers-pro"></div>
							</div>  close .col -->
					<div class="col-sm extra-padding extra-range-padding">
						<h5>Average Rating:</h5>
						<input class="range-example-rating-input" type="text" min="0" max="10" value="4,10" step="1" />
						<!-- JS is under /js/script.jss -->
					</div><!-- close .col -->
				</div><!-- close .row -->
				<div id="video-search-header-buttons">
					<button type="submit" class="btn btn-green-pro">Filter Search</button>
					<button type="submit" class="btn">Reset</button>
				</div><!-- close #video-search-header-buttons -->
		</form><!-- #video-search-header-filtering-padding -->
	</div><!-- close #video-search-header-filtering -->
	</div><!-- close .video-search-header -->
