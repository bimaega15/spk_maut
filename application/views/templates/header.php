<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="cssadmin.css">

	<!-- my css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css ">


	<title><?php echo $tittle; ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
	<style>
		#accordionSidebar {

			background-color: darkgreen;
			font-family: Georgia, 'Times New Roman', Times, serif;




		}
	</style>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
	</style>

	<!-- <link rel="stylesheet" type="text/css" href="assets/table/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/table/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/table/css/dataTables.bootstrap4.min.css" /> 
 background-image: linear-gradient(red, yellow);-->



	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		$(document).ready(function($) {

			$('.listSearch tr').each(function() {
				$(this).attr('searchData', $(this).text().toLowerCase());
			});
			$('.boxSearch').on('keyup', function() {
				var dataList = $(this).val().toLowerCase();
				$('.listSearch tr').each(function() {
					if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList
						.length < 1) {
						$(this).show();
					} else {
						$(this).hide();
					}
				});
			});

		});
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>


</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">