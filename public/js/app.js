/* ============================================
   KAI MAGANG — JAVASCRIPT
   ============================================ */

// ---- NAVBAR SCROLL ----
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 10) {
        navbar.style.boxShadow = '0 4px 20px rgba(0,0,0,0.12)';
    } else {
        navbar.style.boxShadow = '0 2px 12px rgba(0,0,0,0.08)';
    }
});

// ---- MOBILE MENU ----
function toggleMobile() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('open');
}

// ---- UNIT DATA ----
const unitData = {
    si: {
        title: 'SISTEM INFORMASI',
        breadcrumb: 'Sistem informasi',
        kuota: 'Kuota : 10 Mahasiswa',
        desc: 'Unit Sistem informasi bertanggung jawab dalam pengembangan sistem, pengelolaan data, infrastruktur IT dan layanan teknologi informasi di lingkungan PT KAI',
        imgLabel: 'Teknologi Informasi',
        kualifikasi: [
            'Siswa/Mahasiswa aktif',
            'Jurusan Informasi/Informatika / Jurusan Informatika/Teknik Komputer',
            'Ipk Minimal 3.00',
            'Memahami Dasar Programan',
            'Bersedia magang sesuai peraturan KAI dan janji unit sistem informasi'
        ]
    },
    sdm: {
        title: 'SDM (HUMAN CAPITAL)',
        breadcrumb: 'SDM (Human Capital)',
        kuota: 'Kuota : 6 Mahasiswa',
        desc: 'Unit SDM bertanggung jawab dalam administrasi kepegawaian, rekrutmen, pelatihan, dan pengembangan sumber daya manusia di lingkungan PT KAI.',
        imgLabel: 'Human Capital',
        kualifikasi: [
            'Siswa/Mahasiswa aktif',
            'Jurusan Manajemen SDM / Psikologi / Administrasi Bisnis',
            'Ipk Minimal 3.00',
            'Memahami dasar manajemen SDM',
            'Bersedia magang sesuai peraturan KAI'
        ]
    },
    ops: {
        title: 'OPERASIONAL',
        breadcrumb: 'Operasional',
        kuota: 'Kuota : 12 Mahasiswa',
        desc: 'Unit Operasional bertanggung jawab dalam mendukung dan memastikan kelancaran operasional kereta api di lingkungan PT KAI Divre III Palembang.',
        imgLabel: 'Operasional KAI',
        kualifikasi: [
            'Siswa/Mahasiswa aktif',
            'Jurusan Teknik Perkeretaapian / Transportasi / Teknik Mesin',
            'Ipk Minimal 2.80',
            'Memahami operasional transportasi',
            'Bersedia magang sesuai peraturan KAI'
        ]
    },
    keu: {
        title: 'KEUANGAN',
        breadcrumb: 'Keuangan',
        kuota: 'Kuota : 8 Mahasiswa',
        desc: 'Unit Keuangan bertanggung jawab dalam administrasi keuangan perusahaan, pengelolaan anggaran, serta pelaporan keuangan di lingkungan PT KAI.',
        imgLabel: 'Keuangan',
        kualifikasi: [
            'Siswa/Mahasiswa aktif',
            'Jurusan Akuntansi / Keuangan / Ekonomi',
            'Ipk Minimal 3.00',
            'Memahami dasar akuntansi dan keuangan',
            'Bersedia magang sesuai peraturan KAI'
        ]
    },
    huk: {
        title: 'HUKUM',
        breadcrumb: 'Hukum',
        kuota: 'Kuota : 6 Mahasiswa',
        desc: 'Unit Hukum bertanggung jawab dalam administrasi hukum, kepatuhan regulasi, dan penanganan aspek legal perusahaan di lingkungan PT KAI.',
        imgLabel: 'Hukum',
        kualifikasi: [
            'Siswa/Mahasiswa aktif',
            'Jurusan Hukum / Ilmu Hukum',
            'Ipk Minimal 3.00',
            'Memahami hukum perusahaan dan regulasi',
            'Bersedia magang sesuai peraturan KAI'
        ]
    },
    tjsl: {
        title: 'KOMUNIKASI & TJSL',
        breadcrumb: 'Komunikasi & TJSL',
        kuota: 'Kuota : 15 Mahasiswa',
        desc: 'Unit Komunikasi & TJSL bertanggung jawab dalam komunikasi perusahaan, hubungan publik, dan tanggung jawab sosial perusahaan PT KAI.',
        imgLabel: 'Komunikasi & TJSL',
        kualifikasi: [
            'Siswa/Mahasiswa aktif',
            'Jurusan Ilmu Komunikasi / Public Relations / Jurnalistik',
            'Ipk Minimal 3.00',
            'Memahami dasar komunikasi perusahaan',
            'Bersedia magang sesuai peraturan KAI'
        ]
    }
};

// ---- MODAL UNIT MAGANG ----
function openUnitModal() {
    const modal = document.getElementById('unitModal');
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeUnitModal(event, force = false) {
    if (force || event?.target === document.getElementById('unitModal')) {
        document.getElementById('unitModal').classList.remove('open');
        document.body.style.overflow = '';
    }
}

// ---- MODAL DETAIL UNIT ----
function openDetailModal(unitKey) {
    const data = unitData[unitKey];
    if (!data) return;

    document.getElementById('detailTitle').textContent = data.title;
    document.getElementById('detailBreadcrumb').textContent = data.breadcrumb;
    document.getElementById('detailKuota').textContent = data.kuota;
    document.getElementById('detailDesc').textContent = data.desc;
    document.getElementById('detailImgLabel').textContent = data.imgLabel;

    const ul = document.getElementById('detailKualifikasi');
    ul.innerHTML = data.kualifikasi.map(q => `<li>✅ ${q}</li>`).join('');

    document.getElementById('unitModal').classList.remove('open');
    document.getElementById('detailModal').classList.add('open');
}

function closeDetailModal(event, force = false) {
    if (force || event?.target === document.getElementById('detailModal')) {
        document.getElementById('detailModal').classList.remove('open');
        document.body.style.overflow = '';
        // kembali ke unit modal
        if (!force) return;
    }
}

// ---- CLOSE MODAL WITH ESC ----
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        document.querySelectorAll('.modal-overlay.open').forEach(m => {
            m.classList.remove('open');
        });
        document.body.style.overflow = '';
    }
});

// ---- SMOOTH SCROLL untuk anchor link ----
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});