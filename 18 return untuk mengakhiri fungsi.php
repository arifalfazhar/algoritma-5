<?php
function cekUmur($umur) {
    if ($umur < 18) {
        return "kamu belum cukup umur untuk masuk situs ini.";
    }
    return "Selamat, kamu boleh masuk.";
}

echo cekUmur(16); // Output: kamu belum cukup umur untuk masuk situs ini.

echo "<p><strong>by arif alfazhar</strong>";