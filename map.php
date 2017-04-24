<br>
<div id="map" class="map">
	<div class="container">
		<h2>Find fire on map</h2>
		<br>
		<div class="row">
			<div class="col-md-3">
				<div class="panel-group" id="accordion">
				    <div class="panel panel-default">
				      	<div class="panel-heading">
				        	<h4 class="panel-title">
				          		<a class="btn btn-primary" data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#fires">Fires</a>
				        	</h4>
				      	</div>
				      	<div id="fires" class="panel-collapse collapse in">
				        	<div class="panel-body">
				        		<p>Select fires to display using the following choices.</p>
				        		<p>Data source:</p>
				        		<select>
				        			<option>MODIS NRT C6</option>
				        			<option>VIIRS 375m</option>
				        			<option>UMD MED 14ML(C6)</option>
				        			<option>MODIS NRT C5</option>
				        		</select>
				        		<hr>
				        		<P>Satellite source:</P>
				        		<select>
				        			<option>Aqua & Terra</option>
				        			<option>Aqua Only</option>
				        			<option>Terra Only</option>
				        		</select>
				        		<hr>
				        		<p>Time period:</p>
				        		<input type="radio" name="past24hr" value="24hr" checked>Past 24 hours<br>
				        		<input type="radio" name="past48hr" value="24hr">Past 48 hours<br>
				        		<input type="radio" name="past72hr" value="24hr">Past 72 hours<br>
				        		<input type="radio" name="past7day" value="24hr">Past 7 days<br>
								<button class="btn btn-success">Update</button>
				            </div>
				      	</div>
				    </div>
				    <div class="panel panel-default">
				      	<div class="panel-heading">
				        	<h4 class="panel-title">
				          		<a class="btn btn-primary" data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#MODIS">MODIS burned area</a>
				        	</h4>
				      	</div>
				      	<div id="MODIS" class="panel-collapse collapse">
				        	<div class="panel-body" >
				        		<p style="text-align: justify;">View the MODIS Burned Area images by first choosing a year. A list of months, for which the Burned Area images available, is shown. Select a month and hit the "Display" button.
				        		<br>[For more inforamtion, please visit the MODIS Burned Area Products page.]
				        		</p>
				        		<div style="text-align: center;">
				        			<div style="float: left;">
				        			<select>
				        				<option>2017</option>
				        				<option>2016</option>
				        				<option>2015</option>
				        				<option>2014</option>
				        				<option>2013</option>
				        				<option>2012</option>
				        				<option>2011</option>
				        				<option>2010</option>
				        			</select>
				        			</div>
				        			<div >
				        			<select>
				        				<option>January</option>
				        				<option>February</option>
				        				<option>March</option>
				        				<option>April</option>
				        				<option>May</option>
				        				<option>June</option>
				        				<option>July</option>
				        				<option>AUgust</option>
				        				<option>September</option>
				        				<option>October</option>
				        				<option>November</option>
				        				<option>December</option>
				        			</select>
				        			</div>
				        		</div>
				        		<div>
				        			<button style="text-align: center;"><a href="" style="text-decoration: none;">Display Burned Area</a></button>
				        		</div>
				        		<p style="font-size: 10px;">
				        			Note:<br>
									(1) The data for June 2001 is not available.<br>
									(2) The legend shown for Burned Area images is for a 31-day month. For a month with 28, 29, or 30 days, the legend concludes at 28, 29, 0r 30 days respectively.<br>
									(3) The legends for April 2000, May 2001, and July 2001 are distinct from the rest of legends
				        		</p>
				        	</div>
				      	</div>
				    </div> 
				</div>
			</div>
			<div class="col-md-9">
				
				<img src="images/333.jpg" width="100%" height="400px;">
			</div>
		</div>
	</div>
</div>
