// Data keamanan per RT
const keamananPerRT = {
  "RT 01": "Aman", "RT 02": "Rawan", "RT 03": "Bahaya",
  "RT 04": "Aman", "RT 05": "Rawan", "RT 06": "Aman",
  "RT 07": "Rawan", "RT 08": "Bahaya", "RT 09": "Aman", "RT 10": "Bahaya"
};

// Hitung jumlah tiap kategori
const kategoriCounts = { Aman: 0, Rawan: 0, Bahaya: 0 };
for (const status of Object.values(keamananPerRT)) {
  if (kategoriCounts[status] !== undefined) kategoriCounts[status]++;
}

// Data untuk chart
const dataKeamanan = {
  labels: ["Aman", "Rawan", "Bahaya"],
  datasets: [{
    data: [kategoriCounts.Aman, kategoriCounts.Rawan, kategoriCounts.Bahaya],
    backgroundColor: ["#28a745", "#ffc107", "#dc3545"],
    cutout: "65%"
  }]
};

// Inisialisasi chart
new Chart(document.getElementById("chart-doughnut"), {
  type: "doughnut",
  data: dataKeamanan,
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { position: "bottom" },
      tooltip: {
        callbacks: {
          label: ctx => `${ctx.label}: ${ctx.raw} RT`
        }
      }
    }
  }
});
