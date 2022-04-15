<p align="center">
  <a href="https://github.com/ChispasHK/Mundatus" rel="noopener">
 <img src="/README_img/logo-github.png" width="680"></a>
</p>

<a href="https://github.com/ChispasHK/Mundatus" style="color:#000"><h3 align="center">Mundatus</h3></a>

---

[Mundatus](https://github.com/ChispasHK/Mundatus) is a website developed by [Cyber Notrum](https://www.cybernotrum.com/), with which you can delete all the metadata of a file simple, fast and secure.

Mundatus uses the [exiftoll](https://exiftool.org/) program developed by Phil Harvey is used in the back-end.

## Installation
The installation has to be done on a UNIX system and there are three options: 
* The installation of a docker container
* The automatic installation with a script
* The manual installation.

You will need to clone the repository:
```
git clone https://github.com/ChispasHK/Mundatus
cd Mundatus/
```

Before deploying any services you have to create and configure the `file/` directory.

Create directory
```
mkdir www/file/
```
Change directory owner
```
chown www-data:www-data www/file/
```
Change directory permissions
```
chmod 766 www/file/
```

### Containerized Installation
A Mundatus instance can be setup and replicated easily using Dockerfile and Docker Compose.

Turn on the docker-compose
```
docker-compose up -d 
```

The app should be running on port 80.

### Easy Install Script
The installation script is a shell script that **only works with the Debian/Ubuntu family**, with which we can automate the installation of mundatus. 

The programs that install the script:
* Apache
* PHP
* ExifTool 12.38

#### Prerequisites
Change permissions in shell script.
```
sudo chmod 755 install.sh
```

Run the shell script with root permissions
```
sudo ./install.sh
```

### Manual Installation (Only works with the Debian/Ubuntu family)

Install Apache
```
apt install apache2 -y
```
Install PHP 
```
apt install php libapache2-mod-php -y
```
Download the Image-ExifTool distribution
```
wget https://exiftool.org/Image-ExifTool-12.38.tar.gz
```
Unpack the distribution 
```
gzip -dc Image-ExifTool-12.38.tar.gz | tar -xf -
```
Make it your current directory
```
cd Image-ExifTool-12.38
```
Test ExifTool
```
perl Makefile.PL 
```
Test ExifTool
```
apt install make -y 
```
Install ExifTool
```
make test   
```
Copy the files and move them to the apache2 directory
```
cp -r www/* /var/www/html/ 
```

We delete the `index.html` file
```
rm -r /var/www/html/index.html
```

#### Prerequisites (Configuration if you want to increase the size of the files)
You have to open the `php.ini` configuration file and look for the following directives:

```
upload_max_filesize = 10M
post_max_size = 10M
```
We change the values

## Supported File Types
| File Type |Support|File Type |Support|
| ------------- |:-------------:|:-------------:|:-------------:|
|360|✅|	JPEG, JPG, JPE|✅|	
|3G2, 3GP2|✅|	JXL|✅|	
|3GP, 3GPP|✅|	LRV|✅|	
|AAX|✅|	M4A, M4B, M4P, M4V|✅|	
|AI, AIT|✅|	MEF|✅|	
|ARQ|✅|	MIE|✅|	
|ARW|✅|	MOS|✅|	
|AVIF|✅|	MOV, QT|✅|	
|CR2|✅|	MP4|✅|	
|CR3|✅|	MPO|✅|	
|CRM|✅|	MQV|✅|	
|CRW, CIFF|✅|MRW|✅|	
|CS1|✅|NEF|✅|	
|DCP|✅|NKSC|✅|	
|DNG|✅|	NRW|✅|	
|DR4|✅|	ORF, ORI|✅|	
|DVB|✅|	PDF|✅|	
|EPS, EPSF, PS|✅|PEF|✅|	
|ERF|✅|PNG, JNG, MNG|✅|	
|EXIF|✅	|PPM, PBM, PGM|✅|	
|EXV|✅	|PSD, PSB, PSDT|✅|	
|F4A, F4B, F4P, F4V|✅	|QTIF, QTI, QIF|✅|	
|FFF|✅	|RAF|✅|	
|FLIF|✅	|RAW|✅|	
|GIF|✅	|RW2|✅|	
|GPR|✅|RWL|✅|	
|HDP, WDP, JXR|✅	|SR2|✅|	
|HEIC, HEIF, HIF|✅	|SRW|✅|	
|ICC, ICM|✅	|THM|✅|	
|IIQ|✅|TIFF, TIF|✅|	
|IND, INDD, INDT|✅	|VRD|✅|	
|INSP|✅	|X3F|✅|	
|JP2, JPF, JPM, JPX|✅	|XMP|✅|	

## License & Copyright 

MIT License (see [license](LICENSE))

The Mundatus code is licensed as MIT License and the Documentation is licensed as Creative Commons (CC-BY-SA-3.0) and the copyright is owned by [Cyber Notrum](https://www.cybernotrum.com/) and [ChispasHK](https://github.com/ChispasHK).

