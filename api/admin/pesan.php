<?php
if (isset($_POST['pesan_tiket'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_ktp = $_POST['no_ktp'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];
    $kelas_penumpang = $_POST['kelas_penumpang'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $jumlah_penumpang = $_POST['jumlah_penumpang'];
    $jumlah_penumpang_lansia = $_POST['jumlah_penumpang_lansia'];
    $harga_tiket = $_POST['input_harga_tiket'];
    $total_bayar = $_POST['input_total_bayar'];
    $status = $_POST['syarat_ketentuan'];

    $sql = mysqli_query($koneksi, "INSERT INTO pesan (id_pesan, nama_lengkap, no_ktp, no_telepon, alamat, kelas_penumpang, tgl_berangkat, jumlah_penumpang, jumlah_penumpang_lansia, harga_tiket, total_bayar, status) VALUES ('', '$nama_lengkap', '$no_ktp', '$alamat', '$no_telepon', '$kelas_penumpang', '$tgl_berangkat', '$jumlah_penumpang', '$jumlah_penumpang_lansia', '$harga_tiket', '$total_bayar', '$status')");

    if ($sql) {
        echo "<b>Berhasil Ditambahkan</b></br></br>"; ?>
        <div class="col-lg-6">
            <table class="table table-bordered" style="border: 0 !important;">
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td><?php echo $nama_lengkap; ?></td>
                </tr>
                <tr>
                    <td>Nomor Identitas</td>
                    <td>:</td>
                    <td><?php echo $no_ktp; ?></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><?php echo $no_telepon; ?></td>
                </tr>
                <tr>
                    <td>Kelas Penumpang</td>
                    <td>:</td>
                    <td><?php echo $kelas_penumpang; ?></td>
                </tr>
                <tr>
                    <td>Jumlah Penumpang</td>
                    <td>:</td>
                    <td><?php echo $jumlah_penumpang; ?></td>
                </tr>
                <tr>
                    <td>Jumlah Penumpang Lansia</td>
                    <td>:</td>
                    <td><?php echo $jumlah_penumpang_lansia; ?></td>
                </tr>
                <tr>
                    <td>Harga Tiket</td>
                    <td>:</td>
                    <td><?php echo $harga_tiket; ?></td>
                </tr>
                <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td><?php echo $total_bayar; ?></td>
                </tr>
            </table>
        </div>
<?php
    } else {
        echo "Berhasil Ditambahkan";
    }
}
?>




<div class="col-lg-12">
    <h2>Form Pemesanan</h2>
    <form action="" method="post">
        <table class="table table-bordered" style="border: 0 !important;">
            <tr>
                <td style="width: 30%;"><label for="nama_lengkap">Nama Lengkap</label></td>
                <td><input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" maxlength="25" required></td>
            </tr>
            <tr>
                <td style="width: 30%;"><label for="no_ktp">No Identitas (KTP)</label></td>
                <td><input type="text" name="no_ktp" class="form-control" id="no_ktp" maxlength="16" required></td>
            </tr>
            <tr>
                <td style="width: 30%;"><label for="no_telepon">No. HP</label></td>
                <td><input type="tel" name="no_telepon" class="form-control" id="no_telepon" maxlength="12" required></td>
            </tr>
            <tr>
                <td style="width: 30%;"><label for="alamat">Alamat</label></td>
                <td><input type="text" name="alamat" class="form-control" id="alamat" required></td>
            </tr>
            <tr>
                <td style="width: 30%;"><label for="kelas_penumpang">Kelas Penumpang</label></td>
                <td><select name="kelas_penumpang" id="kelas_penumpang" class="form-control">
                        <option value="ekonomi">Ekonomi</option>
                        <option value="bisnis">Bisnis</option>
                        <option value="eksekutif">Eksekutif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="width: 30%;"><label for="tgl_berangkat">Jadwal Keberangkatan</label></td>
                <td><input type="date" name="tgl_berangkat" class="form-control" id="tgl_berangkat" required></td>
            </tr>
            <tr>
                <td style="width: 30%;">
                    <label for="jumlah_penumpang">Jumlah Penumpang<br>
                        <span class="smalltext-pesan">Bukan Lansia (Usia < 60)</span>
                    </label>
                </td>
                <td><input type="number" name="jumlah_penumpang" class="form-control" id="jumlah_penumpang" min="0" max="99" onkeydown="return false" required></td>
            </tr>
            <tr>
                <td style="width: 30%;">
                    <label for="jumlah_penumpang_lansia">Jumlah Penumpang Lansia<br>
                        <span class="smalltext-pesan">Usia 60 tahun ke atas</span>
                    </label>
                </td>
                <td><input type="number" name="jumlah_penumpang_lansia" class="form-control" id="jumlah_penumpang_lansia" min="0" max="99" onkeydown="return false" required></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>Rp <span id="harga_tiket">80000</span></td>
                <td><input type="hidden" id="input_harga_tiket" name="input_harga_tiket"></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>Rp <span id="total_bayar">0</span></td>
                <td><input type="hidden" name="input_total_bayar" id="input_total_bayar"></td>
            </tr>
            <tr>
                <td><input type="checkbox" value="1" name="syarat_ketentuan" required></td>
                <td>Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</td>
            </tr>
        </table>
        <table class="table table-bordered" style="border: 0 !important;">
            <tr>
                <td><a id="btnHitungTotal" onclick="hitungTotal()" href="#" class="btn btn-info btn-block btn-lg">Hitung Total Bayar</a></td>
                <td><input type="submit" name="pesan_tiket" class="btn btn-success btn-block btn-lg" value="Pesan Tiket"></td>
                <td><input type="reset" id="btnCancel" name="reset" class="btn btn-warning btn-block btn-lg" value="Cancel"></td>
            </tr>
        </table>
    </form>
</div>

<script>
    let kelasPenumpang = document.getElementById('kelas_penumpang');
    const hargaTiket = document.getElementById('harga_tiket');
    const totalBayar = document.getElementById('total_bayar');
    const input_harga_tiket = document.getElementById('input_harga_tiket');
    const input_total_bayar = document.getElementById('input_total_bayar');

    kelasPenumpang.addEventListener("click", function() {
        switch (kelasPenumpang.value) {
            case "ekonomi":
                hargaTiket.textContent = 80000;
                input_harga_tiket.value = 80000;
                break;
            case "bisnis":
                hargaTiket.textContent = 200000;
                input_harga_tiket.value = 200000;
                break;
            case "eksekutif":
                hargaTiket.textContent = 350000;
                input_harga_tiket.value = 350000;
                break;
        }
    })

    const btnHitungTotal = document.getElementById('btnHitungTotal');

    function hitungTotal() {
        const jumlahPenumpang = document.getElementById('jumlah_penumpang').value;
        const jumlahPenumpangLansia = document.getElementById('jumlah_penumpang_lansia').value;

        let hargaTiketTerbaru = hargaTiket.textContent;

        let totalBayarNonLansia = jumlahPenumpang * hargaTiketTerbaru;
        let totalBayarLansia = (hargaTiketTerbaru - (hargaTiketTerbaru * 0.1)) * jumlahPenumpangLansia;

        console.log(totalBayarLansia);

        totalBayar.textContent = totalBayarNonLansia + totalBayarLansia;
        input_total_bayar.value = totalBayarNonLansia + totalBayarLansia;

    }
</script>