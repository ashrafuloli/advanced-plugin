<div class="container-fluid">
	<div class="row">
		<div class="col-xl-10">
			<div class="card card-wrapper">
				<div class="card-header text-white bg-primary">
					<h5 class="m-0">Create Book</h5>
				</div>
				<div class="card-body">
					<form class="from-wrapper">
						<div class="row justify-content-center mb-4">
							<div class="col-2">
								<div class="text-right">
									<label for="name">Name:</label>
								</div>
							</div>
							<div class="col-8">
								<div class="form-group">
									<input type="text" class="form-control" id="name"  placeholder="Enter Your Name">
								</div>
							</div>
						</div>
						<div class="row justify-content-center mb-3">
							<div class="col-2">
								<div class="text-right">
									<label for="email">Email:</label>
								</div>
							</div>
							<div class="col-8">
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Enter Your Email">
								</div>
							</div>
						</div>
						<div class="row justify-content-center mb-4">
							<div class="col-2">
								<div class="text-right">
									<label for="publication">Publication:</label>
								</div>
							</div>
							<div class="col-8">
								<div class="form-group">
									<input type="text" class="form-control" id="publication" placeholder="Enter Publication">
								</div>
							</div>
						</div>
						<div class="row justify-content-center mb-4">
							<div class="col-2">
								<div class="text-right">
									<label for="description">Description:</label>
								</div>
							</div>
							<div class="col-8">
								<div class="form-group">
									<textarea class="form-control" name="description" id="description" cols="30" rows="4"></textarea>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mb-4">
							<div class="col-2">
								<div class="text-right">
									<label for="image">Book Image:</label>
								</div>
							</div>
							<div class="col-8">
								<div class="form-group">
									<input type="file" id="image">
								</div>
							</div>
						</div>
						<div class="row justify-content-center mb-4">
							<div class="col-2">
								<div class="text-right">
									<label for="book-cost">Book Cost:</label>
								</div>
							</div>
							<div class="col-8">
								<div class="form-group">
									<input type="text" class="form-control" name="book-cost" id="book-cost" placeholder="Enter Book Cost">
								</div>
							</div>
						</div>
						<div class="row justify-content-center mb-4">
							<div class="col-2">
								<div class="text-right">
									<label for="publication">Status:</label>
								</div>
							</div>
							<div class="col-8">
								<div class="form-group">
									<select id="inputState" class="form-control">
										<option selected>Choose...</option>
										<option value="active">Active</option>
										<option value="deactivate">Deactivate</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mb-4">
							<div class="col-2">
							</div>
							<div class="col-8">
								<div class="form-group">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
