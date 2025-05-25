 const ctx = document.getElementById('barChart').getContext('2d');

  // Gradien warna (biru → ungu)
  const gradient = ctx.createLinearGradient(0, 0, 0, 400);
  gradient.addColorStop(0, '#4e73df');
  gradient.addColorStop(1, '#8e5ea2');

  // Dataset per kategori
  const datasets = {
    Kriminal: {
      labels: ['Pencurian', 'Perampokan', 'Penipuan', 'Penganiayaan'],
      data: [12, 8, 5, 3]
    },
    Bencana: {
      labels: ['Banjir', 'Gempa', 'Kebakaran', 'Angin Puting Beliung'],
      data: [7, 4, 2, 1]
    }
  };

  let barChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: datasets.Kriminal.labels,
      datasets: [{
        label: 'Jumlah Kejadian',
        data: datasets.Kriminal.data,
        backgroundColor: gradient,
        hoverBackgroundColor: '#2e59d9',
        borderRadius: 10,
        barPercentage: 0.6,
        categoryPercentage: 0.5
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      layout: {
        padding: 20
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 1,
            font: {
              size: 12,
              family: 'Segoe UI'
            },
            color: '#555'
          },
          grid: {
            color: '#e0e0e0'
          }
        },
        x: {
          ticks: {
            font: {
              size: 12,
              family: 'Segoe UI'
            },
            color: '#555'
          },
          grid: {
            display: false
          }
        }
      },
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          backgroundColor: '#333',
          titleFont: {
            size: 14,
            family: 'Segoe UI',
            weight: 'bold'
          },
          bodyFont: {
            size: 13,
            family: 'Segoe UI'
          },
          callbacks: {
            label: function(context) {
              return ` ${context.label}: ${context.parsed.y} kejadian`;
            }
          }
        }
      }
    }
  });

  // Dropdown: ubah dataset
  document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      const kategori = this.getAttribute('data-kategori');
      const dataBaru = datasets[kategori];

      barChart.data.labels = dataBaru.labels;
      barChart.data.datasets[0].data = dataBaru.data;
      barChart.update();

      document.getElementById('dropdownMenuButton2').textContent = this.textContent;
    });
  });