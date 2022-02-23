<?php
  session_start();
if (empty($_SESSION['pengguna_nama'])){
	echo "<script>alert('Anda Harus Login Terlebih Dahulu !',document.location.href='index.php')</script>";	
} else {
	require_once "koneksi.php";
}

 // Buat prepared statement untuk mengambil semua data dari tbBiodata
    $query = $connect->prepare("SELECT * FROM obyek ORDER BY obyek_id desc limit 1");
    // Jalankan perintah SQL
    $query->execute();
    // Ambil semua data dan masukkan ke variable $data
    $data = $query->fetchAll();
?>
<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller_Admin_Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

<title>GIS Kursus Mobil | Lihat Data</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Google icon -->
<!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
<link rel="stylesheet" href="fonts/material-icons/material-icons.css">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<!--Font Awesome Icon-->
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

<!-- Propeller css -->
<link rel="stylesheet" type="text/css" href="assets/css/propeller.min.css">

<!-- Propeller date time picker css-->
<link rel="stylesheet" type="text/css" href="components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="components/datetimepicker/css/pmd-datetimepicker.css" />

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">

<!--bootsrap datatables-->
<link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap.min.css"  >
<link href="https://fonts.googleapis.com/css?family=Indie Flower" rel="stylesheet" type="text/css">
<style>
.wrapper {

    display: inline-block;
	
    padding-left: 270px;
	
	padding-bottom : 60px;

    width: 100%;
}

a .fa{
	font-size:20pt;
	
}

a{
	color:lightblue;
}
.title-text{
	font-style: italic;
	 font-family: Indie Flower, sans-serif;
}	
.table{
	text-align : center;
}

.table th{
	text-align:center;
}
	
	@media (max-width: 768px) {

    .header {
        position: absolute;
    }

   

    /* body container */
    #main-content {
        margin: 0px!important;
        position: none !important;
    }

}
</style>

<!-- Styles Ends --></head>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

	<div class="container-fluid">
		<div class="pmd-navbar-right-icon pull-right navigation">
			<!-- Notifications -->
            <div class="dropdown notification icons pmd-dropdown">
			
				<a href="javascript:void(0)" title="Notification" class="dropdown-toggle pmd-ripple-effect"  data-toggle="dropdown" role="button" aria-expanded="true">
					<div  class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap">notifications_none</div>
				</a>
			
				<div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu">
					<!-- Card header -->
					<div class="pmd-card-title">
						<div class="media-body media-middle">
							<h3 class="pmd-card-title-text">Notifications</h3>
						</div>
					</div>
					
					<!-- Notifications list -->
					<ul class="list-group pmd-list-avatar pmd-card-list">
						<li class="list-group-item" style="display:none">
							<p class="notification-blank">
								<span class="dic dic-notifications-none"></span> 
								<span>You don�t have any notifications</span>
							</p>
						</li>
						<?php 
						foreach ($data as $value): 				
						?>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="obyek_foto/<?php echo $value['obyek_foto'] ?>" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><?php echo $value['obyek_nama'] ?></span>
									<span class="list-group-item-text">Telah ditambahkan ke Database</span>
								</div>
							</a>
						</li>
						<?php endforeach; ?>
					</ul><!-- End notifications list -->

				</div>
				
				
            </div> <!-- End notifications -->
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a>	
		  <a href="admin.php" class="navbar-brand">
		  	<span >GIS Kursus Mobil </span> 
		  </a>
		</div>
	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">
		
		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left">
					<img src="themes/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle"><?php echo $_SESSION['pengguna_nama']; ?></div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
		</li><!-- End user info -->
<?php include "menu.php" ?>
</ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->  
	
