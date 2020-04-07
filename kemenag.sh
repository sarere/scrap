for file in /home/caplank/Desktop/scrap/kemenag/*; do
    # sed '$!N;$!N;$!N;s/\n/ /g' -i "${file}"
    # sed -e 's/ \+/ /g'  -i "${file}"
    sed  -i '1i #,"Nama Lembaga",Jenjang,Status,NSM,Siswa,Guru,Tendik,Rombel,Perpus,Lab.,Semester,Kecamatan,Kabupaten/Kota,Provinsi' "${file}"
done

