const dataPerTahun = {
  "2022": [50, 20, 30, 40, 25, 35, 45],
  "2023": [60, 25, 28, 38, 32, 40, 50],
  "2024": [55, 30, 35, 45, 30, 42, 48],
};

const labels = ['Pencurian', 'Pembunuhan', 'Kejahatan Seksual','Prostitusi','Perjudian','Perkelahian Tawuran','Miras dan Narkoba'];

const currentYear = new Date().getFullYear();
if (!dataPerTahun[currentYear]) {
  dataPerTahun[currentYear] = [0, 0, 0, 0, 0, 0, 0];
}

// Tambah dropdown item tahun sekarang jika belum ada
const dropdownMenu = document.querySelector('.dropdown-menu');
if (!document.querySelector(`[data-tahun="${currentYear}"]`)) {
  const li = document.createElement('li');
  li.innerHTML = `<a class="dropdown-tahun" href="#" data-tahun="${currentYear}">${currentYear}</a>`;
  dropdownMenu.appendChild(li);
}

// Inisialisasi Chart untuk tahun sekarang
const ctx = document.getElementById('barChart').getContext('2d');
let barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: labels,
    datasets: [{
      label: `Jumlah Kasus Tahun (${currentYear})`,
      data: dataPerTahun[currentYear],
      backgroundColor: 'rgba(54, 162, 235, 0.7)'
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

// Update chart saat dropdown diklik
document.querySelectorAll('.dropdown-tahun').forEach(item => {
  item.addEventListener('click', function(e) {
    e.preventDefault();
    const tahun = this.getAttribute('data-tahun');
    document.getElementById('dropdownMenuButtonTahun').textContent = tahun;
    barChart.data.datasets[0].data = dataPerTahun[tahun];
    barChart.data.datasets[0].label = `Jumlah Kasus Tahun (${tahun})`;
    barChart.update();
  });
});
