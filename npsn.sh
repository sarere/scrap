for file in /home/caplank/Desktop/scrap/"DATA SEKOLAH (JENIS PENDIDIKAN)"/*; do
	awk -F "\"*,\"*" '{print $2}' "${file}" > raw-npsn.txt
	sed -i -e 's/\<NPSN\>//g' raw-npsn.txt
	sed -i '/^$/d' raw-npsn.txt
	sed -i 's/^ *//g' raw-npsn.txt
	sed -i 's/[[:blank:]]*$//' raw-npsn.txt
	php -q kontak.php "${file##*/}"
	# echo '-----'
done
