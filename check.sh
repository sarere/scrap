# CHECK
# for file in /home/caplank/Desktop/scrap/"DATA SEKOLAH (JENIS PENDIDIKAN)"/*; do
# 	PENDIDIKAN=$(wc -l /home/caplank/Desktop/scrap/"DATA SEKOLAH (JENIS PENDIDIKAN)/${file##*/}" | cut -f1 -d' ')
#     KONTAK=$(wc -l /home/caplank/Desktop/scrap/KONTAK/"Kontak - ${file##*/}" | cut -f1 -d' ')
#     # $KONTAK = wc -l /home/caplank/Desktop/scrap/KONTAK/"Kontak - ${file##*/}"
#     if [ "$KONTAK" -ne "$PENDIDIKAN" ];then
#         awk -F "\"*,\"*" '{print $2}' "/home/caplank/Desktop/scrap/DATA SEKOLAH (JENIS PENDIDIKAN)/${file##*/}" > "/home/caplank/Desktop/scrap/CHECK/PENDIDIKAN/${file##*/}.txt"
#         sed -i -e 's/\<NPSN\>//g' "/home/caplank/Desktop/scrap/CHECK/PENDIDIKAN/${file##*/}.txt"
#         sed -i '/^$/d' "/home/caplank/Desktop/scrap/CHECK/PENDIDIKAN/${file##*/}.txt"
#         sed -i 's/^ *//g' "/home/caplank/Desktop/scrap/CHECK/PENDIDIKAN/${file##*/}.txt"
#         sed -i 's/[[:blank:]]*$//' "/home/caplank/Desktop/scrap/CHECK/PENDIDIKAN/${file##*/}.txt"

#         awk -F "\"*,\"*" '{print $1}' "/home/caplank/Desktop/scrap/KONTAK/Kontak - ${file##*/}" > "/home/caplank/Desktop/scrap/CHECK/KONTAK/${file##*/}.txt"
#         sed -i -e 's/\<NPSN\>//g' "/home/caplank/Desktop/scrap/CHECK/KONTAK/${file##*/}.txt"
#         sed -i '/^$/d' "/home/caplank/Desktop/scrap/CHECK/KONTAK/${file##*/}.txt"
#         sed -i 's/^ *//g' "/home/caplank/Desktop/scrap/CHECK/KONTAK/${file##*/}.txt"
#         sed -i 's/[[:blank:]]*$//' "/home/caplank/Desktop/scrap/CHECK/KONTAK/${file##*/}.txt"
#     fi
#     # echo '-----'
# done

# GET DIFF
# for file in /home/caplank/Desktop/scrap/CHECK/PENDIDIKAN/*; do
#     diff "/home/caplank/Desktop/scrap/CHECK/KONTAK/${file##*/}" "/home/caplank/Desktop/scrap/CHECK/PENDIDIKAN/${file##*/}" | tee "/home/caplank/Desktop/scrap/DIFF/${file##*/}"
# done


# for file in /home/caplank/Desktop/scrap/"DIFF"/*; do
#     sed -i 's|[<>,]||g' "/home/caplank/Desktop/scrap/DIFF/${file##*/}"
#     sed -i 's/^ *//g' "/home/caplank/Desktop/scrap/DIFF/${file##*/}"
# done

# CHECK FINAL
for file in /home/caplank/Desktop/scrap/"DATA SEKOLAH (JENIS PENDIDIKAN)"/*; do
	PENDIDIKAN=$(wc -l /home/caplank/Desktop/scrap/"DATA SEKOLAH (JENIS PENDIDIKAN)/${file##*/}" | cut -f1 -d' ')
    KONTAK=$(wc -l /home/caplank/Desktop/scrap/"KONTAK FINAL"/"Kontak - ${file##*/}" | cut -f1 -d' ')
    # $KONTAK = wc -l /home/caplank/Desktop/scrap/KONTAK/"Kontak - ${file##*/}"
    if [ "$KONTAK" -ne "$PENDIDIKAN" ];then
        echo "${file##*/} - ${PENDIDIKAN} - ${KONTAK}"
    fi
done