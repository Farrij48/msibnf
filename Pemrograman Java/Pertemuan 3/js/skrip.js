function dataPerson(){
    let form = document.getElementById('frm');
    let nama = form.nama.value;
    let pekerjaan = form.pekerjaan.value;
    let hobby = form.hobby.value;
    let input = '<p>Wah, Hallo!! ' + nama + '</p>' + '<p> Pekerjaanmu: ' + pekerjaan + '</p>' + '<p> hobinya: ' + hobby + '</p>';
    let no_input = 'Maaf Terdapat Kolom yang Belum Terisi'
    let hasil = (nama && pekerjaan && hobby !='') ? input : no_input;

    document.getElementById('hasil').innerHTML = hasil;

}