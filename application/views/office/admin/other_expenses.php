
<!doctype html>
<html lang="en">

<?php
require 'dashboard_header.php';
?>

<body>
<div class="dashboard-main-wrapper">

	<?php
	require 'dashboard_navigation.php';
	require 'dashboard_sidebar.php';
	?>
	<div class="dashboard-wrapper" style="position: relative;">
		<div class="container-fluid dashboard-content">
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="page-header" id="top">
								<h2 class="pageheader-title">Other Expenses</h2>

								<div class="page-breadcrumb">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">
													Other Expenses
												</a></li>
										</ol>
									</nav>
								</div>

							</div>
						</div>
					</div>

					<div class="row">
						<!-- ============================================================== -->
						<!-- basic table  -->
						<!-- ============================================================== -->
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<h5 class="card-header">Money for Other Stuff</h5>
								<div class="card-body">

									<ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Amount Paid in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $total_amount_in_year; ?></span>
                                </span>
									</ol>
									<?php

									echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_total_amount
                                   </a>
                                   ";

									echo "
                                   <!-- Pie Chart -->
                                    <div 
                                    data-jan_total_amount=$jan_total_amount 
                                    data-feb_total_amount=$feb_total_amount 
                                    data-mar_total_amount=$mar_total_amount 
                                    data-apr_total_amount=$apr_total_amount 
                                    data-may_total_amount=$may_total_amount 
                                    data-jun_total_amount=$jun_total_amount 
                                    data-jul_total_amount=$jul_total_amount 
                                    data-aug_total_amount=$aug_total_amount 
                                    data-sep_total_amount=$sep_total_amount 
                                    data-oct_total_amount=$oct_total_amount 
                                    data-nov_total_amount=$nov_total_amount 
                                    data-dec_total_amount=$dec_total_amount 
                                    id='piechart_3d' class='card-body'>
                                    </div>
                                    ";
									?>


									<br/><br/>

									<div class="table-responsive">
										<table id="table" class="table table-striped table-bordered">
											<thead>
											<tr>
												<th>#</th>
												<th>Accountant</th>
												<th>Sender</th>
												<th>Reciever</th>
												<th>Purpose</th>
												<th>Amount Paid</th>
												<th>Payment mode</th>
												<th>Date Paid</th>
												<th>Recorded at</th>

											</tr>
											</thead>
											<tbody>
											<?php
											foreach ($expenses as $expense) {

												$url_delete = base_url('OtherExpenses/delete_permission/' . $expense->expense_id);

												echo "
            <tr>        
                <td>$expense->expense_id</td>
                <td>$expense->accountant</td>
                <td>$expense->sender</td>
                <td>$expense->reciever</td>
                <td>$expense->purpose</td>
                <td>$expense->amount</td>
                <td>$expense->payment_mode</td>
                <td>$expense->date_transaction</td>
                <td>$expense->created_at</td>
              
            </tr>
        ";

											}
											?>
											</tbody>
											<tfoot>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<?php
		include 'dashboard_footer.php';
		?>
		<script type="text/javascript">
            $(document).ready(function () {

                $('#table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'colvis',
                        {
                            extend: 'excel',
                            title: 'AIM - Management System',
                            messageTop: 'Other Expenses (Money for Other Stuffs)',
                            text: 'Excel',

                        },
                        {
                            extend: 'pdf',
                            title: 'AIM - Management System',
                            messageTop: 'Other Expenses (Money for Other Stuffs)',
                            text: 'PDF',

                        },
                        {
                            extend: 'print',
                            title: 'AIM - Management System',
                            messageTop: 'Other Expenses (Money for Other Stuffs)',
                            text: 'Print',

                        },
                    ]
                });

                $('#table').on('click', '.edit_expense', function () {

                    // update form action
                    expense_id = $(this).data('expense_id');
                    form = $('#edit_expense_form');
                    form.attr('action', form.attr('action') + expense_id);

                    $('#sender').val($(this).data('sender'));
                    $('#reciever').val($(this).data('reciever'));
                    $('#payment_mode').val($(this).data('payment_mode'));
                    $('#purpose').val($(this).data('purpose'));
                    $('#amount').val($(this).data('amount'));
                    $('#date_transaction').val($(this).data('date_transaction'));
                });

            });
		</script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
            google.charts.load("current", {packages: ["corechart"]});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', ""],
                    ['Total Amount Recorded in January', $('#piechart_3d').data('jan_total_amount')],
                    ['Total Amount Recorded in February', $('#piechart_3d').data('feb_total_amount')],
                    ['Total Amount Recorded in March', $('#piechart_3d').data('mar_total_amount')],
                    ['Total Amount Recorded in April', $('#piechart_3d').data('apr_total_amount')],
                    ['Total Amount Recorded in May', $('#piechart_3d').data('may_total_amount')],
                    ['Total Amount Recorded in June', $('#piechart_3d').data('jun_total_amount')],
                    ['Total Amount Recorded in July', $('#piechart_3d').data('jul_total_amount')],
                    ['Total Amount Recorded in August', $('#piechart_3d').data('aug_total_amount')],
                    ['Total Amount Recorded in September', $('#piechart_3d').data('sep_total_amount')],
                    ['Total Amount Recorded in October', $('#piechart_3d').data('oct_total_amount')],
                    ['Total Amount Recorded in November', $('#piechart_3d').data('nov_total_amount')],
                    ['Total Amount Recorded in December', $('#piechart_3d').data('dec_total_amount')],
                ]);

                var options = {
                    title: 'Money recorded per month in ' + new Date().getFullYear(),
                    is3D: true,
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);
            }

            $(window).resize(function () {
                drawChart();
            });
		</script>
</body>
</html>