<!--content area start-->
<div id="content">
	<div class="wrapper">
	<div class="container-fluid">
		<div class="row" id="card-masonry">
		 
		 <!-- Today's Site Activity -->
		 <div class="col-lg-12" style="padding-top:80px;">
			 <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="admin.php"> Home</a></li>
						<li><i class="fa fa-file-text-o"></i> Kelola Data</li>
						<li><i class="fa fa-table"></i> Lihat Data</li>
					</ol>
				</div>
			</div>
			 <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            <h1>Lihat Data</h1>
							<hr>
                          </header>
                          <div class="panel-body">
						  <?php 
						  // Buat prepared statement untuk mengambil semua data dari tbBiodata
						$query = $connect->prepare("SELECT * FROM obyek ORDER BY obyek_nama");
						// Jalankan perintah SQL
						$query->execute();
						// Ambil semua data dan masukkan ke variable $data
							$data = $query->fetchAll();
						  ?>
                             <table id="myTable" class="table table-hover row-border" cellspacing="0" width="100%" style="font-size:10pt;">
									<thead class="bg-info">
										<tr>
											<th>No.</th>
											<th>Nama</th>
											<th>Latitude</th>
											<th>Longitude</th>
											<th>No. Telepon</th>
											<th>Alamat</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										 $i =1;
										foreach ($data as $value): 
										
										?>
										<tr>
										<td>
										<?php echo $i ?>
										</td>
										<td>
										<?php echo $value['obyek_nama'] ?>
										</td>
										<td>
										<?php echo $value['obyek_latitude'] ?>
										</td>
										<td>
										<?php echo $value['obyek_longitude'] ?>
										</td>
										<td>
										<?php echo $value['obyek_telp'] ?>
										</td>
										<td>
										<?php echo $value['obyek_alamat'] ?>
										</td>
										<td>
										<a href="editdata.php?id=<?php echo $value['obyek_id']?>"><i class="fa fa-pencil-square"></i></a>
										<a onclick="return confirm ('Yakin Hapus <?php echo $value['obyek_nama'];?> ?');" href="deletedata.php?id=<?php echo $value['obyek_id']?>"><i class="fa fa-trash"></i></a>
										</td>
										</tr>
										<?php $i++; endforeach; ?>
									</tbody>
								</table>
                          </div>
                      </section>
                  </div>
              </div>
		 </div> <!--end Today's Site Activity -->
		 
		 </div>
	</div>
	</div>
</div><!--end content area-->

<!-- Footer Starts -->
<!--footer start-->
<footer class="admin-footer">
 <div class="container-fluid">
 	<ul class="list-unstyled list-inline">
	 	<li>
			<span class="pmd-card-subtitle-text">GIS 6 B &copy; 2017. All Rights Reserved.</span>
			<h3 class="pmd-card-subtitle-text">Made by Muhammad Fauzi Pane</h3>
        <li class="pull-right for-support">
			<a href="mailto:support@propeller.in">
          		<div>
					<svg x="0px" y="0px" width="38px" height="38px" viewBox="0 0 38 38" enable-background="new 0 0 38 38">
<g><path fill="#A5A4A4" d="M25.621,21.085c-0.642-0.682-1.483-0.682-2.165,0c-0.521,0.521-1.003,1.002-1.524,1.523
		c-0.16,0.16-0.24,0.16-0.44,0.08c-0.321-0.2-0.683-0.32-1.003-0.521c-1.483-0.922-2.726-2.125-3.809-3.488
		c-0.521-0.681-1.002-1.402-1.363-2.205c-0.04-0.16-0.04-0.24,0.08-0.4c0.521-0.481,1.002-1.003,1.524-1.483
		c0.721-0.722,0.721-1.524,0-2.246c-0.441-0.44-0.842-0.842-1.203-1.202c-0.441-0.441-0.842-0.842-1.243-1.243
		c-0.642-0.642-1.483-0.642-2.165,0c-0.521,0.521-1.002,1.002-1.524,1.523c-0.481,0.481-0.722,1.043-0.802,1.685
		c-0.08,1.042,0.16,2.085,0.521,3.047c0.762,2.085,1.925,3.849,3.328,5.532c1.884,2.286,4.17,4.05,6.815,5.333
		c1.203,0.562,2.406,1.002,3.729,1.123c0.922,0.04,1.724-0.201,2.365-0.923c0.441-0.521,0.923-0.922,1.403-1.403
		c0.682-0.722,0.682-1.563,0-2.245C27.265,22.729,26.423,21.927,25.621,21.085z"/>
	<path fill="#A5A4A4" d="M32.437,5.568C28.869,2,24.098-0.005,19.005-0.005S9.182,2,5.573,5.568C2.005,9.177,0,13.908,0,19
		s1.965,9.823,5.573,13.432c3.568,3.568,8.34,5.573,13.432,5.573s9.823-1.965,13.431-5.573
		C39.854,25.014,39.854,12.985,32.437,5.568z M30.299,30.294c-3.003,3.045-7.021,4.695-11.293,4.695
		c-4.272,0-8.291-1.65-11.294-4.695C4.666,27.29,3.016,23.271,3.016,19c0-4.272,1.649-8.291,4.695-11.294
		c3.003-3.003,7.022-4.695,11.294-4.695c4.272,0,8.291,1.649,11.293,4.695C36.56,13.924,36.56,24.075,30.299,30.294z"/>
