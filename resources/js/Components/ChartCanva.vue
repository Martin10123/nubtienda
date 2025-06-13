<template>
    <canvas ref="chartCanvas"></canvas>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import { Chart, registerables } from 'chart.js'

Chart.register(...registerables)

const chartCanvas = ref(null)

onMounted(() => {
    new Chart(chartCanvas.value, {
        type: 'bar',
        data: {
            labels: ['Lun', 'Mar', 'Mie', 'Jue', "Vie", 'Sab', 'Dom'],
            datasets: [
                {
                    label: 'Ventas',
                    data: [1200, 1900, 3000, 2500, 3500, 4200, 2800],
                    backgroundColor: "#4A90E2",
                    borderRadius: 4,
                },

            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },


            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function (value) {
                            return '$' + value.toLocaleString();
                        }
                    }
                }
            },
        }
    })
})
</script>
