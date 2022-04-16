<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mundatus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans">
    
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon/favicon.ico">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand mb-0 h1 Montserrat" href="/">Mundatus</a>
        <a class="navbar-brand" href="https://github.com/ChispasHK/Mundatus"><i class="bi bi-github"></i> </a>
      </div>
    </nav>

<?PHP
  if(!empty($_FILES['uploaded_file'])) {
   // $folder = shell_exec('pwd' '/file/');
    $pathDir = getcwd() . "/file/";
    $path = $pathDir . basename( $_FILES['uploaded_file']['name']);
	// upload_max_filesize 
	$maxFilesize = ini_get('upload_max_filesize');

	// check type file Array
	$typeFile = array('360',
	'3G2', '3GP2',
	'3GP', '3GPP',
	'AAX',
	'AI', 'AIT',
	'ARQ',
	'ARW',
	'AVIF',
	'CR2',
	'CR3',
	'CRM',
	'CRW', 'CIFF',
	'CS1',
	'DCP',
	'DNG',
	'DR4',
	'DVB',
	'EPS', 'EPSF', 'PS',
	'ERF',
	'EXIF',
	'EXV',
	'F4A', 'F4B', 'F4P', 'F4V',
	'FFF',
	'FLIF',
	'GIF',
	'GPR',
	'HDP', 'WDP', 'JXR',
	'HEIC', 'HEIF', 'HIF',
	'ICC', 'ICM',
	'IIQ',
	'IND', 'INDD', 'INDT',
	'INSP',
	'JP2', 'JPF', 'JPM', 'JPX',
	'JPEG', 'JPG', 'JPE',
	'JXL',
	'LRV',
	'M4A', 'M4B', 'M4P', 'M4V',
	'MEF',
	'MIE',
	'MOS',
	'MOV', 'QT',
	'MP4',
	'MPO',
	'MQV',
	'MRW',
	'NEF',
	'NKSC',
	'NRW',
	'ORF', 'ORI',
	'PDF',
	'PEF',
	'PNG', 'JNG', 'MNG',
	'PPM', 'PBM', 'PGM',
	'PSD', 'PSB', 'PSDT',
	'QTIF', 'QTI', 'QIF',
	'RAF',
	'RAW',
	'RW2',
	'RWL',
	'SR2',
	'SRW',
	'THM',
	'TIFF, TIF',
	'VRD',
	'X3F',
	'XMP',
	'360',
	'3g2, 3gp2',
	'3gp, 3gpp',
	'aax',
	'ai, ait',
	'arq',
	'arw',
	'avif',
	'cr2',
	'cr3',
	'crm',
	'crw', 'ciff',
	'cs1',
	'dcp',
	'dng',
	'dr4',
	'dvb',
	'eps', 'epsf', 'ps',
	'erf',
	'exif',
	'exv',
	'f4a', 'f4b', 'f4p', 'f4v',
	'fff',
	'flif',
	'gif',
	'gpr',
	'hdp', 'wdp', 'jxr',
	'heic', 'heif', 'hif',
	'icc', 'icm',
	'iiq',
	'ind', 'indd', 'indt',
	'insp',
	'jp2', 'jpf', 'jpm', 'jpx',
	'jpeg', 'jpg', 'jpe',
	'jxl',
	'lrv',
	'm4a', 'm4b', 'm4p', 'm4v',
	'mef',
	'mie',
	'mos',
	'mov', 'qt',
	'mp4',
	'mpo',
	'mqv',
	'mrw',
	'nef',
	'nksc',
	'nrw',
	'orf', 'ori',
	'pdf',
	'pef',
	'png', 'jng', 'mng',
	'ppm', 'pbm', 'pgm',
	'psd', 'psb', 'psdt',
	'qtif', 'qti', 'qif',
	'raf',
	'raw',
	'rw2',
	'rwl',
	'sr2',
	'srw',
	'thm',
	'tiff, tif',
	'vrd',
	'x3f',
	'xmp'
	);

	// check type file
	$filename = $_FILES['uploaded_file']['name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if (!in_array($ext, $typeFile)) {
		?>
		<div class="alert alert-danger" role="alert">
			<div class="text-center">
				<i class="bi bi-exclamation-triangle"></i> <?php echo 'Error type file.'; ?> <a href="/" class="alert-link">Please try again</a>
			</div>
		</div>
	<?php

	} else {

		if ( $_FILES['uploaded_file']['size'] > 512000000 /* size limiter must be changed by hand */ ) {
			?>
				<div class="alert alert-danger" role="alert">
					<div class="text-center">
						<i class="bi bi-exclamation-triangle"></i> <?php echo "Exceeded file size limit."; ?> <a href="/" class="alert-link">Please try again</a>
					</div>
				</div>
			<?php
		} else {

			if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
			// execute exiftool -all remove metadate
			$salida = shell_exec('exiftool -all=  '. $path);

			//download file
			if (file_exists($path)) {
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename="'.basename($path).'"');
					header('Expires: 0');
					header('Cache-Control: must-revalidate');
					header('Pragma: public');
					header('Content-Length: ' . filesize($path));
					readfile($path);
				}

			// remove file upload
			shell_exec('rm -f '.$path);
			shell_exec('rm -f '.$path.'_original');
			// remove all file in directory
			shell_exec('rm -f '.$pathDir.'*');

			} else { 
				?>
					<div class="alert alert-danger" role="alert">
						<div class="text-center">
							<i class="bi bi-exclamation-triangle"></i> <?php echo "There was an error uploading the file, "; ?> <a href="/" class="alert-link">Please try again</a>
						</div>
					</div>
				<?php
				
			}
		}
	}
}
?>

<footer class="footer mt-auto">
      <div class="text-center">
        Built and developed by  <a href="https://www.cybernotrum.com/"> Cyber Notrum </a>
      </div>
    </footer>

  </body>
</html>
