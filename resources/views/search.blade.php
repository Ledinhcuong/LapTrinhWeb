<?php
use App\Http\Controllers\ProjectController;
$control = new ProjectController();
$key = $_GET['key'];

$data = $control-> searchApp($key);

?>

		@extends('master')
		@section('title', 'Search')
		@section('content')
		<div class="search">
			<div class="container">
				<div class="key-search">
					Kết tìm kiếm cho <?php echo $key ?>
				</div>

				<div class="content-search">
					<div class="total-result">
						Có tổng cộng <?php echo sizeof($data) ?> kết quả trả về
					</div>


				</div>

				<div class="row">
					<?php
					foreach ($data as $key) {
						
					?>
					<div class="col-md-3 app-result">
						<a href="chitiet?id=<?php echo $key->IdApplication  ?>">
							<div class="background-result">

								<div class="image-app">
									<img class="imge-resize" src="public/images/<?php echo $key->Icon ?>" alt="<?php echo $key->NameApp ?>">
								</div>

								<span class="name-app-search">
									<?php echo $key->NameApp ?>
								</span>
								<div class="name-company">
									<?php echo $key->Developer ?>
								</div>
								
							</div>
							
							
						</a>
					</div>	

					<?php
						}
					?>	

				</div>


				{!! $data->render() !!}


			</div>
		</div>
		@endsection

		
		
	