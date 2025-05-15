function showModal(namaPerusahaan, profilPerusahaan, deskripsiKerjasama) {
    document.getElementById('modalTitle').innerText = namaPerusahaan;
    document.getElementById('modalProfil').innerText = profilPerusahaan;
    document.getElementById('modalDeskripsi').innerText = deskripsiKerjasama;
    document.getElementById('popupModal').style.display = "block";
}

function closeModal() {
    document.getElementById('popupModal').style.display = 'none';
}

// Tutup modal jika klik di luar modal
window.onclick = function (event) {
    var modal = document.getElementById('popupModal');
    if (event.target == modal) {
        closeModal();
    }
}


document.addEventListener("DOMContentLoaded", function () {
    const arrowUp = document.querySelector('.footer-item.arrow-up');
    if (arrowUp) {
        arrowUp.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' }); // Smooth scroll ke atas
        });
    }
});

// Placeholder if interactivity is needed later
console.log("Berita page loaded");
// Placeholder for any future JavaScript functionality

// (Opsional) JavaScript dapat digunakan untuk interaksi tambahan, seperti lightbox untuk gambar, dll.
document.addEventListener('DOMContentLoaded', function () {
    // Contoh: Menambahkan class 'active' ke tautan breadcrumbs saat ini
    const breadcrumbs = document.querySelector('.breadcrumbs a:last-child');
    if (breadcrumbs) {
        breadcrumbs.classList.add('active');
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const path = window.location.pathname;
    const breadcrumbs = document.querySelector(".breadcrumbs");

    // Hanya contoh interaktif
    if (path.includes("news")) {
        breadcrumbs.style.fontWeight = 'bold';
    }
});


function showModal(title, profil, deskripsi) {
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalProfil').innerText = profil;
    document.getElementById('modalDeskripsi').innerText = deskripsi;

    // Tampilkan modal
    document.getElementById('popupModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('popupModal').style.display = 'none';
}

// Menutup modal jika klik di luar konten
window.onclick = function (event) {
    const modal = document.getElementById('popupModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}

