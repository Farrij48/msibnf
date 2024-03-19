function printData() {
    let namaPeg = document.getElementById("namaPeg").value;
    let jabatan = document.getElementById("jabatan").value;
    let status = document.getElementById("status").value;
    let gaji = parseInt(document.getElementById("gaji").value);

    let gajiPokokThresholds = {
        "Manajer": 15000000,
        "Staf": 5000000,
        "Asisten Manajer": 10000000
    };

    if (gaji < gajiPokokThresholds[jabatan]) {
        Swal.fire({
            title: 'Gaji Pokok Tidak Tepat',
            text: 'Gaji Pokok yang dimasukkan tidak sesuai dengan jabatan ini.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return;
    }

    let gajiPok = gaji.toLocaleString();
    let tunjanganJab = (0.15 * gaji).toLocaleString();
    let bpjs = (0.10 * gaji).toLocaleString();
    let tunjanganKel = status === "Menikah" ? (0.20 * gaji).toLocaleString() : "0"; 
    let totalGaj = (gaji + 0.15 * gaji + 0.10 * gaji + (status === "Menikah" ? 0.20 * gaji : 0)).toLocaleString(); 

    let tabel = "<table border='1'><thead><tr><th>Nama Pegawai</th><th>Jabatan</th><th>Status</th><th>Gaji Pokok</th><th>Tunjangan Jabatan</th><th>BPJS</th><th>Tunjangan Keluarga</th></tr></thead><tbody>";
    tabel += "<tr><td>" + namaPeg + "</td><td>" + jabatan + "</td><td>" + status + "</td><td>" + gajiPok + "</td><td>" + tunjanganJab + "</td><td>" +  bpjs + "</td><td>" + tunjanganKel + "</td></tr>";
    tabel += "</tbody><tfoot>";
    tabel += "<tr><th colspan='6'>Total Gaji</th><td>" + totalGaj + "</td></tr>";
    tabel += "</tfoot></table>";

    Swal.fire({
        title: 'Rincian Pegawai',
        html: tabel,
        confirmButtonText: 'OK'
    });
}

document.addEventListener("DOMContentLoaded", function() {
    let input = document.getElementById("gaji");
    let preview = document.getElementById("gajiPreview");

    input.addEventListener("input", function(event) {
        let value = event.target.value;
        let formattedValue = formatNumberWithDots(value);
        preview.textContent = formattedValue;
    });
    
    function formatNumberWithDots(value) {
        let parts = value.split('.');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return parts.join('.');
    }
});