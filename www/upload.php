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
		echo 'Error type file';

	} else {

		if ( $_FILES['uploaded_file']['size'] > 512000000 /* size limiter must be changed by hand */ ) {
		echo "Exceeded file size limit.";
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
				echo "There was an error uploading the file, please try again!";
			}
		}
	}
}
?>