</g></svg>
            	</div>
            	<div>
				  <span class="pmd-card-subtitle-text">For Support</span>
				  <h3 class="pmd-card-title-text">081276069868</h3>
				</div>
            </a>
        </li>
    </ul>
 </div>
</footer>
<!--footer end-->
<!-- Footer Ends -->

<!-- Scripts Starts -->
<script src="assets/js/jquery-1.12.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--jquery-DataTable-->
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<!--JavaScript core-->
<script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
<script>
//datatable
$(document).ready(function() {
    var table = $('#myTable').DataTable( {
      
    } );
	
} );
</script>
<script>
	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
		});
	});
</script>
<script type="text/javascript">
(function() {
  "use strict";
  var toggles = document.querySelectorAll(".c-hamburger");
  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };
  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();
</script>

<script src="assets/js/propeller.min.js"></script> 

<!-- Javascript for revenue progressbar animation effect-->
<script>
	function progress(percent, $element) {
		var progressBarWidth = percent * $element.width() / 100;
		$element.find('.progress-bar').animate({ width: progressBarWidth }, 500);
	} 
	
	progress(50, $('.cash-progressbar'));
	progress(30, $('.card-progressbar'));
	progress(60, $('.wallet-progressbar'));
	progress(40, $('.credit-progressbar'));
	progress(10, $('.other-progressbar'));
</script>
<!-- Javascript for revenue progressbar animation effect-->	


<!--circle chart-->
<script src="themes/js/circles.min.js"></script>
<script>
  <!-- javascript for total sales chart-->
		var colors = [
			['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
		], circles = [];

		for (var i = 1; i <= 5; i++) {
			var child = document.getElementById('circles-' + i),
				percentage = 10 + (i * 8);

			circles.push(Circles.create({
				id:         child.id,
				value:		percentage,
				radius:     50,
				width:      7,
				colors:     colors[i - 1],
 				textClass:           'circles-text',
  				styleText:           true
			}));
		}
  <!-- javascript for total sales chart-->
	</script>

<!--staked column chart for payment-->
<script src="themes/js/highcharts.js"></script>
<script src="themes/js/highcharts-more.js"></script>

<!-- Payment chart js-->
<script>
$(function paymentChart(){
    $('#payment-chart').highcharts({
        chart: {
            type: 'column'
        },
		colors: "#00719d,#2ab7ee".split(","),
        title: {
            text: 'Last 10 days comparison',
			style: {
                color: "#4d575d",
                fontSize: "14px",
            },
        },
        xAxis: {
            categories: ['9-7', '10-7', '11-7', '12-7', '13-7', '14-7', '15-7', '16-7', '17-7', '18-7']
        },
        yAxis: {
            min: 0,
			
			title: {
					text: "Amount"
			},
			stackLabels: {
					enabled: false,
					style: {
						fontWeight: 'bold',
						color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
					}
				}
			},
        legend: {
            enabled: !0,
            align: "right",
            layout: "horizontal",
            labelFormatter: function() {
                return this.name
            },
            borderColor: false,
            borderRadius: 0,
            navigation: {
                activeColor: "#274b6d",
                inactiveColor: "#CCC"
            },
            shadow: false,
            itemStyle: {
                color: "#888888",
                fontSize: "12px",
                fontWeight: "normal"
            },
            itemHoverStyle: {
                color: "#000"
            },
            itemHiddenStyle: {
                color: "#CCC"
            },
            itemCheckboxStyle: {
                position: "absolute"
            },
			symbolHeight: 10,
			symbolWidth: 10,
            symbolPadding: 5,
            verticalAlign: "bottom",
            x: 0,
            y: 0,
            title: {
                style: {
                    fontWeight: "normal"
                }
            }
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}',
			backgroundColor: '#ffffff',
			borderColor: '#f0f0f0',
			shadow: true
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: false,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
		 credits: {
            enabled: false,
        },
        series: [{
            name: 'Card',
            data: [25000, 50000, 75000, 75000, 60000, 70000, 10000, 2500, 5000, 25000]
        }, {
            name: 'Wallet',
            data: [75000, 50000, 25000, 25000, 30000, 30000, 90000, 25000, 3000, 50000]
        }]
		
    });
});
</script>

<!--staked column chart for sms details-->
<script>
$( function smsChart() { 
    $('#sms-chart').highcharts({
        chart: {
            zoomType: 'none'
        },
		colors: "#e75c5c,#9159b8".split(","),
         title: {
            text: 'Last 7 days comparison',
			style: {
                color: "#4d575d",
                fontSize: "14px",
            },
        },
        xAxis: [{
            categories: ['3-7', '4-7', '5-7', '6-7', '7-7', '8-7', '9-7']
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'User Count',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Total Days',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
		legend: {
            enabled: !0,
            align: "right",
			layout: "horizontal",
            labelFormatter: function() {
                return this.name
            },
            borderColor: false,
            borderRadius: 0,
            navigation: {
                activeColor: "#274b6d",
                inactiveColor: "#CCC"
            },
            shadow: false,
            itemStyle: {
                color: "#888888",
                fontSize: "12px",
                fontWeight: "normal"
            },
            itemHoverStyle: {
                color: "#000"
            },
            itemHiddenStyle: {
                color: "#CCC"
            },
            itemCheckboxStyle: {
                position: "absolute",
                width: "12px",
                height: "12px"
            },
			symbolHeight: 10,
			symbolWidth: 10,
            symbolPadding: 5,
            verticalAlign: "bottom",
            x: 0,
            y: 0,
            title: {
                style: {
                    fontWeight: "normal"
                }
            }
        },

        tooltip: {
            shared: true,
			backgroundColor: '#ffffff',
			borderColor: '#f0f0f0',
			shadow: true
        },
		 credits: {
            enabled: false,
        },

        series: [{
            name: 'Total Days',
            type: 'spline',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6],
            tooltip: {
                pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: '
            }
        }, {
            name: 'Total Days error',
            type: 'errorbar',
            yAxis: 1,
            data: [[48, 51], [68, 73], [92, 110], [128, 136], [140, 150], [171, 179], [135, 143]],
            tooltip: {
                pointFormat: '(error range: {point.low}-{point.high})<br/>'
            }
        }, {
            name: 'User Count',
            type: 'column',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2],
            tooltip: {
                pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: <b>{point.y:.1f}</b> '
            }
        }, {
            name: 'User Count error',
            type: 'errorbar',
            data: [[6, 8], [5.9, 7.6], [9.4, 10.4], [14.1, 15.9], [18.0, 20.1], [21.0, 24.0], [23.2, 25.3]],
            tooltip: {
                pointFormat: '(error range: {point.low}-{point.high})<br/>'
            }
        }]
    });
});
</script>
<!-- Scripts Ends -->
<!-- Javascript for Datepicker -->
<script type="text/javascript" language="javascript" src="components/datetimepicker/js/moment-with-locales.js"></script>
<script type="text/javascript" language="javascript" src="components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script>
	// Linked date and time picker 
	// start date date and time picker 
	$('#datepicker-default').datetimepicker();
</script>

</body>
</html>