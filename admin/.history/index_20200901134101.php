<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div class="container py-5">
	<div class="Card">
		<div class="Card__content Card__content--border">
			<button class="Button">
				<svg aria-hidden="true" height="12" width="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
					<path d="M13.994.004c.555 0 1.006.448 1.006 1a.997.997 0 0 1-.212.614l-5.782 7.39L9 13.726a1 1 0 0 1-.293.708L7.171 15.97A.1.1 0 0 1 7 15.9V9.008l-5.788-7.39A.996.996 0 0 1 1.389.214a1.01 1.01 0 0 1 .617-.21z" fill-rule="evenodd"></path>
				</svg>
				<span>Filter</span>
			</button>
			<button class="Button ml-auto">
				<svg aria-hidden="true" height="12" width="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 7h6a1 1 0 0 1 0 2H9v6a1 1 0 0 1-2 0V9H1a1 1 0 1 1 0-2h6V1a1 1 0 1 1 2 0z" fill-rule="evenodd"></path>
				</svg>
				<span>New</span>
			</button>
			<button class="Button ml-2">
				<svg aria-hidden="true" height="12" width="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
					<path d="M15 10.006a1 1 0 1 1-2 0v-5.6L2.393 15.009a.992.992 0 1 1-1.403-1.404L11.595 3.002h-5.6a1 1 0 0 1 0-2.001h8.02a1 1 0 0 1 .284.045.99.99 0 0 1 .701.951z" fill-rule="evenodd"></path>
				</svg>
				<span>Export</span>
			</button>
		</div>
		<table class="Card__table Table">
			<thead>
				<tr>
					<td class="Table__checkbox">
						<label for="TableCheckAll" class="CheckBox">
							<input type="checkbox" id="TableCheckAll">
							<span class="CheckBox__control">
								<svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 14 14">
									<path d="M10.346 3.301a.929.929 0 0 1 1.37 0 1.076 1.076 0 0 1 0 1.456l-4.64 4.94a.929.929 0 0 1-1.37 0L3.284 7.123a1.076 1.076 0 0 1 0-1.456.929.929 0 0 1 1.37 0L6.39 7.513l3.955-4.212z"></path>
								</svg>
							</span>
						</label>
					</td>
					<td>
						<div class="Table__header-item">
							<span>EMAIL</span>
						<svg height="12" width="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M6.74 15.901l-.227-2.432a5.632 5.632 0 0 1-1.329-.55l-1.88 1.558a8.046 8.046 0 0 1-1.781-1.78l1.558-1.881a5.632 5.632 0 0 1-.55-1.329L.099 9.26a8.06 8.06 0 0 1 0-2.518l2.432-.228c.127-.47.313-.916.55-1.329l-1.558-1.88a8.046 8.046 0 0 1 1.78-1.781L5.185 3.08a5.632 5.632 0 0 1 1.329-.55L6.74.099a8.06 8.06 0 0 1 2.518 0l.228 2.432c.47.127.916.313 1.329.55l1.88-1.558a8.046 8.046 0 0 1 1.781 1.78L12.92 5.185c.237.413.423.859.55 1.329l2.432.228a8.06 8.06 0 0 1 0 2.518l-2.432.228c-.127.47-.313.916-.55 1.329l1.558 1.88a8.046 8.046 0 0 1-1.78 1.781l-1.881-1.558a5.632 5.632 0 0 1-1.329.55l-.228 2.432a8.06 8.06 0 0 1-2.518 0zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" fill-rule="evenodd"></path></svg>
						</div>
					</td>
					<td>
						<div class="Table__header-item">
							<span>DESCRIPTION</span>
						<svg height="12" width="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M6.74 15.901l-.227-2.432a5.632 5.632 0 0 1-1.329-.55l-1.88 1.558a8.046 8.046 0 0 1-1.781-1.78l1.558-1.881a5.632 5.632 0 0 1-.55-1.329L.099 9.26a8.06 8.06 0 0 1 0-2.518l2.432-.228c.127-.47.313-.916.55-1.329l-1.558-1.88a8.046 8.046 0 0 1 1.78-1.781L5.185 3.08a5.632 5.632 0 0 1 1.329-.55L6.74.099a8.06 8.06 0 0 1 2.518 0l.228 2.432c.47.127.916.313 1.329.55l1.88-1.558a8.046 8.046 0 0 1 1.781 1.78L12.92 5.185c.237.413.423.859.55 1.329l2.432.228a8.06 8.06 0 0 1 0 2.518l-2.432.228c-.127.47-.313.916-.55 1.329l1.558 1.88a8.046 8.046 0 0 1-1.78 1.781l-1.881-1.558a5.632 5.632 0 0 1-1.329.55l-.228 2.432a8.06 8.06 0 0 1-2.518 0zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" fill-rule="evenodd"></path></svg>
						</div>
					</td>
					<td>DEFAULT SOURCE</td>
					<td>CREATED</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="Table__checkbox">
						<label for="TableCheck_1" class="CheckBox">
							<input type="checkbox" id="TableCheck_1">
							<span class="CheckBox__control">
								<svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 14 14">
									<path d="M10.346 3.301a.929.929 0 0 1 1.37 0 1.076 1.076 0 0 1 0 1.456l-4.64 4.94a.929.929 0 0 1-1.37 0L3.284 7.123a1.076 1.076 0 0 1 0-1.456.929.929 0 0 1 1.37 0L6.39 7.513l3.955-4.212z"></path>
								</svg>
							</span>
						</label>
					</td>
					<td style="min-width: 300px;">berk@berk.pw</td>
					<td style="width: 100%;">—</td>
					<td style="min-width: 150px;">—</td>
					<td style="min-width: 150px;">Jan 20, 5:24 PM</td>
				</tr>
			</tbody>
		</table>
		<div class="Card__content">
			<div class="Card__content-text"><strong>1</strong> result</div>
			<button class="Button ml-auto" disabled>
				<span>Previous</span>
			</button>
			<button class="Button ml-2" disabled>
				<span>Next</span>
			</button>
		</div>
	</div>
</div>
</body>
</html>


<p>Welcome to index</p>


<a href="index.php?logout=true">Logout</a>